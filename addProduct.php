<?php 

include_once "dbconfig.php";
error_reporting(0);
if(isset($_GET['id'])){
    $product = $crud->getSingleProduct($_GET['id']);
    $type = "edit";
}else{
    $type = "add";
}

if(isset($_POST['add'])){

    // var_dump($_POST);exit;
    if($_POST['name']=="" || !is_numeric($_POST['quantity']) || !is_numeric($_POST['price'])){
        echo "plz";
    }
    else
    { 
        $res = $crud->createProduct($_POST);
    //var_dump($res);
    header("location:index.php");
}
   
}
if(isset($_POST['edit'])){
    //var_dump(2);exit;
    $res = $crud->editProduct($_POST);
    header("location:productList.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <a href="index.php">HOME</a>
    <form method="post">
    <input type="text" placeholder="name" name="name" id="" value="<?= ($product) ?  $product['name'] :  "" ?>">
    <input type="hidden" name="<?= $type ?>" >
    <input type="hidden" name="id" value="<?=$product['id']?>">
    <input type="text"placeholder="Price" name="price" value="<?=$product['price']?>">
    <input type="text" placeholder="Quantity" name="quantity" value="<?=$product['quantity']?>">
    <button type="submit">Submit</button>
    </form>
    </div>
</body>
</html>