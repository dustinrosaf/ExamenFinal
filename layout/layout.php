<?php




function printHeader($isPage = false){

  $directory = ($isPage) ? "../": ""; 

    $header = <<<EOF

    <html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Bienvenido!</title>

    

    <!-- Bootstrap core CSS -->
    <link href="{$directory}assets\bootstrap\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{$directory}assets\bootstrap\css\style.css" rel="stylesheet" type="text/css">
    
    
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="{$directory}indez.php" class="navbar-brand d-flex align-items-center">
               
      <strong>Home</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>


EOF;   

 echo $header;
}




function printFooter($isPage = false){

  $directory = ($isPage) ? "../": ""; 

    $header = <<<EOF
    
    <footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Bienvenido a su cuenta</p>
   
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>"assets\bootstrap\css\bootstrap.min.css"</script>
</body></html>


EOF;   

 echo $header;
}
?>