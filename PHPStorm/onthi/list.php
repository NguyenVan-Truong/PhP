<?php
require_once "connect.php";
$sql="select pr.*,br.brand_name from brands br, products pr where br.brand_id=pr.brand_id";
$result=$conn->query($sql)->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>product id</th>
        <th>product name</th>
        <th>image</th>
        <th>price</th>
        <th>quantity</th>
        <th>description</th>
        <th>brand id</th>
        <th>brand name</th>
        <th>thao tac</th>
    </tr>

    <?php
    foreach ($result as $value){
        ?>
        <tr>
            <td><?php echo $value['product_id']?></td>
            <td><?php echo $value['product_name']?></td>
            <td><img style="width: 100px" src="<?php echo $value['image'] ?>" alt=""></td>
            <td><?php echo $value['price']?></td>
            <td><?php echo $value['quantity']?></td>
            <td><?php echo $value['description']?></td>
            <td><?php echo $value['brand_id']?></td>
            <td><?php echo $value['brand_name']?></td>
            <td>
                <a href="add.php">them</a>
                <a href="edit.php?id=<?php echo $value['product_id']?>">sua</a>
                <a href="javascript:confirmdelete('delete.php')">xoa</a>
            </td>
        </tr>
        <?php
    }
    ?>

</table>
<script>
    function confirmdelete(url){
        if (confirm("ban co muon xoa?")){
            document.location=url;
        }
    }
</script>
</body>
</html>