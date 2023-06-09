<?php
    include("../config/connectionDB.php");
    $id=$_GET['userId'];
    $sql="DELETE FROM users WHERE id='$id'";
    if($conn->query($sql)===TRUE){
        if($conn->affected_rows>0){
            echo"<script>alert('user has been delet')</script>";
            //header es un redireccionamiento automatico
            //refresh:0 no ayuda a redireccionar el tiempo en que se demora en ir a la pestaña
            header('refresh:0; url=http://127.0.0.1/pets/back/src/list_users.php');
        }else{
            echo"<script>alert('user has not been')</script>";
            header('refresh:0; url=http://127.0.0.1/pets/back/src/list_users.php');
        }
    }else{
        echo"ERROR: ".$conn->error;
    }
?>