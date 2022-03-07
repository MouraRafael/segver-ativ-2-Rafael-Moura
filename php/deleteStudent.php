<?php

    require_once('./CRUD.php');

    if($_GET['id'] == NULL)
    {
        header('location: error.php?status=access-deny');
        die();
    }

    $result = fnDeletePupil($_GET['id']);

    if($result){
        header("location: listagem.php?status=success");
        die();
    }else {
        header("location: listagem.php?status=fail");
        die();
    }

    

    