<?php

_auth();
$ui->assign('_application_menu', 'invoices');
$ui->assign('_st', $_L['Invoices']);
$ui->assign('_title', $_L['Sales'].'- ' . $config['CompanyName']);
$action = $routes['1'];
$user = User::_info();
$ui->assign('user', $user);

Event::trigger('invoices');

switch ($action) {
    case 'add':
//find all clients.

        Event::trigger('invoices/add/');

        $extra_fields = '';
        $extra_jq = '';

        Event::trigger('add_invoice');

        $ui->assign('extra_fields', $extra_fields);

        if (isset($routes['2']) AND ($routes['2'] == 'recurring')) {
            $recurring = true;
        } else {
            $recurring = false;
        }
/* START SHAHID */
				$taxes = ORM::for_table('sys_tax')->order_by_asc('rate')->find_many();
        $tax_opts = "";
        foreach ($taxes as $tax) {
          $tax_opts .= '<option value="' . $tax['rate'] . '">' . $tax['name'] ." ". $tax['rate'] ." %" .'</option>';
        } 
				$ui->assign('tax_opts', $tax_opts);
				
				$items = ORM::for_table('sys_items')->find_many();
        $ui->assign('items', $items);
				
				 
/* END SHAHID */
        $currencies = Model::factory('Models_Currency')->find_array();


        $ui->assign('recurring', $recurring);
        $ui->assign('currencies', $currencies);

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

        $ui->assign('idate', date('Y-m-d'));

		if($config['i_driver'] == 'default'){
				$js_file = 'invoice';
				$tpl_file = 'add-invoice.tpl';
		}
        elseif($config['i_driver'] == 'v2'){
            $js_file = 'invoice_add_v2';
            $tpl_file = 'add_invoice_v2.tpl';
        }
        else{
            $js_file = 'invoice';
            $tpl_file = 'add-invoice.tpl';
        }
        $css_arr = array('s2/css/select2.min','modal','dp/dist/datepicker.min','redactor/redactor');
        $js_arr = array('dt/datatables.min','validator/parsley','redactor/redactor.min','s2/js/select2.min','s2/js/i18n/'.lan(),'dp/dist/datepicker.min','dp/i18n/'.$config['language'],'numeric','modal',$js_file);

        Event::trigger('add_invoice_rendering_form');

        $ui->assign('xheader', Asset::css($css_arr));
        $ui->assign('xfooter', Asset::js($js_arr));

        $ui->assign('xjq', '

 $(\'.amount\').autoNumeric(\'init\', {

    aSign: \''.$config['currency_code'].' \',
    dGroup: '.$config['thousand_separator_placement'].',
    aPad: '.$config['currency_decimal_digits'].',
    pSign: \''.$config['currency_symbol_position'].'\',
    aDec: \''.$config['dec_point'].'\',
    aSep: \''.$config['thousands_sep'].'\'

    });
 '.
            $extra_jq);
        $ui->display($tpl_file);
        break;


    case 'edit':

        Event::trigger('invoices/edit/');

        $id = $routes['2'];
        $d = ORM::for_table('sys_invoices')->find_one($id);
        if ($d) {

            $currencies = Model::factory('Models_Currency')->find_array();
            $ui->assign('currencies', $currencies);

            $ui->assign('i', $d);
            $items = ORM::for_table('sys_invoiceitems')->where('invoiceid', $id)->order_by_asc('id')->find_many();
            $ui->assign('items', $items);
			/* $taxamount =0;
			foreach($items as $data){
				var_dump($data['taxamount']);
				$taxamount += $data['taxamount'];
			}
			 $ui->assign('taxamount', $taxamount);
			var_dump($taxamount); */
			/* //find the user */
            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            $ui->assign('a', $a);
            $ui->assign('d', $d);
            $ui->assign('_st', $_L['Add Invoice']);
            $c = ORM::for_table('crm_accounts')->select('id')->select('account')->select('company')->find_many();
            $ui->assign('c', $c);

			/* START SHAHID */
			$taxes = ORM::for_table('sys_tax')->order_by_asc('rate')->find_many();

			$ui->assign('taxes', $taxes); 
		/* END SHAHID */

		/* //default invoice date due date */
            $ui->assign('idate', date('Y-m-d'));

            if($config['i_driver'] == 'default'){
                $js_file = 'edit-invoice-v2';
                $tpl_file = 'edit-invoice.tpl';
            }
            elseif($config['i_driver'] == 'v2'){
                $js_file = 'edit_invoice_v2n';
                $tpl_file = 'edit_invoice_v2.tpl';
            }
            else{
                $js_file = 'edit-invoice-v2';
                $tpl_file = 'edit-invoice.tpl';
            }

            $ui->assign('xheader', Asset::css(array('s2/css/select2.min','modal','dp/dist/datepicker.min','redactor/redactor')));
            $ui->assign('xfooter', Asset::js(array('dt/datatables.min','redactor/redactor.min','s2/js/select2.min','s2/js/i18n/'.lan(),'dp/dist/datepicker.min','dp/i18n/'.$config['language'],'numeric','modal',$js_file)));

            $ui->assign('xjq', '

 $(\'.amount\').autoNumeric(\'init\', {

    aSign: \''.$config['currency_code'].' \',
    dGroup: '.$config['thousand_separator_placement'].',
    aPad: '.$config['currency_decimal_digits'].',
    pSign: \''.$config['currency_symbol_position'].'\',
    aDec: \''.$config['dec_point'].'\',
    aSep: \''.$config['thousands_sep'].'\'

    });

 ');

            $ui->display($tpl_file);

        } else {
            echo 'Invoice Not Found';
        }
