<?php

include '../layout/layout.php';
include '../helpers/utilities.php';

session_start();

if(isset($_GET['id'])){

  $titleId = $_GET['id'];

  $_SESSION['title'] = isset($_SESSION['title']) ? $_SESSION['title'] : array();

  $title = $_SESSION['title'];  

  $element = searchProperty($title,'id',$titleId[0]);
  $elementIndex = getIndexElement($title,'id',$titleId);



  if(isset($_POST['title']) && isset($_POST['content'])){

    $updateTitle = ['id' =>$titleId ,'title'=> $_POST['title'],'content' => $_POST['content']];

    $title[$elementIndex] = $updateTitle;

    $titleId = 1;

    $_SESSION['title'] = $title;

   header("Location: ../index.php");
   exit();


}

}

else{

  header("Location: ../index.php");
  exit();
}



?>

<?php printHeader(true); ?>


<main role="main">


<div class="card" style="width: 18rem;">
  <div class="card-header bg-dark text-light">
  <a href= "../index.php" class="btn btn-warning">Volver Atras</a> Crear Nueva Publicacion
  </div>
   
  <div class="card-body">
  <form action="edit.php?id=<?php echo $element['id']?>" method="POST">
  <div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" value= "<?php echo $element['title']?>" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="content">Contenido</label>
    <textarea value= "<?php echo $element['content'] ?>" class="form-control" id="content" name="content" rows="3"></textarea>
  </div>

   <button type="submit" class="btm btn-success">Publicar</button>
</form>
  </div>
</div>

  
</main>

<?php printFooter(); ?>

