<?php
    include('conectar.php');
    if(isset($_POST['titulo'])&& isset($_POST['autor'])&&  isset($_POST['mensagem'])){

        $titulo=$_POST['titulo'];
        $autor=$_POST['autor'];
        $mensagem=$_POST['mensagem'];

        $sql="insert into nota (titulo,autor,mensagem) values('$titulo','$autor','$mensagem')";
        $result=$conn->query($sql);
        
        echo "<script> alert('Nota cadastrada!'); location.href='../index.php?p=inicial';
        </script>";
    }     
   


?>