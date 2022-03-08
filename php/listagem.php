<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Listagem de alunos - Instituto de Educação Organizações Tabajara</title>
</head>
<body>
    <header>
        <?php
        include_once './navbar.php';
        require_once './CRUD.php';
        include_once './toast.php';
        ?>

    </header>

    <section class="container-md mb-5 mt-5">
    
  <div class="container-fluid">
    <form class="d-flex " method="GET">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busca">
      <button class="btn btn-outline-success" type="submit">Busca</button>
    </form>
  </div>

<?php 
if(!empty($_GET['busca'])): ?>
<div class="container">
        <table class="table table-stipped">
            <thead>
                <th>#</th>
                <th>Nome</th>
                <th>e-mail</th>
                <th>Curso</th>
                <th>editar</th>
            </thead>
            <tbody><?php foreach (fnFindPupilName($_GET['busca']) as $aluno): ?>
                <tr>
                    <td class="text-primary"><?= $aluno->id ?></td>
                    <td class="text-primary"><?= $aluno->nome ?></td>
                    <td class="text-primary"><?= $aluno->email ?></td>
                    <td class="text-primary"><?= $aluno->curso ?></td>
                    <td class="text-primary">
                        <a href="formUpdateStudent.php?id=<?= $aluno->id?>" target="_blank">
                            <span style="color: green">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </span>
                        </a>
                        <a href="deleteStudent.php?id=<?= $aluno->id ?>" onclick="return confirm('Deseja realmente apagar o aluno do sistema?')" target="_blank">
                            <i class="fa-solid fa-eraser"></i>
                        </a>
                        
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
<?php endif; ?>


    </section><!--fimbusca-->




    <section>
    <div class="container">
        <table class="table table-stipped">
            <thead>
                <th>#</th>
                <th>Nome</th>
                <th>e-mail</th>
                <th>Curso</th>
                <th>editar</th>
            </thead>
            <tbody><?php foreach (fnProjectPupils() as $aluno): ?>
                <tr>
                    <td><?= $aluno->id ?></td>
                    <td><?= $aluno->nome ?></td>
                    <td><?= $aluno->email ?></td>
                    <td><?= $aluno->curso ?></td>
                    <td>
                        <a href="formUpdateStudent.php?id=<?= $aluno->id?>" target="_blank">
                            <span style="color: green">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </span>
                        </a>
                        <a href="deleteStudent.php?id=<?= $aluno->id ?>" onclick="return confirm('Deseja realmente apagar o aluno do sistema?')" target="_blank">
                            <i class="fa-solid fa-eraser"></i>
                        </a>
                        
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    </section>











</body>
</html>