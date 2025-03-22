<style>
    .qrcode_box {
        width: 222px;
        height: 126px;

    }
.qrcode_box div:nth-child(2) {
    padding-top: 8px;
}
.qrcode_box div {
    font-size: 13px;
    font-family: system-ui;
    padding-top: 2px;
    letter-spacing: 0.5px;
     padding-left: 4px;
    overflow: hidden;
       
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
}
    .qrcode_box img {
        width: 100px;
        float: left;
        margin-top: 6px;
        margin-left: 6px;
    }

    .qrcode_box span {
        position: relative;
        left: 10px;
        top: 43px;
        font-size: 14px;
        font-weight: 600 !important;
        float: left;
    }
</style>

<?php

$action = route(1);

switch ($action){    
    case 'fetch':
        $i=0;
        $search = isset($_GET['search']) ? $_GET['search'] : null;
        foreach(glob('ui/lib/imgs/qrcode/*') as $filename){

            $image_name = explode('.', basename($filename));

            if($search)
            {
                if($search == basename($filename))
                {
                    $param = explode('-', $image_name[0]);
                    $type = $param[0];
                    $id   = $param[1];
                    //var_dump($param);
                    if($type == 'P')
                    {
                         //product name & price
                         $product = ORM::for_table('sys_items')->find_one($id);
                         $name = $product['name'];
                         $sales_price = $product['sales_price'];
                    }
                    else
                    {
                         //design name & price
                         $design = ORM::for_table('sys_designs')->find_one($id);
                         $name = $design['name'];
                         
                         $fabrics   = json_decode($design['fabrics'], true);
                         $stones    = json_decode($design['stones'], true);
                         $handworks = json_decode($design['handworks'], true);
                         $others    = json_decode($design['others'], true);

                         $sales_price = array();

                         foreach($fabrics as $row)
                         {
                            $pr = ORM::for_table('sys_items')->find_one($row['fabric_id']);
                            $sales_price[] = $pr['sales_price'] * $row['fabric_qty'];
                         }
                         foreach($stones as $row)
                         {
                            $pr = ORM::for_table('sys_items')->find_one($row['stone_id']);
                            $sales_price[]= $pr['sales_price'] * $row['stone_qty'];
                         }
                         foreach($handworks as $row)
                         {
                            $pr = ORM::for_table('sys_items')->find_one($row['handwork_id']);
                            $sales_price[]= $pr['sales_price'] * $row['handwork_qty'];
                         }
                         foreach($others as $row)
                         {
                            $pr = ORM::for_table('sys_items')->find_one($row['other_id']);
                            $sales_price[]= $pr['sales_price'] * $row['other_qty'];
                         }   
                         
                         $sales_price[]= $design['price'];

                         $sales_price = array_sum($sales_price);
                    }

                    echo 
                    '
                        <div class="qrcode_box">
                            <img src="'.$filename.'">
                            <div>'.$image_name[0].'</div>
                            <div>'.$name.'</div>
                            <div>₹'.$sales_price.'</div>
                            <br>
                        </div>
                    '
                    ;                    
                }
            }
            else
            {
                echo 
                ' 
                    <div class="qrcode_box">
                        <img src="'.$filename.'">
                        <span>'.$image_name[0].'</span>
                        <br>
                    </div>
                '
                ;
            }
            $i++;
        }
    break;
}

