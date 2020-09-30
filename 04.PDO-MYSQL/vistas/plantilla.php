<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JAVASCRIPT BOOTSRAP -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!--JAVASCRIPT FONTAWESOME -->
    <script src="https://kit.fontawesome.com/3dee7bc093.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
         <h3 class="text-center py-3">LOGO</h3>
     
    </div>
    
    <div class="container-fluid bg-light">
           <div class="container">
              <ul class="nav nav-justified py-2 nav-pills">
               <?php
                  $test;
                      if(isset($_GET['pagina'])) {
                            $test = $_GET['pagina'];
                        } else {
                            $test = 'registro'; 
                        }
                   #echo $test;
                 ?>
                   <li class="nav-item"> 
                   <a class="nav-link <?php  if($test == 'registro'):?> active<?php endif ?>" href="<?php  if($test != 'registro'):?>index.php?pagina=registro <?php else: ?>#<?php endif ?>"> Registro</a>
                   </li>
                     <li class="nav-item"> 
                   <a class="nav-link <?php  if($test == 'ingreso'):?> active<?php endif ?>" href="<?php  if($test != 'ingreso'):?>index.php?pagina=ingreso <?php else: ?>#<?php endif ?>"> Ingreso</a>
                   </li>
                     <li class="nav-item"> 
                   <a class="nav-link <?php  if($test == 'inicio'):?> active<?php endif ?>" href="<?php  if($test != 'inicio'):?>index.php?pagina=inicio <?php else: ?>#<?php endif ?>"> Inicio</a>
                   </li>
                     <li class="nav-item"> 
                   <a class="nav-link <?php  if($test == 'salir'):?> active<?php endif ?>" href="<?php  if($test != 'salir'):?>index.php?pagina=salir <?php else: ?>#<?php endif ?>"> Salir</a>
                   </li>
       
                 
                  <!--GET: $_GET ["Variable"] Variables que se pasan como parámetros Vía URL (tambien conocido como cadena de consulta a través de la URL)
                  Cuando es la primera variable se separa con ?
                  las que siguen a continuacion se separan con & -->
                  <!-- <li class="nav-item">
                      <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                  </li> -->
              </ul>
               
           </div>
        
    </div>
    
    <!-- CONTENIDO -->
        <div class="">
           <div class="container py-5">
           <?php
               #ISSET: isset() Determina si una variable esta definida y no es NULL
               
               if(isset($_GET["pagina"])){
                   
                   if($_GET["pagina"] == "registro" || 
                      $_GET["pagina"] == "ingreso" || 
                      $_GET["pagina"] == "inicio" || 
                      $_GET["pagina"] == "salir"){
                       
                    include "paginas/".$_GET["pagina"].".php";
                   }
                   
                   else include "paginas/error404.php";
               }
                      
               else include "paginas/registro.php";
               
               
               ?>
            </div>
    </div>
    
</body>
</html>