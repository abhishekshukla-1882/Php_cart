<?php
session_start();

include 'product.php';
if (isset($_POST['Select'])) {
    echo 'clicked';
    $get_id = $_POST['id_suply'];
    // echo 'id get'.$get_id.'<br>';
    // $id = 103;
    $quantity = 1;
    foreach ($products as $match_id) {
        // echo $match_id['id'];
        if ($match_id['id'] == $get_id) {
            $id = $id;
            $image =  $match_id['image'];
            $price =  $match_id['price'];
            $name =  $match_id['name'];
            $quantity = $quantity ;
            $product = array($name, $price, $image, $quantity);

            $_SESSION[$name] = $product;
        }
    }
}
if(isset($_POST['event'])){
    $event = $_POST['event'];
    $name = $_POST['name_sp'];
    $price = $_POST['price_sp'];
    $quantity = $_POST['quan_sp'];
    $image = $_POST['image_sp'];
    // $name = $_POST
    $product = array($name, $price, $image, $quantity);
    if($event == 'update'){
        unset($_SESSION[$name]);

    $_SESSION[$name] = $product;
        echo "done update";
}else{
    unset($_SESSION[$name]);
    echo "deleted";
}
    // $name = $_POST
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #cart{

            width:  70%;
            margin: 0 auto;
            /* margin-top: 10%; */
        }
    </style>
</head>

<body>

    <!-- <a href="cart.php">Cart</a> -->
    <div class="header">
        <div class="upp">
            <div class="container">
                <?php

                foreach ($products as $item) {
                    // echo 'k'.$products[$i].'yes--<pre>'.$item."=></pre>";
                    // $i++;
                    echo '<form method="POST"><div id="pro"style="float:left; margin-left:10%;margin-top:2%;margin-bottom:5%;">
                            <img src="images/' . $item['image'] . '">

                        <p>' . $item['name'] . '</p><input value=' . $item['id'] . ' name= "id_suply" hidden><input type="submit" name="Select" value="Add To Cart"></div></form>';
                }
                ?>
            </div>
        </div>
        
</div>
<div class="var" id="cart">

<h3>Cart Section</h3>
<?php     
    $html = "";
    $s_no = 0;
    foreach ($_SESSION as  $product) {
        
        // echo ($s_no++);
        echo "<form action ='' method='POST'>";
        echo  '<div class="cont"  style="float:left; margin-left:10%;margin-top:5%">
        <p>'.$s_no++.'<img src="images/' . $product[2] . '">
        <p>Price  $ ' . $product[1] . '</p>' . $product[0] . '<p>Quantity - <input type="text" name="quan_sp"  value='.$product[3].'></p>
        <input type="submit" name ="event" value="update"/>
        <input value=' . $product[0] . ' name= "name_sp" hidden>
        <input value=' . $product[1] . ' name= "price_sp" hidden><input value=' . $product[2] . ' name= "image_sp" hidden>
       

        <input type="submit" name ="event" value="Delete"/>
        </div>';
        echo  "</form>";
    }
    ?>
    </div>
</div>
</body>

</html>
<!-- // <input value='  ' name= "quantity" hidden> -->
