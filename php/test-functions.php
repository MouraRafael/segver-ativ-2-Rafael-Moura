<?php
require_once './CRUD.php';
########################################################
/*$pupil = new stdClass();
$pupil->nome = "João";
$pupil->email = "João@gmail.com";
$pupil->curso = "engenharia";


#insertStudents($pupil);
*/
#####################################
/*
foreach(fnProjectPupils() as $lupa){
    echo $lupa['id']."<br>";
    echo $lupa['nome']."<br>";
    echo $lupa['email']."<br>";
    echo $lupa['curso']."<br>";
    echo "<br>"."<br>"."<br>";
};*/


###################
#print_r(fnFindPupil(1));
####################################
/*
$estudante = new stdClass();
$estudante->nome = "João";
$estudante->email = "João@gmail.co";
$estudante->curso = "engenharia";
$estudante->id = "2";


echo fnUpdatePupil($estudante);

foreach(fnProjectPupils() as $lupa){
    echo $lupa['id']."<br>";
    echo $lupa['nome']."<br>";
    echo $lupa['email']."<br>";
    echo $lupa['curso']."<br>";
    echo "<br>"."<br>"."<br>";
};
*/

##############################

foreach(fnProjectPupils() as $lupa){
    echo $lupa->id."<br>";
    echo $lupa->nome."<br>";
    echo $lupa->email."<br>";
    echo $lupa->curso."<br>";
    echo "<br>"."<br>"."<br>";
};


echo fnDeletePupil(3);


foreach(fnProjectPupils() as $lupa){
    echo $lupa->id."<br>";
    echo $lupa->nome."<br>";
    echo $lupa->email."<br>";
    echo $lupa->curso."<br>";
    echo "<br>"."<br>"."<br>";
};

$achar = fnFindPupil(1);


var_dump($achar);