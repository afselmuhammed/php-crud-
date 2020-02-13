<?php 
include_once "dbconfig.php";
$products = $crud->getProducts();
//var_dump($products); ?>

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
    <a href="productList.php"><button class="btn-success">Product List</button></a>
    </div>
    
                <div>
                <a href="addProduct.php"><button class="btn-danger">Add Product</button></a>
                </div>
            
            <table>
            <tr>
            <th>Sl.No</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            </tr>
            <tr> 
            <?php foreach($products as $product){?>
            <td>25</td>

            <td><?=$product['name']?></td>
            <td><?=$product['price']?></td>
            <td><?=$product['quantity']?></td>
            </tr>
            <?php }?>
            </table>

</body>
</html>