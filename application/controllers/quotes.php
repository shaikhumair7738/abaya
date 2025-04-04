<?php

_auth();
$ui->assign('_application_menu', 'invoices');
$ui->assign('_st', $_L['Quotes']);
$ui->assign('_title', $_L['Sales'].'- ' . $config['CompanyName']);
$action = $routes['1'];
$user = User::_info();
$ui->assign('user', $user);
switch ($action) {
    case 'new':

        Event::trigger('quotes/new/');
        $extra_fields = '';
        $extra_jq = '';
        $ui->assign('extra_fields', $extra_fields);

        if (isset($routes['3']) AND ($routes['3'] != '')) {
            $p_cid = $routes['3'];
            $p_d = ORM::for_table('crm_accounts')->find_one($p_cid);
            if ($p_d) {
                $ui->assign('p_cid', $p_cid);
            }
        } else {
            $ui->assign('p_cid', '');
        }

        $ui->assign('_st', $_L['Add Invoice']);
        $c = ORM::for_table('crm_accounts')->select('id')->select('account')->select('company')->select('email')->order_by_desc('id')->find_many();
        $ui->assign('c', $c);

				$items = ORM::for_table('sys_items')->find_many();
        $ui->assign('items', $items);
//default idate ddate
        $ui->assign('idate', date('Y-m-d'));

        $ui->assign('xheader', Asset::css(array('s2/css/select2.min','modal','dp/dist/datepicker.min','redactor/redactor')));
        $ui->assign('xfooter', Asset::js(array('validator/parsley','redactor/redactor.min','s2/js/select2.min','s2/js/i18n/'.lan(),'dp/dist/datepicker.min','dp/i18n/'.$config['language'],'numeric','modal','quotes')));

        $ui->display('add-quote.tpl');

        break;

    case 'edit':

        Event::trigger('quotes/edit/');


        $id = $routes['2'];
        $d = ORM::for_table('sys_quotes')->find_one($id);
        if ($d) {

            $extra_fields = '';
            $extra_jq = '';

            Event::trigger('edit_quote');

            $ui->assign('extra_fields', $extra_fields);

            $ui->assign('i', $d);
            $items = ORM::for_table('sys_quoteitems')->where('qid', $id)->order_by_asc('id')->find_many();
            $ui->assign('items', $items);
//find the user
            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            $ui->assign('a', $a);
            $ui->assign('d', $d);
            $ui->assign('_st', $_L['Add Invoice']);
            $c = ORM::for_table('crm_accounts')->select('id')->select('account')->select('company')->find_many();
            $ui->assign('c', $c);

            $t = ORM::for_table('sys_tax')->find_many();
            $ui->assign('t', $t);

						$prod = ORM::for_table('sys_items')->find_many();
						$ui->assign('prod', $prod);
//default idate ddate
            $ui->assign('xheader', Asset::css(array('s2/css/select2.min','modal','dp/dist/datepicker.min','redactor/redactor')));
            $ui->assign('xfooter', Asset::js(array('validator/parsley','redactor/redactor.min','s2/js/select2.min','s2/js/i18n/'.lan(),'dp/dist/datepicker.min','dp/i18n/'.$config['language'],'numeric','modal','quote-edit')));

            $ui->assign('xjq', '

$(\'#proposal_text\').redactor(
{
minHeight: 150 // pixels
}
);

$(\'#customer_notes\').redactor(
{
minHeight: 150 // pixels
}
);

 '.
                $extra_jq);

            $ui->assign('idate', date('Y-m-d'));


            $ui->display('quote-edit.tpl');

        } else {
            echo 'Quote Not Found';
        }
//find all clients.


        break;


    case 'view':

        Event::trigger('quotes/view/');


        $id = $routes['2'];
        $d = ORM::for_table('sys_quotes')->find_one($id);
        if ($d) {

            //find all activity for this user
            $items = ORM::for_table('sys_quoteitems')->where('qid', $id)->order_by_asc('id')->find_many();
            $ui->assign('items', $items);
            //find related transactions

            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            $ui->assign('a', $a);
            $ui->assign('d', $d);




            //find all custom fields

            $cf = ORM::for_table('crm_customfields')->where('showinvoice','Yes')->order_by_asc('id')->find_many();
            $ui->assign('cf',$cf);



            $ui->assign('xheader', Asset::css(array('s2/css/select2.min','dp/dist/datepicker.min','sn/summernote','sn/summernote-bs3','modal','sn/summernote-application','css/ribbon')));

            $ui->assign('xfooter', Asset::js(array('s2/js/select2.min','s2/js/i18n/'.lan(),'dp/dist/datepicker.min','dp/i18n/'.$config['language'],'numeric','modal','sn/summernote.min','jslib/quote-view')));



            $x_html = '';

            Event::trigger('view_invoice');

            $ui->assign('xjq','

             $(\'.amount\').autoNumeric(\'init\', {

    aSign: \''.$config['currency_code'].' \',
    dGroup: '.$config['thousand_separator_placement'].',
    aPad: '.$config['currency_decimal_digits'].',
    pSign: \''.$config['currency_symbol_position'].'\',
    aDec: \''.$config['dec_point'].'\',
    aSep: \''.$config['thousands_sep'].'\'

    });

            ');


            $ui->assign('x_html',$x_html);

            $ui->display('quote.tpl');

        } else {
            r2(U . 'customers/list', 'e', $_L['Account_Not_Found']);
        }

        break;

    case 'add-post':
        Event::trigger('quotes/add-post/');
        $cid = _post('cid');

        $msg = '';
        if ($cid == '') {
            $msg .= $_L['select_a_contact'].' <br> ';
        }

        $subject = $_POST['subject'];
        $proposal_text = $_POST['proposal_text'];
        $customer_notes = $_POST['customer_notes'];

        if($subject == ''){
            $msg .= $_L['Subject is Required'].' <br> ';
        }

        $idate = _post('idate');
        $its = strtotime($idate);
        $edate = _post('edate');
        $dd = '';

        if ($msg == '') {

            $invoicenum = _post('invoicenum');
            $cn = _post('cn');
            $today = date('Y-m-d');
            $vtoken = _raid(10);
						
						$sTotal = 0; $totaltaxamt = 0; $prod_total = 0;
						for($i=0; $i<count($_POST['desc']); $i++ ){
								$taxrate = ORM::for_table('sys_tax')->find_one($_POST['taxed'][$i]);
								$taxamt = $_POST['total'][$i]*$taxrate['rate']/100;
								$totaltaxamt = $totaltaxamt + $taxamt;
								$sTotal += $taxamt + $_POST['total'][$i];
								$prod_total = $prod_total + $_POST['total'][$i];
						}
            $d = ORM::for_table('sys_quotes')->create();
						
            $d->subject = $subject;
            $d->userid = $cid;
						$d->invoicenum = $invoicenum;
            $d->cn = $cn;
            $d->validuntil = _post('edate');
            $d->stage = _post('stage');
            $d->currency = 1;
            $d->total = Finance::amount_fix($prod_total);
						$d->taxamt = Finance::amount_fix($totaltaxamt);
            $d->subtotal = Finance::amount_fix($sTotal);
            $d->discount_type = _post('discount_type');
            $d->discount_value = '0.00';
            $d->discount_amt = '0.00';
            $d->proposal = $proposal_text;
            $d->customernotes = $customer_notes;
            $d->adminnotes = '';
            $d->datecreated = $idate;
            $d->lastmodified = $today;
            $d->datesent = $today;
            $d->dateaccepted = $today;
            $d->vtoken = $vtoken;
            $d->save();

            $qid = $d->id();
						
            for($i=0; $i<count($_POST['desc']); $i++ ){
            		$prod = ORM::for_table('sys_items')->find_one($_POST['desc'][$i]);		
								$taxrate = ORM::for_table('sys_tax')->find_one($_POST['taxed'][$i]);
								$taxamt = $_POST['total'][$i]*$taxrate['rate']/100;
								$subtotal = $_POST['total'][$i]+$taxamt;
								
                $d = ORM::for_table('sys_quoteitems')->create();
		
                $d->qid = $qid;
                $d->itemid = $_POST['desc'][$i];
                $d->tax_id = $_POST['taxed'][$i];
                $d->itemcode = $prod['item_number'];
                $d->description = $prod['name'];
                $d->qty = $_POST['qty'][$i];
                $d->amount = Finance::amount_fix($_POST['amount'][$i]);
                $d->taxrate = $taxrate['rate'];
								$d->total = Finance::amount_fix($_POST['total'][$i]);
								$d->subtotal = Finance::amount_fix($subtotal);
                $d->discount = '0.00';
                
                $d->save();
            }

           echo $qid;

        } else {
            echo $msg;
        }


        break;

    case 'list':
        Event::trigger('quotes/list/');
        $view_type = 'filter';

        $mode_css = Asset::css('footable/css/footable.core.min');

        $mode_js = Asset::js(array('numeric','footable/js/footable.all.min','contacts/mode_search'));


        $total_quote = ORM::for_table('sys_quotes')->count();

        $ui->assign('total_quote',$total_quote);

        $d = ORM::for_table('sys_quotes')->order_by_desc('id')->find_many();

        $paginator['contents'] = '';

        $ui->assign('xheader', $mode_css);

        $ui->assign('xfooter', $mode_js.Asset::js(array('numeric')));



        $ui->assign('d', $d);
        $ui->assign('paginator', $paginator);
        $ui->assign('xjq', '
         $(\'.amount\').autoNumeric(\'init\', {

    aSign: \''.$config['currency_code'].' \',
    dGroup: '.$config['thousand_separator_placement'].',
    aPad: '.$config['currency_decimal_digits'].',
    pSign: \''.$config['currency_symbol_position'].'\',
    aDec: \''.$config['dec_point'].'\',
    aSep: \''.$config['thousands_sep'].'\'

    });
$(".cdelete").click(function (e) {
        e.preventDefault();
        var id = this.id;
        bootbox.confirm("'.$_L['are_you_sure'].'", function(result) {
           if(result){
               var _url = $("#_url").val();
               window.location.href = _url + "delete/quote/" + id;
           }
        });
    });



 ');
        $ui->display('quotes.tpl');
        break;

    case 'list-recurring':
        Event::trigger('quotes/list-recurring/');
        $d = ORM::for_table('sys_invoices')->where_not_equal('r', '0')->order_by_desc('id')->find_many();
        $ui->assign('d', $d);
        $ui->assign('xjq', '
$(".cdelete").click(function (e) {
        e.preventDefault();
        var id = this.id;
        bootbox.confirm("'.$_L['are_you_sure'].'", function(result) {
           if(result){
               var _url = $("#_url").val();
               window.location.href = _url + "delete/invoice/" + id;
           }
        });
    });

     $(".cstop").click(function (e) {
        e.preventDefault();
        var id = this.id;
        bootbox.confirm("Are you sure? This will prevent future invoice generation from this invoice.", function(result) {
           if(result){
               var _url = $("#_url").val();
               window.location.href = _url + "invoices/stop_recurring/" + id;
           }
        });
    });

 ');
        $ui->display('list-recurring-invoices.tpl');
        break;

    case 'edit-post':

        Event::trigger('quotes/edit-post/');

        $cid = _post('cid');
        $iid = _post('qid');
       
        $msg = '';
        if ($cid == '') {
            $msg .= $_L['select_a_contact'].' <br> ';
        }

        $subject = $_POST['subject'];
        $proposal_text = $_POST['proposal_text'];
        $customer_notes = $_POST['customer_notes'];

        if($subject == ''){
            $msg .= $_L['Subject is Required'].' <br> ';
        }
				
        $idate = _post('idate');
        $its = strtotime($idate);
        $edate = _post('edate');
        $dd = '';

        if ($msg == '') {

						$invoicenum = _post('invoicenum');
            $cn = _post('cn');
            $today = date('Y-m-d');
            $vtoken = _raid(10);

						$sTotal = 0; $totaltaxamt = 0; $prod_total = 0;
						for($i=0; $i<count($_POST['desc']); $i++ ){
								$taxrate = ORM::for_table('sys_tax')->find_one($_POST['taxed'][$i]);
								$taxamt = $_POST['total'][$i]*$taxrate['rate']/100;
								$totaltaxamt = $totaltaxamt + $taxamt;
								$sTotal += $taxamt + $_POST['total'][$i];
								$prod_total = $prod_total + $_POST['total'][$i];
						}
						
            $d = ORM::for_table('sys_quotes')->find_one($iid);
            if ($d) {
                $d->subject = $subject;
								$d->userid = $cid;
								$d->invoicenum = $invoicenum;
								$d->cn = $cn;
								$d->validuntil = _post('edate');
								$d->stage = _post('stage');
								$d->currency = 1;
								$d->total = Finance::amount_fix($prod_total);
								$d->taxamt = Finance::amount_fix($totaltaxamt);
								$d->subtotal = Finance::amount_fix($sTotal);
								$d->discount_type = _post('discount_type');
								$d->discount_value = '0.00';
								$d->discount_amt = '0.00';
								$d->proposal = $proposal_text;
								$d->customernotes = $customer_notes;
								$d->adminnotes = '';
								$d->datecreated = $idate;
								$d->lastmodified = $today;
								$d->datesent = $today;
								$d->dateaccepted = $today;
								$d->vtoken = $vtoken;
								$d->save();

                $qid = $d->id();
								
                $x = ORM::for_table('sys_quoteitems')->where('qid', $iid)->delete_many();
								for($i=0; $i<count($_POST['desc']); $i++ ){
										$prod = ORM::for_table('sys_items')->find_one($_POST['desc'][$i]);		
										$taxrate = ORM::for_table('sys_tax')->find_one($_POST['taxed'][$i]);
										$taxamt = $_POST['total'][$i]*$taxrate['rate']/100;
										$subtotal = $_POST['total'][$i]+$taxamt;
										
										$d = ORM::for_table('sys_quoteitems')->create();
				
										$d->qid = $qid;
										$d->itemid = $_POST['desc'][$i];
										$d->tax_id = $_POST['taxed'][$i];
										$d->itemcode = $prod['item_number'];
										$d->description = $prod['name'];
										$d->qty = $_POST['qty'][$i];
										$d->amount = Finance::amount_fix($_POST['amount'][$i]);
										$d->taxrate = $taxrate['rate'];
										$d->total = Finance::amount_fix($_POST['total'][$i]);
										$d->subtotal = Finance::amount_fix($subtotal);
										$d->discount = '0.00';
										
										$d->save();
								}
                echo $qid;
            }
            else{
                $msg .= 'Quote Not Found';
            }
        } else {
            echo $msg;
        }
				
        break;
				
    case 'delete':
        Event::trigger('quotes/delete/');
        $id = $routes['2'];
        if ($_app_stage == 'Demo') {
            r2(U . 'accounts/list', 'e', 'Sorry! Deleting Account is disabled in the demo mode.');
        }
        $d = ORM::for_table('crm_accounts')->find_one($id);
        if ($d) {
            $d->delete();
            r2(U . 'accounts/list', 's', $_L['account_delete_successful']);
        }

        break;


    case 'print':
        Event::trigger('quotes/print/');
        $id = $routes['2'];
        $d = ORM::for_table('sys_invoices')->find_one($id);
        if ($d) {

            //find all activity for this user
            $items = ORM::for_table('sys_invoiceitems')->where('invoiceid', $id)->order_by_asc('id')->find_many();

//find the user
            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);

            require 'application/lib/invoices/render.php';

        } else {
            r2(U . 'customers/list', 'e', $_L['Account_Not_Found']);
        }

        break;

    case 'pdf':
        Event::trigger('quotes/pdf/');
        $id = $routes['2'];


        $d = ORM::for_table('sys_quotes')->find_one($id);
        if ($d) {

            //find all activity for this user
            $items = ORM::for_table('sys_quoteitems')->where('qid', $id)->order_by_asc('id')->find_many();


            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);



            $cf = ORM::for_table('crm_customfields')->where('showinvoice', 'Yes')->order_by_asc('id')->find_many();


            define('_MPDF_PATH','application/lib/mpdf/');

            require('application/lib/mpdf/mpdf.php');

            $pdf_c = '';
            $ib_w_font = 'dejavusanscondensed';
            if($config['pdf_font'] == 'default'){
                $pdf_c = 'c';
                $ib_w_font = 'Helvetica';
            }

            $mpdf=new mPDF($pdf_c,'A4','','',20,15,15,25,10,10);
            $mpdf->SetProtection(array('print'));
            $mpdf->SetTitle($config['CompanyName'].' Invoice');
            $mpdf->SetAuthor($config['CompanyName']);
            $mpdf->SetWatermarkText($d['status']);
            $mpdf->showWatermarkText = true;
            $mpdf->watermark_font = $ib_w_font;
            $mpdf->watermarkTextAlpha = 0.1;
            $mpdf->SetDisplayMode('fullpage');

            if($config['pdf_font'] == 'AdobeCJK'){
                $mpdf->useAdobeCJK = true;
                $mpdf->autoScriptToLang = true;
                $mpdf->autoLangToFont = true;
            }

            ob_start();

            require 'application/lib/invoices/q-x2.php';

            $html = ob_get_contents();


            ob_end_clean();

            $mpdf->WriteHTML($html);

            if (isset($routes['3']) AND ($routes['3'] == 'dl')) {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'D'); # D
            } else {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'I'); # D
            }
            // $mpdf->Output();



        }



        break;

    case 'mark_draft':
        Event::trigger('quotes/mark_draft/');
        $iid = _post('iid');
        $d = ORM::for_table('sys_quotes')->find_one($iid);
        if ($d) {
            $d->stage = 'Draft';
            $d->save();
         //   _msglog('s', 'Invoice marked as Draft');
        } else {
            _msglog('e', 'Invoice not found');
        }
        break;

    case 'mark_delivered':
        Event::trigger('quotes/mark_delivered/');
        $iid = _post('iid');
        $d = ORM::for_table('sys_quotes')->find_one($iid);
        if ($d) {
            $d->stage = 'Delivered';
            $d->save();
        //    _msglog('s', 'Invoice marked as Delivered');
        } else {
            _msglog('e', 'Invoice not found');
        }
        break;

    case 'mark_on_hold':
        Event::trigger('quotes/mark_on_hold/');
        $iid = _post('iid');
        $d = ORM::for_table('sys_quotes')->find_one($iid);
        if ($d) {
            $d->stage = 'On Hold';
            $d->save();
       //     _msglog('s', 'Invoice marked as On Hold');
        } else {
            _msglog('e', 'Invoice not found');
        }
        break;

    case 'mark_accepted':
        Event::trigger('quotes/mark_accepted/');
        $iid = _post('iid');
        $d = ORM::for_table('sys_quotes')->find_one($iid);
        if ($d) {
            $d->stage = 'Accepted';
            $d->save();
        //    _msglog('s', 'Invoice marked as Accepted');
        } else {
            _msglog('e', 'Invoice not found');
        }
        break;

    case 'mark_lost':
        Event::trigger('quotes/mark_lost/');
        $iid = _post('iid');
        $d = ORM::for_table('sys_quotes')->find_one($iid);
        if ($d) {
            $d->stage = 'Lost';
            $d->save();
        //    _msglog('s', 'Invoice marked as Lost');
        } else {
            _msglog('e', 'Invoice not found');
        }
        break;

    case 'mark_dead':
        Event::trigger('quotes/mark_dead/');
        $iid = _post('iid');
        $d = ORM::for_table('sys_quotes')->find_one($iid);
        if ($d) {
            $d->stage = 'Dead';
            $d->save();
//            _msglog('s', 'Invoice marked as Dead');
        } else {
            _msglog('e', 'Invoice not found');
        }
        break;






    case 'mail_invoice_':

        $sid = $routes['2'];
        $etpl = $routes['3'];

        $d = ORM::for_table('sys_quotes')->find_one($sid);

        if ($etpl == 'created') {
            $e = ORM::for_table('sys_email_templates')->where('tplname', 'Quote:Quote Created')->find_one();
        } elseif ($etpl == 'reminder') {
            $e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Payment Reminder')->find_one();
        } elseif ($etpl == 'overdue') {
            $e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Overdue Notice')->find_one();
        } elseif ($etpl == 'confirm') {
            $e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Payment Confirmation')->find_one();
        } elseif ($etpl == 'refund') {
            $e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Refund Confirmation')->find_one();
        } else {
            $d = false;
            $e = false;
        }

        if ($d) {

            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);

            //parse template
