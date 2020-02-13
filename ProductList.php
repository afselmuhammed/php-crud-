<?php
include_once 'dbconfig.php';

$products = $crud->getProducts();
 //var_dump($products->fetch(PDO::FETCH_ASSOC));
 //$pd = $products->fetch(PDO::FETCH_ASSOC);
 if(isset($_POST['delete'])){
     $res = $crud->deleteProduct($_POST['id']);
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
<a href="index.php">HOME</a>
    <table >
    <thead>
    <th>Sl.No</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Action</th>
    </thead>
    <tbody>
   <?php foreach($products as $key => $product) {?> 
    <tr>
    <td><?= $key+1 ?></td>
    <td><?= $product['name']; ?></td>
    <td><?= $product['price']; ?></td>
    <td><?= $product['quantity']; ?></td>
    <td><a href="addProduct.php?id=<?= $product['id'] ?>"><button>Edit</button></a></td>
    <td><form method="post">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <button type="submit" name="delete">Delete</button>
    </form></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
</body>
</html>