<?php

require_once './connection.php';

function fnInsertStudents($pupil){
    try{
        $con = getConnection();
        
        $stmt = $con->prepare("INSERT into aluno (nome,email,curso) VALUES (:nome,:email,:curso)");

        $stmt->bindParam(":nome",$pupil->nome);
        $stmt->bindParam(":email",$pupil->email);
        $stmt->bindParam(":curso",$pupil->curso);

        if($stmt->execute()){
            return "Cadastro bem sucedido";
        }
    }catch(PDOException $error){
        echo "falha ao cadastrar o aluno. Erro:{$error->getMessage()}";
    }finally{
        unset($con);
        unset($stmt);
    }

}


/*--------------------------------------------------------*/

function fnProjectPupils(){
    
    try{
        $con = getConnection();
        $stmt = $con->query("SELECT id,nome,email,curso FROM aluno");


        $listpupil = array();
        
        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
            array_push($listpupil,$row);
        }

        return $listpupil;
    }catch(PDOExeption $error){
        echo "Projection Error. Could not show list of students. Error: {$error->getMessage()}";
    }finally{
        unset($con);
        unset($stmt);
    }

}
/*----------------------------------------------------------- */

function fnFindPupil($pupil){
    
    try{
        $con = getConnection();

        # OR nome LIKE %:id%;
        $stmt = $con->prepare("SELECT id,nome,email,curso FROM aluno WHERE id = :id");
        $stmt->bindParam(":id",$pupil);

        $result = array();

        if($stmt->execute()) {
            if($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_OBJ);
            }
        }
        return $row;
        
    }
    catch(PDOExeption $error){
        echo "Projection Error. Could not show student. Error: {$error->getMessage()}";
    }finally{
        unset($con);
        unset($stmt);
    }

}


function fnFindPupilName($pupil){
    
    try{
        $con = getConnection();

        # OR nome LIKE %:id%;
        $stmt = $con->prepare("SELECT id,nome,email,curso FROM aluno WHERE nome LIKE :nome OR id = :nome");
        if(is_numeric($pupil)){
        $stmt->bindParam(":nome",$pupil);
        }else{
            $stmt->bindValue(":nome","%{$pupil}%");
        }

        $result = array();

        if($stmt->execute()) {
            if($stmt->rowCount() > 0) {
                while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                    array_push($result,$row);
                }
            }
        }
        return $result;
        
    }
    catch(PDOExeption $error){
        echo "Erro de projeção. Não pôde mostrar estudante. Error: {$error->getMessage()}";
    }finally{
        unset($con);
        unset($stmt);
    }

}




















/*----------------------------------------------------------- */

function fnUpdatePupil($pupil){

    try{
        $con = getConnection();

        $stmt = $con->prepare("UPDATE aluno SET nome = :nome, email = :email, curso = :curso WHERE id = :id");
        $stmt->bindParam(":nome",$pupil->nome);
        $stmt->bindParam(":email",$pupil->email);
        $stmt->bindParam(":curso",$pupil->curso);
        $stmt->bindParam(":id",$pupil->id);

        if($stmt->execute()){
            return "Cadastro efetuado com sucesso";
        }
    }
    catch(PDOException $error){
        echo "Falha na atualização de cadastro. Erro:{$error->getMessage()}";
    }
    finally{
        unset($con);
        unset($stmt);
    }

    
}

/*----------------------------------------------------------- */

function fnDeletePupil($pupil){

    try{
        $con = getConnection();

        $stmt = $con->prepare("DELETE FROM aluno WHERE id = :id");
        $stmt->bindParam(":id",$pupil);

        if($stmt->execute()){
            return "Registro de aluno deletado com sucesso";
        }
    }
    catch(PDOException $error){
        echo "Falha em deletar. Erro:{$error->getMessage()}";
    }
    finally{
        unset($con);
        unset($stmt);
    }

    
}


/*----------------------------------------------------------- */

