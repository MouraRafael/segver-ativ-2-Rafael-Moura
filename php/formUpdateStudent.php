<?php
    require_once './CRUD.php';

    if($_GET['id'] != NULL){
        $aluno = fnFindPupil($_GET['id']);
    }    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Instituto de Educação Organizações Tabajara</title>
</head>
<body>
    <header>
        <?php
        include_once './navbar.php';
        include_once './toast.php';
        ?>
    </header>
    <div class="container col-6">
        <fieldset>
            <legend>Atualização de Dados de Estudantes</legend>
            <form action="./updateStudent.php" method="post">
                <div class="form-group">
                    <label for="nome" class="form-label">Nome do aluno</label>
                    <input value ="<?= $aluno['0']['nome']?>" class="form-control" type="text" name="txtAluno" id="nome" placeholeder="informe o nome do aluno" required>
                </div>
                
                
                <div class="form-group">
                    <label for="email_id" class="form-label">e-mail do aluno</label>
                    <input value ="<?= $aluno['0']['email']?>" class="form-control" type="text" name="txtemail" id="email_id" placeholeder="Digite o email do aluno" required>
                </div>
                
                
                <div class="form-group">
                    <label for="curso_id" class="form-label">Curso a matricular</label>
                    <input value ="<?= $aluno['0']['curso']?>" class="form-control" type="text" name="txtCurso" id="curso_id" placeholeder="informeo curso em que será matriculado" required>
                </div>
                                
                <button value ="<?= $aluno['0']['id']?>" name="txtid" class="btn btn-dark my-2" type="submit">Cadastrar</button>
            </form>
        </fieldset>
    </div>







</body>
</html>