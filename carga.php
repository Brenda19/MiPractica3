<!DOCTYPE HTML>
<?php

$cant =$_POST['cant'];
$Descripcion =$_POST['Descripcion'];
$Precio =$_POST['Precio'];


$cant2 =$_POST['cant2'];
$Descripcion2 =$_POST['Descripcion2'];
$Precio2 =$_POST['Precio2'];


$cant3 =$_POST['cant3'];
$Descripcion3 =$_POST['Descripcion3'];
$Precio3 =$_POST['Precio3'];


?>


<html>

<body>
<table>

<tr>
<th> Cantidad</th>
<th> Descripcion</th>
<th> Precio Unitario</th>
</tr>

<tr>
<th>
<?php echo $cant;?>
</th>
<th>
<?php echo $Descripcion;?>
</th>
<th>
<?php $r = $cant * $Precio;
echo  $r;
?>
</th>
</tr>

<tr>
<th>
<?php echo $cant2;?>
</th>
<th>
<?php echo $Descripcion2;?>
</th>
<th>
<?php $r2 = $cant2 * $Precio2;
echo  $r2;
?>
</th>
</tr>


<tr>
<th>
<?php echo $cant3;?>
</th>
<th>
<?php echo $Descripcion3;?>
</th>
<th>
<?php $r3 = $cant3 * $Precio3;
echo  $r3;
?>
</th>
</tr>

<tr>
<th>
</th>
<th>
Subtotal
</th>

<th>
<?php
$Subtotal = $r + $r2 + $r3;
echo $Subtotal;
?>
</th>
</tr>

<tr>
<th>
</th>
<th>
IVA
</th>

<th>
<?php
$IVA = $Subtotal * .16;
echo $IVA;
?>
</th>
</tr>

<tr>
<th>
</th>
<th>
Total
</th>

<th>
<?php
$Total = $IVA + $Subtotal;
echo $Total;
?>
</th>
</tr>

</table>
</body>
</html>