//            $total = $d['total'];
//            $credit = $d['credit'];
//            $due_amount = $total-$credit;
//            $tax = $d['tax'];
//            $taxrate = $d['taxrate'];
//            $subtotal = $d['subtotal'];

            $subject = new Template($e['subject']);
            $subject->set('business_name', $config['CompanyName']);
            $subject->set('quote_subject', $d['subject']);
            $subj = $subject->output();
            $message = new Template($e['message']);
            $message->set('contact_name', $a['account']);
            $message->set('business_name', $config['CompanyName']);
            $message->set('quote_url', U . 'client/q/' . $d['id'] . '/token_' . $d['vtoken']);
//            $message->set('invoice_id', $d['invoicenum'].$d['id']);
//            $message->set('invoice_status', $d['status']);
//            $message->set('invoice_amount_paid', number_format($credit,2,$config['dec_point'],$config['thousands_sep']));
//            $message->set('invoice_due_amount', number_format($due_amount,2,$config['dec_point'],$config['thousands_sep']));
//            $message->set('invoice_taxname', $d['taxname']);
//            $message->set('invoice_tax_amount', number_format($tax,2,$config['dec_point'],$config['thousands_sep']));
//            $message->set('invoice_tax_rate', number_format($taxrate,2,$config['dec_point'],$config['thousands_sep']));
//            $message->set('invoice_subtotal', number_format($subtotal,2,$config['dec_point'],$config['thousands_sep']));
            $message->set('valid_until', date($config['df'], strtotime($d['validuntil'])));
