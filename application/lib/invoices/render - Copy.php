<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    <title><?php echo $_L['INVOICE']; ?> <?php echo $d['id']; ?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo APP_URL; ?>/application/storage/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo APP_URL.'/'; ?>application/storage/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo APP_URL.'/'; ?>application/storage/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo APP_URL.'/'; ?>application/storage/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo APP_URL.'/'; ?>application/storage/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo APP_URL.'/'; ?>application/storage/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo APP_URL.'/'; ?>application/storage/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo APP_URL.'/'; ?>application/storage/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo APP_URL.'/'; ?>application/storage/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo APP_URL.'/'; ?>application/storage/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo APP_URL.'/'; ?>application/storage/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo APP_URL.'/'; ?>application/storage/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo APP_URL.'/'; ?>application/storage/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo APP_URL.'/'; ?>application/storage/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo APP_URL.'/'; ?>application/storage/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <style>

        * { margin: 0; padding: 0; }
        body {
            font: 14px/1.4 Helvetica, Arial, sans-serif;
        }
        #page-wrap { width: 800px; margin: 0 auto; }

        textarea { border: 0; font: 14px Helvetica, Arial, sans-serif; overflow: hidden; resize: none; }
        table { border-collapse: collapse; }
        table td, table th { border: 1px solid black; padding: 5px; }

        #header { height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; }

        #address { width: 250px; height: 150px; float: left; }
        #customer { overflow: hidden; }

        #logo { text-align: right; float: right; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; overflow: hidden; }
        #customer-title { font-size: 20px; font-weight: bold; float: left; }

        #meta { margin-top: 1px; width: 100%; float: right; }
        #meta td { text-align: right;  }
        #meta td.meta-head { text-align: left; background: #eee; }
        #meta td textarea { width: 100%; height: 20px; text-align: right; }

        #items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
        #items th { background: #eee; }
        #items textarea { width: 80px; height: 50px; }
        #items tr.item-row td {  vertical-align: top; }
        #items td.description { width: 300px; }
        #items td.item-name { width: 175px; }
        #items td.description textarea, #items td.item-name textarea { width: 100%; }
        #items td.total-line { border-right: 0; text-align: right; }
        #items td.total-value { border-left: 0; padding: 10px; }
        #items td.total-value textarea { height: 20px; background: none; }
        #items td.balance { background: #eee; }
        #items td.blank { border: 0; }

        #terms { text-align: center; margin: 20px 0 0 0; }
        #terms h5 { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0; }
        #terms textarea { width: 100%; text-align: center;}



        .delete-wpr { position: relative; }
        .delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

        /* Extra CSS for Print Button*/
        .button {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            overflow: hidden;
            margin-top: 20px;
            padding: 12px 12px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-transition: all 60ms ease-in-out;
            transition: all 60ms ease-in-out;
            text-align: center;
            white-space: nowrap;
            text-decoration: none !important;

            color: #fff;
            border: 0 none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.3;
            -webkit-appearance: none;
            -moz-appearance: none;

            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 160px;
            -ms-flex: 0 0 160px;
            flex: 0 0 160px;
        }
        .button:hover {
            -webkit-transition: all 60ms ease;
            transition: all 60ms ease;
            opacity: .85;
        }
        .button:active {
            -webkit-transition: all 60ms ease;
            transition: all 60ms ease;
            opacity: .75;
        }
        .button:focus {
            outline: 1px dotted #959595;
            outline-offset: -4px;
        }

        .button.-regular {
            color: #202129;
            background-color: #edeeee;
        }
        .button.-regular:hover {
            color: #202129;
            background-color: #e1e2e2;
            opacity: 1;
        }
        .button.-regular:active {
            background-color: #d5d6d6;
            opacity: 1;
        }

        .button.-dark {
            color: #FFFFFF;
            background: #333030;
        }
        .button.-dark:focus {
            outline: 1px dotted white;
            outline-offset: -4px;
        }

        @media print
        {
            .no-print, .no-print *
            {
                display: none !important;
            }
        }

    </style>

</head>

<body>

