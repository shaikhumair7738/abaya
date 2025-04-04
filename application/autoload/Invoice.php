<?php
Class Invoice
{

    public static function gen_email($iid, $etpl)
    {

        global $config;

        $d = ORM::for_table('sys_invoices')->find_one($iid);
        if ($etpl == 'created') {
					if($d['company_id']=='2'){
						$e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Created 1')->find_one();
					}
					else{
						$e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Created')->find_one();
					}
            
        } elseif ($etpl == 'reminder') {
					if($d['company_id']=='2'){
						 $e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Payment Reminder 1')->find_one();
					}
					else{
						 $e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Payment Reminder')->find_one();
					}
           
        } elseif ($etpl == 'overdue') {
					if($d['company_id']=='2'){ 
					$e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Overdue Notice 1')->find_one();
					}
					else{
						$e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Overdue Notice')->find_one();
					}
            
        } elseif ($etpl == 'confirm') {
					if($d['company_id']=='2'){
						 $e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Payment Confirmation 1')->find_one();
					}
					else{
						 $e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Payment Confirmation')->find_one();
					}
           
        } elseif ($etpl == 'refund') {
					if($d['company_id']=='2'){
						$e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Refund Confirmation 1')->find_one();
					}
					else{
						$e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Refund Confirmation')->find_one();
					}
            
        } else {
            $d = false;
            $e = false;
        }

        if ($d) {

            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            if ($d['cn'] != '') {
                $dispid = $d['cn'];
            } else {
                $dispid = $d['id'];
            }
            $invoice_num = $d['invoicenum']/*  . $dispid */;
            //parse template
            $total = $d['total'];
            $credit = $d['credit'];
            $due_amount = $total - $credit;
            $tax = $d['tax'];
            $taxrate = $d['taxrate'];
            $subtotal = $d['subtotal'];
            $subject = new Template($e['subject']);
            $subject->set('business_name', $config['CompanyName']);
            $subject->set('invoice_id', $invoice_num);
            $subj = $subject->output();
            $message = new Template($e['message']);
            $message->set('name', $a['account']);
            $message->set('customer_name', $a['account']);
            $message->set('client_name', $a['account']);
            $message->set('company', $a['company']);
            $message->set('business_name', $config['CompanyName']);
            $message->set('invoice_url', U . 'client/iview/' . $d['id'] . '/token_' . $d['vtoken']);
            $message->set('invoice_id', $invoice_num);
            $message->set('invoice_status', $d['status']);
            $message->set('invoice_amount_paid', number_format($credit, 2, $config['dec_point'], $config['thousands_sep']));
            $message->set('invoice_due_amount', number_format($due_amount, 2, $config['dec_point'], $config['thousands_sep']));
            $message->set('invoice_taxname', $d['taxname']);
            $message->set('invoice_tax_amount', number_format($tax, 2, $config['dec_point'], $config['thousands_sep']));
            $message->set('invoice_tax_rate', number_format($taxrate, 2, $config['dec_point'], $config['thousands_sep']));
            $message->set('invoice_subtotal', number_format($subtotal, 2, $config['dec_point'], $config['thousands_sep']));
            $message->set('invoice_due_date', date($config['df'], strtotime($d['duedate'])));
            $message->set('invoice_date', date($config['df'], strtotime($d['date'])));
            $message->set('invoice_amount', number_format($subtotal, 2, $config['dec_point'], $config['thousands_sep']));
            $message_o = $message->output();

            $gen = array();

            $gen['cid'] = $a['id'];
            $gen['name'] = $a['account'];
            $gen['email'] = $a['email'];
            $gen['subject'] = $subj;
            $gen['body'] = $message_o;

            return $gen;



        }

        else{
            return false;
        }


    }
		public static function gen_proforma_email($iid, $etpl, $dn="", $ed="")
    {

        global $config;

        $d = ORM::for_table('sys_performa')->find_one($iid);
        if ($etpl == 'created') {
					if($d['company_id']=='2'){
						$e = ORM::for_table('sys_email_templates')->where('tplname', 'Proforma:Proforma Created 1')->find_one();
					}
					else{
						$e = ORM::for_table('sys_email_templates')->where('tplname', 'Proforma:Proforma Created')->find_one();
					}
            
        } elseif ($etpl == 'reminder') {
					if($d['company_id']=='2'){
						 $e = ORM::for_table('sys_email_templates')->where('tplname', 'Proforma:Proforma Payment Reminder 1')->find_one();
					}
					else{
						 $e = ORM::for_table('sys_email_templates')->where('tplname', 'Proforma:Proforma Payment Reminder')->find_one();
					}
           
        } elseif ($etpl == 'overdue') {
					if($d['company_id']=='2'){ 
					$e = ORM::for_table('sys_email_templates')->where('tplname', 'Proforma:Proforma Overdue Notice 1')->find_one();
					}
					else{
						$e = ORM::for_table('sys_email_templates')->where('tplname', 'Proforma:Proforma Overdue Notice')->find_one();
					}
            
        } elseif ($etpl == 'domain_renewal') {
					if($d['company_id']=='2'){ 
					$e = ORM::for_table('sys_email_templates')->where('tplname', 'Proforma:Proforma Domain Renewal')->find_one();
					
					}
					else{
						$e = ORM::for_table('sys_email_templates')->where('tplname', 'Proforma:Proforma Domain Renewal')->find_one();
					}
            
        } elseif ($etpl == 'hosting_renewal') {
					if($d['company_id']=='2'){ 
					$e = ORM::for_table('sys_email_templates')->where('tplname', 'Proforma:Proforma Hosting Renewal')->find_one();
					
					}
					else{
						$e = ORM::for_table('sys_email_templates')->where('tplname', 'Proforma:Proforma Hosting Renewal')->find_one();
					}
            
        } elseif ($etpl == 'domain_hosting_renewal') {
					if($d['company_id']=='2'){ 
					$e = ORM::for_table('sys_email_templates')->where('tplname', 'Proforma:Proforma Domain Hosting Renewal')->find_one();
					
					}
					else{
						$e = ORM::for_table('sys_email_templates')->where('tplname', 'Proforma:Proforma Domain Hosting Renewal')->find_one();
					}
            
        } elseif ($etpl == 'confirm') {
					if($d['company_id']=='2'){
						 $e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Payment Confirmation 1')->find_one();
					}
					else{
						 $e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Payment Confirmation')->find_one();
					}
           
        } elseif ($etpl == 'refund') {
					if($d['company_id']=='2'){
						$e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Refund Confirmation 1')->find_one();
					}
					else{
						$e = ORM::for_table('sys_email_templates')->where('tplname', 'Invoice:Invoice Refund Confirmation')->find_one();
					}
            
        } else {
            $d = false;
            $e = false;
        }

        if ($d) {

            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            if ($d['cn'] != '') {
                $dispid = $d['cn'];
            } else {
                $dispid = $d['id'];
            }
            $invoice_num = $d['invoicenum']/*  . $dispid */;
            //parse template
            $total = $d['total'];
            $credit = $d['credit'];
            $due_amount = $total - $credit;
            $tax = $d['tax'];
            $taxrate = $d['taxrate'];
            $subtotal = $d['subtotal'];
            $subject = new Template($e['subject']);
            $subject->set('business_name', $config['CompanyName']);
            $subject->set('invoice_id', $invoice_num);
            $subj = $subject->output();
            $message = new Template($e['message']);
            $message->set('name', $a['account']);
            $message->set('customer_name', $a['account']);
            $message->set('client_name', $a['account']);
            $message->set('company', $a['company']);
            $message->set('duedate', $ed);
            $message->set('hosting_duedate', $ed);
            $message->set('business_name', $config['CompanyName']);
            $message->set('invoice_url', U . 'client/iview/' . $d['id'] . '/token_' . $d['vtoken']);
            $message->set('proforma_url', U . 'client/proforma-iview/' . $d['id'] . '/token_' . $d['vtoken']);
            $message->set('invoice_id', $invoice_num);
            $message->set('domain_name', $dn);
            $message->set('invoice_status', $d['status']);
            $message->set('invoice_amount_paid', number_format($credit, 2, $config['dec_point'], $config['thousands_sep']));
            $message->set('invoice_due_amount', number_format($due_amount, 2, $config['dec_point'], $config['thousands_sep']));
            $message->set('invoice_taxname', $d['taxname']);
            $message->set('invoice_tax_amount', number_format($tax, 2, $config['dec_point'], $config['thousands_sep']));
            $message->set('invoice_tax_rate', number_format($taxrate, 2, $config['dec_point'], $config['thousands_sep']));
            $message->set('invoice_subtotal', number_format($subtotal, 2, $config['dec_point'], $config['thousands_sep']));
            $message->set('invoice_due_date', date($config['df'], strtotime($d['duedate'])));
            $message->set('invoice_date', date($config['df'], strtotime($d['date'])));
            $message->set('invoice_amount', number_format($subtotal, 2, $config['dec_point'], $config['thousands_sep']));
            $message_o = $message->output();

            $gen = array();

            $gen['cid'] = $a['id'];
            $gen['name'] = $a['account'];
            $gen['email'] = $a['email'];
            $gen['subject'] = $subj;
            $gen['body'] = $message_o;

            return $gen;



        }

        else{
            return false;
        }


    }


    public static function pdf($id,$r_type=''){

        global $config,$_L;
			
        $d = ORM::for_table('sys_invoices')->find_one($id);
        if ($d) {

            //find all activity for this user
            $items = ORM::for_table('sys_invoiceitems')->where('invoiceid', $id)->order_by_asc('id')->find_many();

            $trs_c = ORM::for_table('sys_transactions')->where('iid', $id)->count();

            $trs = ORM::for_table('sys_transactions')->where('iid', $id)->order_by_desc('id')->find_many();
						$comp = ORM::for_table('sys_accounts')->find_one($d['company_id']);
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

//            $i_due = number_format($i_due,2,$config['dec_point'],$config['thousands_sep']);
            $cf = ORM::for_table('crm_customfields')->where('showinvoice', 'Yes')->order_by_asc('id')->find_many();



            if($d['cn'] != ''){
                $dispid = $d['cn'];
            }
            else{
                $dispid = $d['id'];
            }

            $in = $d['invoicenum']/* .$dispid */;

            define('_MPDF_PATH','application/lib/mpdf/');

            require_once('application/lib/mpdf/mpdf.php');

            $pdf_c = '';
            $ib_w_font = 'dejavusanscondensed';
            if($config['pdf_font'] == 'default'){
                $pdf_c = 'c';
                $ib_w_font = 'Helvetica';
            }
            $mpdf=new mPDF($pdf_c,'A4','','',5,5,2,5,10,10);
      /*     $mpdf->SetProtection(array('print')); */
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



    }    
		
		public static function proforma_pdf($id,$r_type=''){

        global $config,$_L;
			
        $d = ORM::for_table('sys_performa')->find_one($id);
        if ($d) {

            //find all activity for this user
            $items = ORM::for_table('sys_performaitems')->where('invoiceid', $id)->order_by_asc('id')->find_many();

            $trs_c = ORM::for_table('sys_proforma_transactions')->where('iid', $id)->count();

            $trs = ORM::for_table('sys_proforma_transactions')->where('iid', $id)->order_by_desc('id')->find_many();
						$comp = ORM::for_table('sys_accounts')->find_one($d['company_id']);
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

//            $i_due = number_format($i_due,2,$config['dec_point'],$config['thousands_sep']);
            $cf = ORM::for_table('crm_customfields')->where('showinvoice', 'Yes')->order_by_asc('id')->find_many();



            if($d['cn'] != ''){
                $dispid = $d['cn'];
            }
            else{
                $dispid = $d['id'];
            }

            $in = $d['invoicenum']/* .$dispid */;

            define('_MPDF_PATH','application/lib/mpdf/');

            require_once('application/lib/mpdf/mpdf.php');

            $pdf_c = '';
            $ib_w_font = 'dejavusanscondensed';
            if($config['pdf_font'] == 'default'){
                $pdf_c = 'c';
                $ib_w_font = 'Helvetica';
            }
            $mpdf=new mPDF($pdf_c,'A4','','',5,5,2,5,10,10);
      /*     $mpdf->SetProtection(array('print')); */
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



    }

}