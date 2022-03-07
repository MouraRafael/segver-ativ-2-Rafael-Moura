<?php

    require_once('./CRUD.php');

    if($_POST['txtAluno'] == NULL || 
       $_POST['txtemail'] == NULL || 
       $_POST['txtCurso'] == NULL)
    {
        header('location: error.php?status=access-deny');
        die();
    }

    


    
    $pupil = new stdClass();
    $pupil->nome = $_POST['txtAluno'];
    $pupil->email = $_POST['txtemail'];
    $pupil->curso = $_POST['txtCurso'];
       
    $register = fnInsertStudents($pupil);







    if($register){
        header("location: formStudent.php?status=success");
        die();
    }

    header("location: formStudent.php?status=fail");
        die();
    