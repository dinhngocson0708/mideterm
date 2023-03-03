<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Show products</title>
    <link rel="stylesheet" href="css.css">
    
</head>
<body>
    <a href="create.php">Thêm sản phẩm</a>
    <?php
        
        $sanpham=array(
            'GIÀY DÉP'=>array(
                array(
                    'img'=>'<img src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=//Upload/2021/12/z2926694889697-f9f6670279872b849ff0d58f9a80e503.jpg"/>',
                    'name'=>'Sandal nữ',
                    'Price'=>399090,
                    'CODE' =>'GD1'
                ),
                array(
                    'img'=>'<img src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2022/12/26/z3989779089535_0745117cd97e2909c98f846d741294ea.jpg"/>',
                    'name'=>'hawei nova 2i',
                    'Price'=>3990900,
                    'CODE' =>'GD2'
                ),
                array(
                    'img'=>'<img src="https://i0.wp.com/salt.tikicdn.com/cache/w1200/ts/product/5a/85/08/792b82aa310a5fb3a2bdec574147fde7.jpg"/>',
                    'name'=>'Nokia black future',
                    'Price'=>399090,
                    'CODE' =>'GD3'
                )
                ),
                'TÚI XÁCH'=>array(
                    array(
                        'img'=>'<img src="https://my-test-11.slatic.net/p/d8e74ffb5867cf521f2151a3bb948ca4.jpg"/>',
                        'name'=>'Royal Bagger Túi Xách Tay Cầm',
                        'Price'=>399090,
                        'CODE' =>"TX1"
                    ),
                    array(
                        'img'=>'<img src="https://my-test-11.slatic.net/p/a858aa220142c5feda60ad37326c7a8c.jpg"/>',
                        'name'=>'Royal Bagger Túi Xách Tay Cầm',
                        'Price'=>3990900,
                        'CODE' =>"TX2"
                    ),
                    array(
                        'img'=>'<img src="https://my-test-11.slatic.net/p/d8e74ffb5867cf521f2151a3bb948ca4.jpg"/>',
                        'name'=>'Royal Bagger Túi Xách Tay Cầm',
                        'Price'=>399090,
                        'CODE' =>"T3"
                    )
                    
                )
        )
    ?>
   
   

    <?php 
        foreach($sanpham as $k=>$vl){ 
        ?>
        <div > <div class="titles"><?php echo  $k  ?></div></div>
        <div >
                <div class="row">
                    <?php foreach($vl as $k1=>$vl1){ 
                    ?>
                       <div class="col-sm-3 sp">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $vl1['img']  ?></h5>
                                <p class="card-text"><?php echo $vl1['name']."-".$vl1['CODE'] ?></p>
                                <p class="card-text"> <div class="price"><?php echo $vl1['Price'] ?> <span style="text-decoration:underline">đ</span></div></p>
                                <button class="bt" onclick="return confirm('Cảm ơn đã mua hàng');">Đặt hàng</button>
                            </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
        </div>
           
        
           
    <?php
    }
    ?>
    
    
    
    
</body>
</html>