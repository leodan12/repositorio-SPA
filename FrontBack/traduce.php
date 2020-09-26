<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Document</title></head>
<body>
<?php
$con=new mysqli("localhost","root","","translate");
if($res=$con->query("select en from palabras where es='".$_GET['español']."'"))
while($fila=$res->fetch_row())
    echo $fila[0];
$con->close();
?>    
</body></html>
