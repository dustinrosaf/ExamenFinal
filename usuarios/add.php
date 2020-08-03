<?php

include '../layout/layout.php';
include '../helpers/utilities.php';

session_start();

if(isset($_POST['title']) && isset($_POST['content'])){

    $_SESSION['title'] = isset($_SESSION['title']) ? $_SESSION['title'] : array();

    $title = $_SESSION['title'];
    
    $titleId = 1;

    if(!empty($title)){
        $lastElement = getLastElement($title);
        $titleId = $lastElement['id'] + 1;
        }

    array_push($title , ['id'=>$titleId ,'title' => $_POST['title'],'content'=> $_POST['content']]); 

    $_SESSION['title'] = $title;

   header("Location: ../index.php");
   exit();


}

?>

<?php printHeader(true); ?>


<main role="main">


<div class="card" style="width: 18rem;">
  <div class="card-header bg-dark text-light">
  <a href= "../index.php" class="btn btn-warning">Volver Atras</a>
  Crear Nueva Publicacion
  </div>
   
  <div class="card-body">
  <form action="add.php" method="POST">
  <div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="content">Contenido</label>
    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
  </div>

   <button type="submit" class="btm btn-success">Publicar</button>
</form>
  </div>
</div>

  
</main>

<?php printFooter(); ?>

