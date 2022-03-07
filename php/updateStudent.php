<?php

    require_once('./CRUD.php');

    if($_POST['txtAluno'] == NULL || 
       $_POST['txtemail'] == NULL || 
       $_POST['txtCurso'] == NULL || 
       $_POST['txtid'] == NULL)
    {
        header('location: error.php?status=access-deny');
        die();
    }

    


    
    $pupil = new stdClass();
    $pupil->nome = $_POST['txtAluno'];
    $pupil->email = $_POST['txtemail'];
    $pupil->curso = $_POST['txtCurso'];
    $pupil->id = $_POST['txtid'];

       
    $register = fnUpdatePupil($pupil);







    if($register){
        header("location: formUpdateStudent.php?status=success&id={$_POST['txtid']}");
        die();
    }

    header("location: formUpdateStudent.php?status=fail&id={$_POST['txtid']}");
        die();
    