//            $message->set('invoice_date', date($config['df'], strtotime($d['date'])));
//            $message->set('invoice_amount', number_format($total,2,$config['dec_point'],$config['thousands_sep']));
            $message_o = $message->output();


            echo '
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Quote #' . $d['id'] . '</h3>
</div>
<div class="modal-body">

<form class="form-horizontal" role="form" id="email_form" method="post">


<div class="form-group">
    <label for="subject" class="col-sm-2 control-label">'.$_L['To'].'</label>
    <div class="col-sm-10">
      <input type="text" id="toemail" name="toemail" class="form-control" value="' . $a['email'] . '">
    </div>
  </div>

   <div class="form-group">
    <label for="ccemail" class="col-sm-2 control-label">'.$_L['Cc'].'</label>
    <div class="col-sm-10">
      <input type="email" id="ccemail" name="ccemail" class="form-control" value="">
    </div>
  </div>

  <div class="form-group">
    <label for="bccemail" class="col-sm-2 control-label">'.$_L['Bcc'].'</label>
    <div class="col-sm-10">
      <input type="email" id="bccemail" name="bccemail" class="form-control" value="">
      <span class="help-block"><a href="#" id="send_bcc_to_admin">'.$_L['Send Bcc to Admin'].'</a></span>
    </div>
  </div>

    <div class="form-group">
    <label for="subject" class="col-sm-2 control-label">'.$_L['Subject'].'</label>
    <div class="col-sm-10">
      <input type="text" id="subject" name="subject" class="form-control" value="' . $subj . '">
    </div>
  </div>

  <div class="form-group">
    <label for="subject" class="col-sm-2 control-label">'.$_L['Message Body'].'</label>
    <div class="col-sm-10">
      <textarea class="form-control sysedit" rows="3" name="message" id="message">' . $message_o . '</textarea>
      <input type="hidden" id="toname" name="toname" value="' . $a['account'] . '">
      <input type="hidden" id="i_cid" name="i_cid" value="' . $a['id'] . '">
      <input type="hidden" id="i_iid" name="i_iid" value="' . $d['id'] . '">
    </div>
  </div>

