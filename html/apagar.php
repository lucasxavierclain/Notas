<?php
    include("conectar.php");

    $id= intval($_GET['id']);
    $delete="delete from nota where idnota='$id'";
    $sql_querry=$conn->query($delete) or die ($conn->error);

    if($sql_querry){
        echo "<script> location.href='index.php';</script>";
    }
    else{
        echo "<script> alert('Não foi possível apagar a nota') location.href='index.php';</script>";
    }


?>