//find all clients.


        break;


    case 'view':

        Event::trigger('invoices/view/');

        $id = $routes['2'];
        $d = ORM::for_table('sys_invoices')->find_one($id);
        if ($d) {

            //find all activity for this user
            $items = ORM::for_table('sys_invoiceitems')->where('invoiceid', $id)->order_by_asc('id')->find_many();
            $ui->assign('items', $items);
            //find related transactions
            $trs_c = ORM::for_table('sys_transactions')->where('iid', $id)->count();

            $trs = ORM::for_table('sys_transactions')->where('iid', $id)->order_by_desc('id')->find_many();


            $ui->assign('trs', $trs);
            $ui->assign('trs_c', $trs_c);

            $emls_c = ORM::for_table('sys_email_logs')->where('iid', $id)->count();

            $emls = ORM::for_table('sys_email_logs')->where('iid', $id)->order_by_desc('id')->find_many();


            $ui->assign('emls', $emls);
            $ui->assign('emls_c', $emls_c);
//find the user
            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
						
            $ui->assign('a', $a);
            $ui->assign('d', $d);

            $i_credit = $d['credit'];
            $i_due = '0.00';
            $i_total = $d['total'];
            if($d['credit'] != '0.00'){
                $i_due = $i_total - $i_credit;
            }
            else{
                $i_due =  $d['total'];
            }

            $i_due = number_format($i_due,2,$config['dec_point'],$config['thousands_sep']);

            $ui->assign('i_due', $i_due);


            //find all custom fields

            $cf = ORM::for_table('crm_customfields')->where('showinvoice','Yes')->order_by_asc('id')->find_many();
            $ui->assign('cf',$cf);

			//            $ui->assign('xheader', '
			//            <link rel="stylesheet" type="text/css" href="' . $_theme . '/lib/select2/select2.css"/>
			//<link rel="stylesheet" type="text/css" href="' . $_theme . '/lib/dp/dist/datepicker.min.css"/>
			//
			//<link rel="stylesheet" type="text/css" href="ui/lib/sn/summernote.css"/>
			//<link rel="stylesheet" type="text/css" href="ui/lib/sn/summernote-bs3.css"/>
			//<link rel="stylesheet" type="text/css" href="' . $_theme . '/css/modal.css"/>
			//<link rel="stylesheet" type="text/css" href="ui/lib/sn/summernote-application.css"/>
			//');

            $ui->assign('xheader', Asset::css(array('s2/css/select2.min','dp/dist/datepicker.min','sn/summernote','sn/summernote-bs3','modal','sn/summernote-application')));

			//            $ui->assign('xfooter', '
			//            <script type="text/javascript" src="' . $_theme . '/lib/select2/select2.min.js"></script>
			//<script type="text/javascript" src="' . $_theme . '/lib/dp/dist/datepicker.min.js"></script>
			//<script type="text/javascript" src="' . $_theme . '/lib/numeric.js"></script>
			// <script type="text/javascript" src="' . $_theme . '/lib/modal.js"></script>
			// <script type="text/javascript" src="ui/lib/sn/summernote.min.js"></script>
			//<script type="text/javascript" src="ui/lib/jslib/invoice-view.js"></script>
			//');

            $ui->assign('xfooter', Asset::js(array('s2/js/select2.min','s2/js/i18n/'.lan(),'dp/dist/datepicker.min','dp/i18n/'.$config['language'],'numeric','modal','sn/summernote.min','jslib/invoice-view')));

            $x_html = '';

            Event::trigger('view_invoice');

            $ui->assign('x_html',$x_html);

            $ui->assign('xjq',' $(\'.amount\').autoNumeric(\'init\', {

							dGroup: '.$config['thousand_separator_placement'].',
							aPad: '.$config['currency_decimal_digits'].',
							pSign: \''.$config['currency_symbol_position'].'\',
							aDec: \''.$config['dec_point'].'\',
							aSep: \''.$config['thousands_sep'].'\'

							});');

            $ui->display('invoice-view.tpl');

        } else {
            r2(U . 'customers/list', 'e', $_L['Account_Not_Found']);
        }

        break;

    case 'add-post':

        Event::trigger('invoices/add-post/');
	/* 	var_dump($_POST); */

        $cid = _post('cid');
      /*   //find user with cid */
        $u = ORM::for_table('crm_accounts')->find_one($cid);
		
        $msg = '';
        if ($cid == '') {
            $msg .= $_L['select_a_contact'].' <br> ';
        }
        $notes = _post('notes');
       /*  // find currency */
        $currency_id = _post('currency');
        $currency_find = Model::factory('Models_Currency')->find_one($currency_id);
		
        if($currency_find){
            $currency = $currency_id;
            $currency_symbol = $currency_find->symbol;
            $currency_rate = $currency_find->rate;
		}
        else{
            $currency = 0;
            $currency_symbol = $config['currency_code'];
            $currency_rate = 1.0000;
        }
		/* Product Amount */
        if (isset($_POST['total'])) {
            $Invoiceamount = $_POST['total'];
			/* var_dump($Invoiceamount); */
        } else {
            $msg .= $_L['at_least_one_item_required'].' <br> ';
        }
		
        $idate = _post('idate'); /* Invoice Date */
        $its = strtotime($idate);
        $duedate = _post('duedate');
        $dd = '';
        if ($duedate == 'due_on_receipt') {
            $dd = $idate;
        } elseif ($duedate == 'days3') {
            $dd = date('Y-m-d', strtotime('+3 days', $its));

        } elseif ($duedate == 'days5') {
            $dd = date('Y-m-d', strtotime('+5 days', $its));
        } elseif ($duedate == 'days7') {
            $dd = date('Y-m-d', strtotime('+7 days', $its));
        } elseif ($duedate == 'days10') {
            $dd = date('Y-m-d', strtotime('+10 days', $its));
        } elseif ($duedate == 'days15') {
            $dd = date('Y-m-d', strtotime('+15 days', $its));
        } elseif ($duedate == 'days30') {
            $dd = date('Y-m-d', strtotime('+30 days', $its));
        } elseif ($duedate == 'days45') {
            $dd = date('Y-m-d', strtotime('+45 days', $its));
        } elseif ($duedate == 'days60') {
            $dd = date('Y-m-d', strtotime('+60 days', $its));
        } else {
            $msg .= 'Invalid Date <br> ';
        }
        if (!$dd) {
            $msg .= 'Date Parsing Error <br> ';
        }
		/* Repeate value for recuring Invoice */
        $repeat = _post('repeat');
        $nd = $idate;
        if ($repeat == '0') {
            $r = '0';
        } elseif ($repeat == 'week1') {
            $r = '+1 week';
            $nd = date('Y-m-d', strtotime('+1 week', $its));
        } elseif ($repeat == 'weeks2') {
            $r = '+2 weeks';
            $nd = date('Y-m-d', strtotime('+2 weeks', $its));
        } elseif ($repeat == 'month1') {

            $r = '+1 month';
            $nd = date('Y-m-d', strtotime('+1 month', $its));

        } elseif ($repeat == 'months2') {
            $r = '+2 months';
            $nd = date('Y-m-d', strtotime('+2 months', $its));
        } elseif ($repeat == 'months3') {
            $r = '+3 months';
            $nd = date('Y-m-d', strtotime('+3 months', $its));
        } elseif ($repeat == 'months6') {
            $r = '+6 months';
            $nd = date('Y-m-d', strtotime('+6 months', $its));
        } elseif ($repeat == 'year1') {
            $r = '+1 year';
            $nd = date('Y-m-d', strtotime('+1 year', $its));
        } elseif ($repeat == 'years2') {
            $r = '+2 years';
            $nd = date('Y-m-d', strtotime('+2 years', $its));
        } elseif ($repeat == 'years3') {
            $r = '+3 years';
            $nd = date('Y-m-d', strtotime('+3 years', $its));
        } else {
            $msg .= 'Date Parsing Error <br> ';
        }

        if ($msg == '') {
            if(isset($_POST['taxed'])){
                $taxed = $_POST['taxed'];
            }
			$invoicenum = _post('invoicenum');
            $cn = _post('cn');

            $sTotal = '0';
            $taxTotal = '0';
			/* Total amount of Invoice */
			$sTotal = 0;
			$inc_tax = 0;
			for($i=0;$i<count($_POST['desc']);$i++ ){
			$ptaxrate = ORM::for_table('sys_tax')->find_one($_POST['taxed'][$i]);
			$taxrate = $ptaxrate['rate'];/* Tax Percentage */
			$taxamt = $_POST['total'][$i]*$taxrate/100; /* single tax amount */
			$inc_tax += $taxamt; /* Total tax amount inclusion */
			$sTotal += $_POST['total'][$i]; /*  subtotal of product without tax */
			}
			
            $fTotal = $sTotal;
           /*  // calculate discount based on fixed & percentage */
            $discount_amount = _post('discount_amount');
            $discount_type = _post('discount_type');
            $discount_value = '0.00';

            if($discount_amount == '0' OR $discount_amount == ''){
                $actual_discount = '0.00';
            }
            else{
                if($discount_type == 'f'){
                    $actual_discount = $discount_amount;
                    $discount_value = $discount_amount;
                }
                else{
                    $discount_type = 'p';
                    $actual_discount = ($sTotal * $discount_amount) / 100;
                    $discount_value = $discount_amount;
                }
            }
			
            $actual_discount = number_format((float)$actual_discount, 2, '.', ''); /* actual discount amount */
            $fTotal = $sTotal - $actual_discount; /*  Substract discount amount with subtotal of product */
           
			$taxTotal = $inc_tax + $fTotal; /* discounttotal added in total tax */
			$fTotal = $inc_tax + $sTotal; /* total added with without discount amount & tax */
            $datetime = date("Y-m-d H:i:s");

            $vtoken = _raid(10);
            $ptoken = _raid(10);
            $d = ORM::for_table('sys_invoices')->create();
            $d->userid = $cid;
            $d->account = $u['account'];
            $d->date = $idate;
            $d->duedate = $dd;
            $d->datepaid = $datetime;
            $d->subtotal = $sTotal;
            $d->discount_type = $discount_type;
            $d->discount_value = $discount_value;
            $d->discount = $actual_discount;
            $d->total = $taxTotal;
            $d->withoutdicount_total = $fTotal;
            $d->tax = $inc_tax;
            $d->vtoken = $vtoken;
            $d->ptoken = $ptoken;
            $d->status = 'Unpaid';
            $d->notes = $notes;
            $d->r = $r;
            $d->nd = $nd;
            //others
            $d->invoicenum = $invoicenum;
            $d->cn = $cn;
            $d->paymentmethod = '';

            // Build 4550
            $d->currency = $currency;
            $d->currency_symbol = $currency_symbol;
            $d->currency_rate = $currency_rate;

            $d->save();
            $invoiceid = $d->id();

			for($i=0;$i<count($_POST['desc']);$i++ ){
				
				$itemcode = $_POST['p_id'][$i];
				/* Deduct product stock */
				$d = ORM::for_table('sys_items')->select('id')->select('weight')->select('height')->find_one($itemcode);
				$pre_weight = $d['weight'];
				$pre_height = $d['height'];
				$deductedWeight = $pre_weight - $_POST['weight'][$i];
				$deductedHeight = $pre_height - $_POST['height'][$i];
				$d->weight = $deductedWeight;
				$d->height = $deductedHeight;
                $d->save();
								
				/* for stock Transaction */
				$st = ORM::for_table('stock_trans')->create();
				$st->invoice_id = $invoiceid;
				$st->p_id = $itemcode;
				$st->pre_weight = $pre_weight;
				$st->new_weight = $deductedWeight;
				$st->minus_weight = $_POST['weight'][$i];
				$st->prev_length = $pre_height;
				$st->new_length = $deductedHeight;
				$st->minus_length = $_POST['height'][$i];
				$st->save();
				
				/* SAVE Invoice Items */
				$d = ORM::for_table('sys_invoiceitems')->create();
				$d->invoiceid = $invoiceid;
				$d->userid = $cid;
				$d->itemcode = $itemcode;
				$d->description = $_POST['desc'][$i];
				$d->weight = $_POST['weight'][$i];
				$d->height = $_POST['height'][$i];
				$d->amount = Finance::amount_fix($_POST['amount'][$i]);
				//get tax rate by id
				$ptaxrate = ORM::for_table('sys_tax')->find_one($_POST['taxed'][$i]);
				/* var_dump($ptaxrate); */
				$d->taxrate = $ptaxrate['rate'];
				$d->taxed = $_POST['taxed'][$i];
				$taxamt = $_POST['total'][$i]*$ptaxrate['rate']/100;
				$d->taxamount = Finance::amount_fix($taxamt);
				$d->amt_total = Finance::amount_fix($_POST['total'][$i]);
				$d->total = Finance::amount_fix($taxamt + $_POST['total'][$i]);
				//others
				$d->type = '';
				$d->relid = '0';
				$d->duedate = date('Y-m-d');
				$d->paymentmethod = '';
				$d->notes = '';

				$d->save(); //save
			}
			
			
            Event::trigger('add_invoice_posted');

            echo $invoiceid;
        } else {
            echo $msg;
        }
        break;

    case 'list':

        Event::trigger('invoices/list/');

        $paginator = array();

        $mode_css = '';
        $mode_js = '';
        $view_type = 'default';

        if(route(2) == 'filter'){

            $view_type = 'filter';

            $mode_css = Asset::css('footable/css/footable.core.min');

            $mode_js = Asset::js(array('numeric','footable/js/footable.all.min','contacts/mode_search'));


            $total_invoice = ORM::for_table('sys_invoices')->count();

            $ui->assign('total_invoice',$total_invoice);

            $f = ORM::for_table('sys_invoices');

            if(route(3) != ''){

                $s_f = route(3);

                if($s_f == 'paid'){
                    $f->where('status','Paid');
                }
                elseif ($s_f == 'unpaid'){
                    $f->where('status','Unpaid');
                }
                elseif ($s_f == 'partially_paid'){
                    $f->where('status','Partially Paid');
                }
                elseif ($s_f == 'cancelled'){
                    $f->where('status','Cancelled');
                }
                else{

                }
            }
            $d = $f->order_by_desc('id')->find_many();

            $paginator['contents'] = '';

        }
        else{

		/*       $ui->assign('xfooter', Asset::js(array('numeric'))); */
            $mode_js = Asset::js(array('numeric'));
            $paginator = Paginator::bootstrap('sys_invoices');
            $d = ORM::for_table('sys_invoices')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_desc('id')->find_many();

        }
        $ui->assign('_st', $_L['Invoices'].'<div class="btn-group pull-right" style="padding-right: 10px;">
  <a class="btn btn-success btn-xs" href="'.U.'invoices/add/'.'" style="box-shadow: none;"><i class="fa fa-plus"></i></a>
  <a class="btn btn-primary btn-xs" href="'.U.'invoices/add/'.'" style="box-shadow: none;"><i class="fa fa-repeat"></i></a>
  <a class="btn btn-success btn-xs" href="'.U.'invoices/export_csv/'.'" style="box-shadow: none;"><i class="fa fa-download"></i></a>
</div>');

        $ui->assign('xheader', $mode_css);
        $ui->assign('xfooter', $mode_js);
        $ui->assign('view_type', $view_type);

        $ui->assign('d', $d);
        $ui->assign('paginator', $paginator);
        $ui->assign('xjq', '
         $(\'.amount\').autoNumeric(\'init\', {

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
               window.location.href = _url + "delete/invoice/" + id;
           }
        });
    });
 ');
        $ui->display('list-invoices.tpl');
        break;

    case 'list-recurring':

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

        Event::trigger('invoices/edit-post/');
		/* var_dump($_POST); */
        $cid = _post('cid');
        $iid = _post('iid');
       /*  find user with cid */
        $u = ORM::for_table('crm_accounts')->find_one($cid);

        $msg = '';
        if ($cid == '') {
            $msg .= $_L['select_a_contact'].' <br> ';
        }
        $notes = _post('notes');

        if (isset($_POST['amount'])) {
            $amount = $_POST['amount'];
        } else {
            $msg .= $_L['at_least_one_item_required'].' <br> ';
        }

      /*   // find currency */
        $currency_id = _post('currency');
        $currency_find = Model::factory('Models_Currency')->find_one($currency_id);

        if($currency_find){
            $currency = $currency_id;
            $currency_symbol = $currency_find->symbol;
            $currency_rate = $currency_find->rate;
        }
        else{
            $currency = 0;
            $currency_symbol = $config['currency_code'];
            $currency_rate = 1.0000;
        }

        $idate = _post('idate');
        $its = strtotime($idate);
        $duedate = _post('ddate');
		
        $repeat = _post('repeat');
        $nd = $idate;
        if ($repeat == '0') {
            $r = '0';
        } elseif ($repeat == 'week1') {
            $r = '+1 week';
            $nd = date('Y-m-d', strtotime('+1 week', $its));
        } elseif ($repeat == 'weeks2') {
            $r = '+2 weeks';
            $nd = date('Y-m-d', strtotime('+2 weeks', $its));
        } elseif ($repeat == 'month1') {

            $r = '+1 month';
            $nd = date('Y-m-d', strtotime('+1 month', $its));

        } elseif ($repeat == 'months2') {
            $r = '+2 months';
            $nd = date('Y-m-d', strtotime('+2 months', $its));
        } elseif ($repeat == 'months3') {
            $r = '+3 months';
            $nd = date('Y-m-d', strtotime('+3 months', $its));
        } elseif ($repeat == 'months6') {
            $r = '+6 months';
            $nd = date('Y-m-d', strtotime('+6 months', $its));
        } elseif ($repeat == 'year1') {
            $r = '+1 year';
            $nd = date('Y-m-d', strtotime('+1 year', $its));
        } elseif ($repeat == 'years2') {
            $r = '+2 years';
            $nd = date('Y-m-d', strtotime('+2 years', $its));
        } elseif ($repeat == 'years3') {
            $r = '+3 years';
            $nd = date('Y-m-d', strtotime('+3 years', $its));
        } else {
            $msg .= 'Date Parsing Error <br> ';
        }

        if ($msg == '') {

            if(isset($_POST['taxed'])){
                $taxed = $_POST['taxed'];
            }
			$invoicenum = _post('invoicenum');
            $cn = _post('cn');
			
            $sTotal = '0';
            $taxTotal = '0';
			/* Total amount of Invoice */
			$sTotal = 0;
			$inc_tax = 0;
			for($i=0;$i<count($_POST['desc']);$i++ ){
			$ptaxrate = ORM::for_table('sys_tax')->find_one($_POST['taxed'][$i]);
			$taxrate = $ptaxrate['rate'];/* Tax Percentage */
			$taxamt = $_POST['total'][$i]*$taxrate/100; /* single tax amount */
			$inc_tax += $taxamt; /* Total tax amount inclusion */
			$sTotal += $_POST['total'][$i]; /*  subtotal of product without tax */
			}
			
            $fTotal = $sTotal;
           /*  // calculate discount based on fixed & percentage */
            $discount_amount = _post('discount_amount');
            $discount_type = _post('discount_type');
            $discount_value = '0.00';

            if($discount_amount == '0' OR $discount_amount == ''){
                $actual_discount = '0.00';
            }
            else{
                if($discount_type == 'f'){
                    $actual_discount = $discount_amount;
                    $discount_value = $discount_amount;
                }
                else{
                    $discount_type = 'p';
                    $actual_discount = ($sTotal * $discount_amount) / 100;
                    $discount_value = $discount_amount;
                }
            }
			
            $actual_discount = number_format((float)$actual_discount, 2, '.', ''); /* actual discount amount */
            $fTotal = $sTotal - $actual_discount; /*  Substract discount amount with subtotal of product */
           
			$taxTotal = $inc_tax + $fTotal; /* discounttotal added in total tax */
			$fTotal = $inc_tax + $sTotal; /* total added with without discount amount & tax */

            $d = ORM::for_table('sys_invoices')->find_one($iid);
            if ($d) {
                $d->userid = $cid;
                $d->account = $u['account'];
				$d->date = $idate;
				$d->duedate = $duedate;
				$d->subtotal = $sTotal;
				$d->discount_type = $discount_type;
				$d->discount_value = $discount_value;
				$d->discount = $actual_discount;
				$d->total = $taxTotal;
				$d->withoutdicount_total = $fTotal;
				$d->tax = $inc_tax;
				$d->status = 'Unpaid';
				$d->notes = $notes;
				$d->r = $r;
				$d->nd = $nd;
				/* //others */
				$d->invoicenum = $invoicenum;
				$d->cn = $cn;
				/* // Build 4550 */
				$d->currency = $currency;
				$d->currency_symbol = $currency_symbol;
				$d->currency_rate = $currency_rate;

                $d->save();
                $invoiceid = $iid;
                $description = $_POST['desc'];

				/* // first delete all related items 
                $x = ORM::for_table('sys_invoiceitems')->where('invoiceid', $iid)->delete_many(); */
              
				for($i=0;$i<count($_POST['desc']);$i++ ){
					
					if(empty($_POST['i_id'][$i])){
						
					}else{
					
						$i_id = $_POST['i_id'][$i];
						$itemcode = $_POST['p_id'][$i];
						$edit_weight = $_POST['weight'][$i];
						$edit_height = $_POST['height'][$i];
						/* Previous minus stock */
						$sit = ORM::for_table('sys_invoiceitems')->select('id')->select('weight')->select('height')->find_one($i_id);
						
						if($edit_weight > $sit['weight'] || $edit_height > $sit['height']){
							
							$minusWeight = $edit_weight - $sit['weight'];
							$minusHeight = $edit_height - $sit['height'];
							/* Deduct product stock */
							$si = ORM::for_table('sys_items')->select('id')->select('weight')->select('height')->find_one($itemcode);
							$pre_weight = $si['weight'];
							$pre_height = $si['height'];
							$deductedWeight = $pre_weight - $minusWeight;
							$deductedHeight = $pre_height - $minusHeight;
							/* Save minus stock */
							$si->weight = $deductedWeight;
							$si->height = $deductedHeight;
							$si->save();
						}
						if($sit['weight'] > $edit_weight || $sit['height'] > $edit_height){
							
							$minusWeight = $sit['weight']- $edit_weight;
							$minusHeight = $sit['height']- $edit_height;
							/* Added product stock */
							$si = ORM::for_table('sys_items')->select('id')->select('weight')->select('height')->find_one($itemcode);
							$pre_weight = $si['weight'];
							$pre_height = $si['height'];
							$addedWeight = $pre_weight + $minusWeight;
							$addedHeight = $pre_height + $minusHeight;
							/* Save added stock */
							$si->weight = $addedWeight;
							$si->height = $addedHeight;
							$si->save();
						}
						
						/* for stock Transaction */
						$st = ORM::for_table('stock_trans')->create();
						$st->invoice_id = $invoiceid;
						$st->p_id = $itemcode;
						if(isset($pre_weight)){$st->pre_weight = $pre_weight;}
						if(isset($deductedWeight)){$st->new_weight = $deductedWeight;}
						if(isset($addedWeight)){$st->added_weight = $addedWeight;}
						if(isset($minusWeight)){$st->minus_weight = $minusWeight;}
						if(isset($pre_height)){$st->prev_length = $pre_height;}
						if(isset($deductedHeight)){$st->new_length = $deductedHeight;}
						if(isset($addedHeight)){$st->added_length = $addedHeight;}
						if(isset($minusHeight)){$st->minus_length = $minusHeight;}
						$st->save();
					
						/* UPDATE Invoice Items */
						$siis = ORM::for_table('sys_invoiceitems')->find_one($i_id);
						$siis->invoiceid = $invoiceid;
						$siis->userid = $cid;
						$siis->itemcode = $itemcode;
						$siis->description = $_POST['desc'][$i];
						$siis->weight = $_POST['weight'][$i];
						$siis->height = $_POST['height'][$i];
						$siis->amount = Finance::amount_fix($_POST['amount'][$i]);
						/* get tax rate by id */
						$taxrate = ORM::for_table('sys_tax')->find_one($_POST['taxed'][$i]);
						/* var_dump($ptaxrate); */
						$siis->taxrate = $ptaxrate['rate'];
						$siis->taxed = $_POST['taxed'][$i];
						$taxamt = $_POST['total'][$i]*$ptaxrate['rate']/100;
						$siis->taxamount = Finance::amount_fix($taxamt);
						$siis->amt_total = Finance::amount_fix($_POST['total'][$i]);
						$siis->total = Finance::amount_fix($taxamt + $_POST['total'][$i]);
						/* others */
						$siis->type = '';
						$siis->relid = '0';
						$siis->duedate = date('Y-m-d');
						$siis->paymentmethod = '';
						$siis->notes = '';
						$siis->save();
					
					}
				}

                echo $invoiceid;
            } else {
            }

        } else {
            echo $msg;
        }

        break;

    case 'delete':

        Event::trigger('invoices/delete/');

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
		
    case 'deleteIitem':

        Event::trigger('invoices/deleteIitem/');

        $i_id = _post('i_id');
        if ($_app_stage == 'Demo') {
            r2(U . 'accounts/list', 'e', 'Sorry! Deleting Account is disabled in the demo mode.');
        }
        $d = ORM::for_table('sys_invoiceitems')->find_one($i_id);
        if ($d) {
            $d->delete();
            echo 1;
        }else{
			echo 0;
		}

        break;

    case 'print':

        Event::trigger('invoices/print/');

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

        Event::trigger('invoices/pdf/');


        $id = $routes['2'];


        $d = ORM::for_table('sys_invoices')->find_one($id);
        if ($d) {

            //find all activity for this user
            $items = ORM::for_table('sys_invoiceitems')->where('invoiceid', $id)->order_by_asc('id')->find_many();

            $trs_c = ORM::for_table('sys_transactions')->where('iid', $id)->count();

            $trs = ORM::for_table('sys_transactions')->where('iid', $id)->order_by_desc('id')->find_many();

//find the user
            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            $i_credit = $d['credit'];
            $i_due = '0.00';
            $i_total = $d['total'];
            if($d['credit'] != '0.00'){
                $i_due = $i_total - $i_credit;
            }
            else{
                $i_due =  $d['total'];
            }

            $i_due = number_format($i_due,2,$config['dec_point'],$config['thousands_sep']);
            $cf = ORM::for_table('crm_customfields')->where('showinvoice', 'Yes')->order_by_asc('id')->find_many();
//            ob_start();
//            require 'application/lib/invoices/pdf-default.php';
//            $html = ob_get_contents();
//            ob_end_clean();
//            echo $html;
//            exit;
//            require('application/lib/tcpdf/config/lang/eng.php');
//            require('application/lib/tcpdf/tcpdf.php');
//            // create new PDF document
//            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
//
//// set document information
//            $pdf->SetCreator('application');
//            $pdf->SetAuthor('application.com');
//            $pdf->SetTitle('invoice titla');
//            $pdf->SetSubject('invoice subject');
//
//            $pdf->SetPrintHeader(false);
//// set default header data
//            //   $pdf->SetHeaderData('', '', $title, "Generated on ".date('d/m/Y')." \nby ".$aadmin);
//
//// set header and footer fonts
//            //   $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//            //   $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
////$pdf->SetFont('freesans', '', 10);
//// set default monospaced font
//            //   $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
//
////set margins
////            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
////        //    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
////         //   $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
////
//////set auto page breaks
////            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
////
//////set image scale factor
////            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
//
////set some language-dependent strings
//            //  $pdf->setLanguageArray();
//
//// ---------------------------------------------------------
//
//// set font
//            $pdf->AddPage();
//            require 'application/lib/invoices/pdf-x1.php';
//
//            // $pdf->writeHTML($html, true, false, true, false, '');
//
//// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
//
//// reset pointer to the last page
//            //   $pdf->lastPage();
//
//// ---------------------------------------------------------
//
////Close and output PDF document
//            if (isset($routes['3']) AND ($routes['3'] == 'dl')) {
//                $pdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'D'); # D
//            } else {
//                $pdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'I'); # D
//            }
//
//        } else {
//            r2(U . 'customers/list', 'e', $_L['Account_Not_Found']);
//        }


            if($d['cn'] != ''){
                $dispid = $d['cn'];
            }
            else{
                $dispid = $d['id'];
            }

            $in = $d['invoicenum'].$dispid;

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
            $mpdf->SetWatermarkText(ib_lan_get_line($d['status']));
            $mpdf->showWatermarkText = true;
            $mpdf->watermark_font = $ib_w_font;
            $mpdf->watermarkTextAlpha = 0.1;
            $mpdf->SetDisplayMode('fullpage');

            if($config['pdf_font'] == 'AdobeCJK'){
                $mpdf->useAdobeCJK = true;
                $mpdf->autoScriptToLang = true;
                $mpdf->autoLangToFont = true;
            }

            Event::trigger('invoices/before_pdf_render/');

            ob_start();

            require 'application/lib/invoices/pdf-x2.php';

            $html = ob_get_contents();


            ob_end_clean();

            $mpdf->WriteHTML($html);

            $pdf_return = 'inline';

            if (isset($routes[3])) {

                $r_type = $routes[3];


            }
            else{
                $r_type = 'inline';
            }

            if ($r_type == 'dl') {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'D'); # D
            }

            elseif ($r_type == 'inline') {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'I'); # D
            }

            elseif ($r_type == 'store') {

                $mpdf->Output('application/storage/temp/Invoice_'.$in.'.pdf', 'F'); # D

            }

            else {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'I'); # D
            }




        }



        break;

    case 'markpaid':



        $iid = _post('iid');
        $d = ORM::for_table('sys_invoices')->find_one($iid);
        if ($d) {
            $d->status = 'Paid';
            $d->save();
            Event::trigger('invoices/markpaid/',$invoice=$d);
            _msglog('s', 'Invoice marked as Paid');
        } else {
            _msglog('e', 'Invoice not found');
        }
        break;

    case 'markunpaid':

        Event::trigger('invoices/markunpaid/');

        $iid = _post('iid');
        $d = ORM::for_table('sys_invoices')->find_one($iid);
        if ($d) {
            $d->status = 'Unpaid';
            $d->save();
            _msglog('s', 'Invoice marked as Un Paid');
        } else {
            _msglog('e', 'Invoice not found');
        }
        break;

    case 'markcancelled':

        Event::trigger('invoices/markcancelled/');


        $iid = _post('iid');
        $d = ORM::for_table('sys_invoices')->find_one($iid);
        if ($d) {
            $d->status = 'Cancelled';
            $d->save();
            _msglog('s', 'Invoice marked as Cancelled');
        } else {
            _msglog('e', 'Invoice not found');
        }
        break;

    case 'markpartiallypaid':

        Event::trigger('invoices/markpartiallypaid/');


        $iid = _post('iid');
        $d = ORM::for_table('sys_invoices')->find_one($iid);
        if ($d) {
            $d->status = 'Partially Paid';
            $d->save();
            _msglog('s', 'Invoice marked as Partially Paid');
        } else {
            _msglog('e', 'Invoice not found');
        }
        break;


    case 'add-payment':

        Event::trigger('invoices/add-payment/');

        $sid = $routes['2'];
        $d = ORM::for_table('sys_invoices')->find_one($sid);

        if ($d) {

            $itotal = $d['total'];
            $ic = $d['credit'];
            $np = $itotal - $ic;
            $a_opt = '';
            // <option value="{$ds['account']}">{$ds['account']}</option>
            $a = ORM::for_table('sys_accounts')->find_many();
            foreach ($a as $acs) {
                $a_opt .= '<option value="' . $acs['account'] . '">' . $acs['account'] . '</option>';
            }

            $pms_opt = '';
            // <option value="{$pm['name']}">{$pm['name']}</option>
            $pms = ORM::for_table('sys_pmethods')->order_by_asc('sorder')->find_many();
            foreach ($pms as $pm) {
                $pms_opt .= '<option value="' . $pm['name'] . '">' . $pm['name'] . '</option>';
            }

            $cats_opt = '';

            $cats = ORM::for_table('sys_cats')->where('type', 'Income')->order_by_asc('sorder')->find_many();

            foreach ($cats as $cat) {
                $cats_opt .= '<option value="' . $cat['name'] . '">' . $cat['name'] . '</option>';
            }


            echo '
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>'.$_L['Invoice'].' #' . $d['id'] . '</h3>
</div>
<div class="modal-body">

<form class="form-horizontal" role="form" id="form_add_payment" method="post">
<div class="form-group">
    <label for="subject" class="col-sm-2 control-label">'.$_L['Account'].'</label>
    <div class="col-sm-10">
       <select id="account" name="account">
                            <option value="">'.$_L['Choose an Account'].'</option>

' . $a_opt . '

                        </select>
    </div>
  </div>

<div class="form-group">
    <label for="date" class="col-sm-2 control-label">'.$_L['Date'].'</label>
    <div class="col-sm-10">
      <input type="text" class="form-control datepicker"  value="' . date('Y-m-d') . '" name="date" id="date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
    </div>
  </div>

<div class="form-group">
    <label for="description" class="col-sm-2 control-label">'.$_L['Description'].'</label>
    <div class="col-sm-10">
      <input type="text" id="description" name="description" class="form-control" value="'.$_L['Invoice'].' ' . $d['id'] . ' '.$_L['Payment'].'">
    </div>
  </div>
<div class="form-group">
    <label for="amount" class="col-sm-2 control-label">'.$_L['Amount'].'</label>
    <div class="col-sm-10">
      <input type="text" id="amount" name="amount" class="form-control amount"   data-a-sign="' . $config['currency_code'] . ' " data-a-dec="' . $config['dec_point'] . '" data-a-sep="' . $config['thousands_sep'] . '"
data-d-group="2" value="' . $np . '">
    </div>
  </div>
<div class="form-group">
    <label for="cats" class="col-sm-2 control-label">'.$_L['Category'].'</label>
    <div class="col-sm-10">
       <select id="cats" name="cats">
                             <option value="Uncategorized">'.$_L['Uncategorized'].'</option>

' . $cats_opt . '

                        </select>
    </div>
  </div>
  <div class="form-group">
    <label for="payer_name" class="col-sm-2 control-label">'.$_L['Payer'].'</label>
    <div class="col-sm-10">
      <input type="text" id="payer_name" name="payer_name" class="form-control" value="' . $d['account'] . '" disabled>
    </div>
  </div>

   <div class="form-group">
    <label for="subject" class="col-sm-2 control-label">'.$_L['Method'].'</label>
    <div class="col-sm-10">
      <select id="pmethod" name="pmethod">
                                <option value="">'.$_L['Select Payment Method'].'</option>


                                ' . $pms_opt . '


                            </select>
    </div>
  </div>


</form>

</div>
<div class="modal-footer">
<input type="hidden" id="payer" name="payer" value="' . $d['userid'] . '">
	<button id="save_payment" class="btn btn-primary">'.$_L['Save'].'</button>

		<button type="button" data-dismiss="modal" class="btn">'.$_L['Close'].'</button>
</div>';
        } else {
            exit('Invoice Not Found');
        }


        break;


    case 'mail_invoice_':

        Event::trigger('invoices/mail_invoice_/');

        $sid = $routes['2'];
        $etpl = $routes['3'];

        $d = ORM::for_table('sys_invoices')->find_one($sid);


        if ($d) {

            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);

            $msg = Invoice::gen_email($sid,$etpl);



            if($msg){
                $subj = $msg['subject'];
                $message_o = $msg['body'];
                $email = $msg['email'];
                $name = $msg['name'];
            }
            else{
                $subj = '';
                $message_o = '';
                $email = '';
                $name = '';
            }




            if($d['cn'] != ''){
                $dispid = $d['cn'];
            }
            else{
                $dispid = $d['id'];
            }

            $in = $d['invoicenum'].$dispid;


            echo '
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Invoice #' . $d['id'] . '</h3>
</div>
<div class="modal-body">

