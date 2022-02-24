<!-- <?php
include 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // foreach()
        // foreach($_SESSION as $product){

        //     foreach($product as $key => $value){
        //         // echo '<pre>'.$value.'</pre>';
        //         echo '<div class= "cart_item">
        //         <img src= images/'.$value['image'].'>';
        //     }
    // }
    // ?>
</body>
</html> -->
<?php
// global $html;
// $html ='';
function cart(){
    $html = "";
    foreach ($_SESSION as $product) {
        $html .=  '<div class="cont" >
        <img src="images/' . $product[2] . '">
        <p>Price  $ ' . $product[1] . '</p>' . $product[0] . '</div>';
    }
    return $html;
// </div>
}
?>