<div id="page-wrap">

    <table width="100%">
        <tr>
            <td style="border: 0;  text-align: left" width="62%">
                <img id="image" src="<?php echo APP_URL; ?>/application/storage/system/logo.png" alt="logo" />
                <br><br>
                <span style="font-size: 18px; color: #2f4f4f"><strong><?php echo $_L['INVOICE']; ?> # <?php
                        if($d['cn'] != ''){
                            $dispid = $d['cn'];
                        }
                        else{
                            $dispid = $d['id'];
                        }
                        echo $d['invoicenum'].$dispid;
                        ?></strong></span>
            </td>
            <td style="border: 0;  text-align: right" width="62%"><div id="logo">

                    <?php echo $config['caddress']; ?>
                    
                </div></td>
        </tr>



    </table>

    <hr>
    <br>

    <div style="clear:both"></div>

    <div id="customer">

        <table id="meta">
            <tr>
                <td rowspan="5" style="border: 1px solid white; border-right: 1px solid black; text-align: left" width="62%">
                    <strong><?php echo $_L['Invoiced To']; ?></strong> <br>
                    <?php if($a['company'] != '') {
                        ?>
                        <?php echo $a['company']; ?> <br>
                       <?php echo $_L['ATTN']; ?>: <?php echo $a['account']; ?> <br>
                    <?php
                    }
                    else{
                        ?>
                        <?php echo $d['account']; ?> <br>
                    <?php
                    }
                    ?>

                    <?php echo $a['address']; ?> <br>
                    <?php echo $a['city']; ?> <?php echo $a['state']; ?> <?php echo $a['zip']; ?> <br>
                    <?php echo $a['country']; ?> <br>
                    <?php
                    if(($a['phone']) != ''){
                        echo 'Phone: '. $a['phone']. ' <br>';
                    }
                    if(($a['email']) != ''){
                        echo 'Email: '. $a['email']. ' <br>';
                    }
                    if(($a['gst_no']) != ''){
                        echo 'GST No: '. $a['gst_no']. ' <br>';
                    }
                    foreach ($cf as $cfs){
                        echo $cfs['fieldname'].': '. get_custom_field_value($cfs['id'],$a['id']). ' <br>';
                    }
                    ?></td>
                <td class="meta-head"><?php echo $_L['INVOICE']; ?> #</td>
                <td><?php echo $d['invoicenum'].$dispid; ?></td>
            </tr>
            <tr>

                <td class="meta-head"><?php echo $_L['Status']; ?></td>
                <td><?php
                    echo ib_lan_get_line($d['status']);
                    ?></td>
            </tr>
            <tr>

                <td class="meta-head"><?php echo $_L['Invoice Date']; ?></td>
                <td><?php echo date($config['df'], strtotime($d['date'])); ?></td>
            </tr>
            <tr>

                <td class="meta-head"><?php echo $_L['Due Date']; ?></td>
                <td><?php echo date($config['df'], strtotime($d['duedate'])); ?></td>
            </tr>

            <tr>

                <td class="meta-head"><?php echo $_L['Amount Due']; ?></td>
                <td><div class="due"><?php echo ib_money_format($i_due,$config,$d['currency_symbol']) ?></div></td>
            </tr>

        </table>

    </div>

    <table id="items">
			<tr>
				<th id="cell-item" class="text-semibold"><?php echo $_L['Item'];?></th>
				<th id="cell-qty" class="text-center text-semibold"><?php echo $_L['Quantity'];?></th>
				<th id="cell-price" class="text-center text-semibold"><?php echo $_L['Price'];?></th>
				<th id="cell-gst_per" class="text-center text-semibold"><?php echo $_L['gst_per'];?></th>
				<th id="cell-gst_amt" class="text-center text-semibold"><?php echo $_L['gst_amt'];?></th>
				<th id="cell-total" class="text-center text-semibold"><?php echo $_L['Total'];?></th>
			</tr>
        <?php
					//var_dump($a);
					//var_dump($d['taxrate']);
        foreach ($items as $item){
            echo '  <tr class="item-row">


            <td class="description">'.$item['description'].'</td>
            <td align="right">'.$item['qty'].'</td>
            <td align="right">'.ib_money_format($item['amount'],$config,$d['currency_symbol']).'</td>
						<td align="right">'.$d['taxrate'].'</td>
						<td align="right">'.$d['tax'].'</td>
            <td align="right"><span class="price">'.ib_money_format($d['total'],$config,$d['currency_symbol']).'</span></td>
        </tr>';
        }

        ?>


            <tr>
                <td class="blank"> </td>
                <td colspan="4" class="total-line"><?php echo $_L['Sub Total']; ?></td>
                <td class="total-value"><div id="subtotal"><?php echo ib_money_format($d['subtotal'],$config,$d['currency_symbol']); ?></div></td>
            </tr>
            <?php
            if(($d['discount']) != '0.00'){

           ?>
            <tr>
                <td class="blank"> </td>
                <td colspan="4" class="total-line"><?php echo $_L['Discount']; ?>
                    <?php
                    if($d['discount_type'] == 'p'){
                        echo '('.$d['discount_value'].')%';
                    }
                    ?>
                </td>
                <td class="total-value"><div id="subtotal"><?php echo ib_money_format($d['discount'],$config,$d['currency_symbol']); ?></div></td>
            </tr>
                <?php
            }
            ?>
        <?php
        if (($d['tax']) != '0.00'){
            ?>
            <tr>

                <td class="blank"> </td>
                <td colspan="4" class="total-line"><?php echo $_L['TAX']; ?></td>
                <td class="total-value"><div id="total"><?php echo ib_money_format($d['tax'],$config,$d['currency_symbol']); ?></div></td>
            </tr>
        <?php
        }
        ?>

        <?php
        if($d['credit'] != '0.00'){
            ?>
            <tr>
                <td class="blank"> </td>
                <td colspan="4" class="total-line"><?php echo $_L['Invoice Total']; ?></td>
                <td class="total-value"><div class="due"><?php echo ib_money_format($d['total'],$config,$d['currency_symbol']); ?></div></td>
            </tr>
            <tr>
                <td class="blank"> </td>
                <td colspan="4" class="total-line"><?php echo $_L['Total Paid']; ?></td>
                <td class="total-value"><div class="due"><?php echo ib_money_format($d['credit'],$config,$d['currency_symbol']); ?></div></td>
            </tr>
            <tr>
                <td class="blank"> </td>
                <td colspan="4" class="total-line balance"><?php echo $_L['Amount Due']; ?></td>
                <td class="total-value balance"><div class="due"><?php echo ib_money_format($i_due,$config,$d['currency_symbol']) ?></div></td>
            </tr>
        <?php
        }
        else{
            ?>
            <tr>
                <td class="blank"> </td>
                <td colspan="4" class="total-line balance"><?php echo $_L['Grand Total']; ?></td>
                <td class="total-value balance"><div class="due"><?php echo ib_money_format($d['total'],$config,$d['currency_symbol']); ?></div></td>
            </tr>
        <?php
        }
        ?>

    </table>