<div class="form-group">
    <label for="attach_pdf" class="col-sm-2 control-label">Attach PDF?</label>
    <div class="col-sm-10">
      <div class="checkbox c-checkbox">
                          <label>
                            <input type="checkbox" name="attach_pdf" id="attach_pdf" value="Yes" checked><span class="fa fa-check"></span>  <i class="fa fa-paperclip"></i> quote_'.$sid.'.pdf
                          </label>
                        </div>
    </div>
  </div>

</form>

</div>
<div class="modal-footer">
	<button id="send" class="btn btn-primary">'.$_L['Send'].'</button>

		<button type="button" data-dismiss="modal" class="btn">'.$_L['Close'].'</button>
</div>';
        } else {
            exit('Invoice Not Found');
        }


        break;


//    case 'send_email':
//        $msg = '';
//        $email = _post('toemail');
//        $subject = _post('subject');
//        $toname = _post('toname');
//        $cid = _post('i_cid');
//        $iid = _post('i_iid');
//        $message = $_POST['message'];
//
//        if (!Validator::Email($email)) {
//            $msg .= 'Invalid Email <br>';
//        }
//        if ($subject == '') {
//            $msg .= 'Subject is Required <br>';
//        }
//
//        if ($message == '') {
//            $msg .= 'Message is Required <br>';
//        }
//
//        if ($msg == '') {
//
//            //now send email
//
//            Notify_Email::_send($toname, $email, $subject, $message, $cid, $iid);
//
//            echo '<div class="alert alert-success fade in">Mail Sent!</div>';
//        } else {
//            echo '<div class="alert alert-danger fade in">' . $msg . '</div>';
//        }
//
//
//        break;


    case 'send_email':

        Event::trigger('quotes/send_email/');

        $msg = '';
        $email = _post('toemail');
        $cc = _post('ccemail');
        $bcc = _post('bccemail');
        $subject = _post('subject');
        $toname = _post('toname');
        $cid = _post('i_cid');
        $iid = _post('i_iid');

        $d = ORM::for_table('sys_quotes')->find_one($iid);

        if($d['cn'] != ''){
            $dispid = $d['cn'];
        }
        else{
            $dispid = $d['id'];
        }

        $in = $d['invoicenum'].$dispid;

        $message = $_POST['message'];

        $attach_pdf = _post('attach_pdf');

        $attachment_path = '';
        $attachment_file = '';

        if($attach_pdf == 'Yes'){

            Quote::pdf($iid,'store');

            $attachment_path = 'application/storage/temp/quote_'.$in.'.pdf';
            $attachment_file = 'quote_'.$in.'.pdf';




        }

        if (!Validator::Email($email)) {
            $msg .= 'Invalid Email <br>';
        }

        if (!Validator::Email($cc)) {
            $cc = '';
        }

        if (!Validator::Email($bcc)) {
            $bcc = '';
        }


        if ($subject == '') {
            $msg .= 'Subject is Required <br>';
        }

        if ($message == '') {
            $msg .= 'Message is Required <br>';
        }

        if ($msg == '') {

            //now send email

            Notify_Email::_send($toname, $email, $subject, $message, $cid, '0', $cc, $bcc, $attachment_path, $attachment_file);

            // Now check for

            echo '<div class="alert alert-success fade in">Mail Sent!</div>';
        } else {
            echo '<div class="alert alert-danger fade in">' . $msg . '</div>';
        }


        break;



    case 'convert_invoice':
        Event::trigger('quotes/convert_invoice/');
        $iid = _post('iid');
        $q = ORM::for_table('sys_quotes')->find_one($iid);

        if ($q) {

            $cid = $q['userid'];
            //find user with cid
            $u = ORM::for_table('crm_accounts')->find_one($cid);

            $msg = '';
            if ($cid == '') {
                $msg .= $_L['select_a_contact'].' <br> ';
            }

            $notes = _post('notes');
						$today = date('Y-m-d');
            $idate = $today;
            $its = strtotime($idate);
            $duedate = $today;
            $dd = $today;
            $nd = $idate;
            $r = '0';
						$datetime = date("Y-m-d H:i:s");
            if ($msg == '') {

                $vtoken = _raid(10);
                $ptoken = _raid(10);
                $d = ORM::for_table('sys_invoices')->create();
                $d->userid = $q['userid'];
                $d->account = $u['account'];
								$d->cn = $q['cn'];
								$d->invoicenum = $q['invoicenum'];
                $d->date = $idate;
                $d->duedate = $dd;
								$d->datepaid = $datetime;
								$d->subtotal = $q['subtotal'];
								$d->total = $q['total'];
								$d->discount_type = $q['discount_type'];
                $d->discount_value = $q['discount_value'];
                $d->discount = $q['discount_amt'];
								$d->vtoken = $vtoken;
								$d->ptoken = $ptoken;
								$d->status = 'Unpaid';
								$d->notes = $q['customernotes'];
								$d->r = $r;
								$d->nd = $nd;
								$d->paymentmethod = '';
								
                $d->save();
                $invoiceid = $d->id();

                $items = ORM::for_table('sys_quoteitems')->where('qid', $iid)->order_by_asc('id')->find_many();
                foreach ($items as $item) {

                    $ii = ORM::for_table('sys_invoiceitems')->create();
										$ii->invoiceid = $invoiceid;
										$ii->userid = $cid;
										$ii->itemcode = $item['itemcode'];
										$ii->description = $item['description'];
										$ii->qty = $item['qty'];
										$ii->amount = Finance::amount_fix($item['amount']);
										//get tax rate by id
										//$ptaxrate = ORM::for_table('sys_tax')->find_one($_POST['taxed'][$i]);
										$ii->taxrate = $item['taxrate'];
										$ii->tax_id = $item['tax_id'];
										$taxamt = $item['total']*$item['taxrate']/100;
										$ii->taxamount = Finance::amount_fix($taxamt);
										$ii->total = Finance::amount_fix($taxamt + $item['total']);
										//others
										$ii->type = '';
										$ii->relid = '0';
										$ii->duedate = date('Y-m-d');
										$ii->paymentmethod = '';
										$ii->notes = '';
                    
                    $ii->save();
                }
                _msglog('s',$_L['Invoice Created']);

                echo $invoiceid;
            } else {
                echo $msg;
            }

        } else {
            _msglog('e', 'Invoice not found');
        }

        break;

    default:
        echo 'action not defined';
}