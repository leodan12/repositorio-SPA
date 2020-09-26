<?php
$con=new mysqli("localhost","root","","translate");
if($res=$con->query("select en from palabras where es='".$_GET['español']."'"))
{
    while($fila=$res->fetch_row())
    {
        echo $fila[0];
    }
}
$con->close();
?>   