<!--    related transactions -->

    <?php
    if ($trs_c != ''){
        ?>
        <br>
        <h4><?php echo $_L['Related Transactions']; ?>: </h4>
        <table id="related_transactions" style="width: 100%">

            <tr>
                <th align="left" width="20%"><?php echo $_L['Date']; ?></th>
                <th align="left"><?php echo $_L['Account']; ?></th>
                <th width="50%" align="left"><?php echo $_L['Description']; ?></th>
                <th align="right"><?php echo $_L['Amount']; ?></th>

            </tr>



            <?php

            foreach ($trs as $tr){
                echo '  <tr class="item-row">


            <td align="left">'.date( $config['df'], strtotime($tr['date'])).'</td>
            <td align="left">'.$tr['account'].'</td>
            <td align="left">'.$tr['description'].'</td>
            <td align="right"><span class="price">'.ib_money_format($tr['amount'],$config,$d['currency_symbol']).'</span></td>
        </tr>';
            }

            ?>


        </table>
    <?php
    }
    ?>

<!--    end related transactions -->

    <?php
    if($d['notes'] != ''){

        ?>
        <div id="terms">
            <h5><?php echo $_L['Terms']; ?></h5>
            <?php echo $d['notes']; ?>
        </div>
    <?php
    }
    ?>


    <button class='button -dark center no-print'  onClick="window.print();">Click Here to Print</button>
</div>

</body>

</html>