<form class="form-horizontal" role="form" id="email_form" method="post">


<div class="form-group">
    <label for="toemail" class="col-sm-2 control-label">'.$_L['To'].'</label>
    <div class="col-sm-10">
      <input type="email" id="toemail" name="toemail" class="form-control" value="' . $email . '">
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
      <input type="hidden" id="toname" name="toname" value="' . $name . '">
      <input type="hidden" id="i_cid" name="i_cid" value="' . $a['id'] . '">
      <input type="hidden" id="i_iid" name="i_iid" value="' . $d['id'] . '">
    </div>
  </div>


<div class="form-group">
    <label for="attach_pdf" class="col-sm-2 control-label">'.$_L['Attach PDF'].'</label>
    <div class="col-sm-10">
      <div class="checkbox c-checkbox">
                          <label>
                            <input type="checkbox" name="attach_pdf" id="attach_pdf" value="Yes" checked><span class="fa fa-check"></span>  <i class="fa fa-paperclip"></i> Invoice_'.$in.'.pdf
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


    case 'send_email':

        Event::trigger('invoices/send_email/');

        $msg = '';
        $email = _post('toemail');
        $cc = _post('ccemail');
        $bcc = _post('bccemail');
        $subject = _post('subject');
        $toname = _post('toname');
        $cid = _post('i_cid');
        $iid = _post('i_iid');

        $d = ORM::for_table('sys_invoices')->find_one($iid);

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

            Invoice::pdf($iid,'store');

            $attachment_path = 'application/storage/temp/Invoice_'.$in.'.pdf';
            $attachment_file = 'Invoice_'.$in.'.pdf';




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

            Notify_Email::_send($toname, $email, $subject, $message, $cid, $iid, $cc, $bcc, $attachment_path, $attachment_file);

            // Now check for

            echo '<div class="alert alert-success fade in">Mail Sent!</div>';
        } else {
            echo '<div class="alert alert-danger fade in">' . $msg . '</div>';
        }


        break;

    case 'stop_recurring':

        Event::trigger('invoices/stop_recurring/');


        $id = $routes['2'];
        $id = str_replace('sid', '', $id);
        $d = ORM::for_table('sys_invoices')->find_one($id);
        if ($d) {

            $d->r = '0';
            $d->save();
            r2(U . 'invoices/list-recurring', 's', 'Recurring Disabled for Invoice: ' . $id);

        } else {
            echo 'Invoice not found';
        }
        break;


    case 'add-payment-post':

        Event::trigger('invoices/add-payment-post/');

        $msg = '';
        $account = _post('account');
        $date = _post('date');
        $amount = _post('amount');
        $amount = Finance::amount_fix($amount);
        $payerid = _post('payer');
        $pmethod = _post('pmethod');
        $ref = _post('ref');
        if($payerid == ''){
            $payerid = '0';
        }
        $amount = str_replace($config['currency_code'], '', $amount);
        $amount = str_replace(',', '', $amount);
        if (!is_numeric($amount)) {
            $msg .= 'Invalid Amount' . '<br>';
        }
        $cat = _post('cats');
        $iid = _post('iid');


        if ($payerid == '') {
            $msg .= 'Payer Not Found' . '<br>';
        }
        $description = _post('description');
        $msg = '';
        if ($description == '') {
            $msg .= $_L['description_error'] . '<br>';
        }

        if (Validator::Length($account, 100, 1) == false) {
            $msg .= 'Please choose an Account' . '<br>';
        }


        if (is_numeric($amount) == false) {
            $msg .= $_L['amount_error'] . '<br>';
        }

        if ($msg == '') {

            //find the current balance for this account
            $a = ORM::for_table('sys_accounts')->where('account', $account)->find_one();
            $cbal = $a['balance'];
            $nbal = $cbal + $amount;
            $a->balance = $nbal;
            $a->save();
            $d = ORM::for_table('sys_transactions')->create();
            $d->account = $account;
            $d->type = 'Income';
            $d->payerid = $payerid;

            $d->amount = $amount;
            $d->category = $cat;
            $d->method = $pmethod;
            $d->ref = $ref;
            $d->tags = '';


            $d->description = $description;
            $d->date = $date;
            $d->dr = '0.00';
            $d->cr = $amount;
            $d->bal = $nbal;
            $d->iid = $iid;


            //others
            $d->payer = '';
            $d->payee = '';
            $d->payeeid = '0';
            $d->status = 'Cleared';
            $d->tax = '0.00';
            //


            $d->save();
            $tid = $d->id();
            _log('New Deposit: ' . $description . ' [TrID: ' . $tid . ' | Amount: ' . $amount . ']', 'Admin', $user['id']);
            _msglog('s', 'Transaction Added Successfully');
            //now work with invoice
            $i = ORM::for_table('sys_invoices')->find_one($iid);
            if ($i) {
                $pc = $i['credit'];
                $it = $i['total'];
                $dp = $it - $pc;
                if (($dp == $amount) OR (($dp < $amount))) {
                    $i->status = 'Paid';

                } else {

                    $i->status = 'Partially Paid';
                }
                $i->credit = $pc + $amount;
                $i->save();

            }
            echo $tid;
        } else {
            echo '<div class="alert alert-danger fade in">' . $msg . '</div>';
        }

        break;

    case 'export_csv':

        $fileName = 'transactions_'.time().'.csv';

        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header('Content-Description: File Transfer');
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename={$fileName}");
        header("Expires: 0");
        header("Pragma: public");

        $fh = @fopen( 'php://output', 'w' );

        $headerDisplayed = false;

        // $results = ORM::for_table('crm_Accounts')->find_array();
        $results = db_find_array('sys_invoices');

        foreach ( $results as $data ) {
            // Add a header row if it hasn't been added yet
            if ( !$headerDisplayed ) {
                // Use the keys from $data as the titles
                fputcsv($fh, array_keys($data));
                $headerDisplayed = true;
            }

            // Put the data into the stream
            fputcsv($fh, $data);
        }
// Close the file
        fclose($fh);



        break;

    case 'payments':

        $mode_css = Asset::css('footable/css/footable.core.min');

        $mode_js = Asset::js(array('numeric','footable/js/footable.all.min'));

        $d = ORM::for_table('sys_transactions')->where_not_equal('iid','0')->limit(500)->find_array();

        $ui->assign('d',$d);

        $ui->assign('xheader', $mode_css);
        $ui->assign('xfooter', $mode_js);

        $ui->assign('xjq', '
        
        $(\'.footable\').footable();
        
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
               window.location.href = _url + "delete/invoice/" + id;
           }
        });
    });



 ');

        $ui->display('payments.tpl');


        break;

    default:
        echo 'action not defined';
}