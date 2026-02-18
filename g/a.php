<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914041 สุดารัตน์ สานะสี (เก๋)</title>
</head>

<body>
<h1>66010914041 สุดารัตน์ สานะสี (เก๋)</h1>

<table border="1">
<tr>
	<td>Ordrer ID</td>
    <td>ชื่อสินค้า</td>
    <td>ประเภทสินค้า</td>
    <td>วันที่</td>
    <td>ประเทศ</td>
    <td>จำนวนเงิน</td>
    <td>รูปภาพ</td>
</tr>

<?php  
include_once("connectdb.php");
$sql = "SELECT * FROM popsupermarket";
$rs = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($rs)){
?>
<tr>
    <td><?php echo $data['p_order_id'];?></td>
    <td><?php echo $data['p_product_name'];?></td>
    <td><?php echo $data['p_category'];?></td>
    <td><?php echo $data['p_date'];?></td>
    <td><?php echo $data['p_country'];?></td>
    <td align="right"><?php echo number_format($data['p_amount'],0);?> </td>
    <td><img src="images/<?php echo $data['p_product_name'];?>.jpg" width="55"> </td>
</tr>
<?php } ?>
</table>

    
</body>
</html>
