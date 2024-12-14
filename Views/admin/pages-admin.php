<?php
   session_start();

  if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 1){
    header('location: ../home.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>CETPRO</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../Assets/css/bootstrap-1.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="../../Assets/css/custom.css">
        <link rel="stylesheet" href="../../Assets/css/card.css">
        <link rel="shortcut icon" href="../../Assets/img/favicon.ico" />
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
       <link href="../../Assets/DataTables/css/datatables.css" rel="stylesheet">
  </head>

    <body>
      <div class="wrapper">
        <div class="body-overlay"></div>
        <!-------------------------sidebar------------>
		      <!-- Sidebar  -->
          <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../../Assets/img/logo.png" class="img-fluid"/><span>CETPRO</span></h3>
            </div>
            <ul class="list-unstyled components">
            <li class="dropdown">
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          
          <span>BIENVENIDO <?php echo ucfirst($_SESSION['nombre']); ?></span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                        <li>
                            <a href="../profile/mostrar.php">Perfil</a>
                        </li>
                        <li>
                            <a href="../pages-logout.php">Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
                

			        <li  class="active">
                <a href="pages-admin.php" class="dashboard"><i class="material-icons">dashboard</i>
					      <span>Dashboard</span></a>
              </li>
              
              <li  class="">
                    <a href="../users/mostrar.php"><i class="material-icons">person_outline</i>
                    <span>Usuarios</span></a>
              </li>
		
              <li class="">
                <a href="../period/mostrar.php"><i class="material-icons">calendar_month</i>
                <span>Periodo escolar</span></a>
              </li>

              <li  class="">
                    <a href="../careers/mostrar.php"><i class="material-icons">school</i>
                    <span>Cursos</span></a>
                </li>

                <li  class="">
                    <a href="../teachers/mostrar.php"><i class="material-icons">psychology</i>
                    <span>Docentes - Curso</span></a>
                </li>

                <li  class="">
                    <a href="../students/mostrar.php"><i class="material-icons">sentiment_very_satisfied</i>
                    <span>Alumnos</span></a>
                </li>
                
                <li  class="">
                    <a href="../groups/mostrar.php"><i class="material-icons">card_membership</i>
                    <span>Notas</span></a>
                </li>

                <li  class="">
                    <a href="../subgrade/mostrar.php"><i class="material-icons">dynamic_feed</i>
                    <span>VISTA GENERAL</span></a>
                </li>
            </ul>
        </nav>
		
		
		<!--------page-content---------------->
		
		<div id="content">
		   
		   <!--top--navbar----design--------->
		   
		   <div class="top-navbar">
		      <div class="xp-topbar">
            <!-- Start XP Row -->
            <div class="row"> 
              <!-- Start XP Col -->
              <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                <div class="xp-menubar">
                  <span class="material-icons text-white">signal_cellular_alt</span>
                </div>
              </div> 
              <!-- End XP Col -->
              <div class=" col-md-5 col-lg-3 order-3 order-md-2 align-self-center">
              <div class="xp-breadcrumbbar">                                
                </div>
              </div>

              <!-- Start XP Col -->
              <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                <div class="xp-profilebar text-right">
              <nav class="navbar p-0">
                <ul class="nav navbar-nav flex-row ml-auto">   
                  <li class="dropdown nav-item active"></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown">
                    <img src="../../Assets/img/user.png" style="width:40px; border-radius:50%;"/>
                    </a>
                    <ul class="dropdown-menu small-menu">
                    <li>
                    <a href="../profile/mostrar.php">
                    <span class="material-icons">person_outline</span>Perfil
										</a>
                  </li>
                  <li>
                    <a href="../pages-logout.php"><span class="material-icons">logout</span>Cerrar sesión</a>
                  </li>
                </ul>
              </li>
             </ul>
            </nav>
          </div>
        </div>
      </div> 
    </div>
  </div>
<!---------------------------------------------------------------------------------------------------------------------------->


           <!--------main-content------------->

    <div class="main-content">

       <div class="container">
            <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
      
        <i class="material-icons">sentiment_very_satisfied</i>
          <?php require '../../Config/config.php'; ?>
         <?php 
        $sql = "SELECT COUNT(*) total FROM students";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();

         ?>
        <span class="count-numbers"><?php echo  $total; ?></span>
        <span class="count-name">Estudiantes</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="material-icons">psychology</i>
         <?php 
        $sql = "SELECT COUNT(*) total FROM usuarios";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();

         ?>
        <span class="count-numbers"><?php echo  $total; ?></span>
        <span class="count-name">Docentes</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="material-icons">supervisor_account</i>
         <?php 
        $sql = "SELECT COUNT(*) total FROM course";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();

         ?>
        <span class="count-numbers"><?php echo  $total; ?></span>
        <span class="count-name">Cursos</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="material-icons">person_outline</i>
         <?php 
        $sql = "SELECT COUNT(*) total FROM usuarios";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();

         ?>
        <span class="count-numbers"><?php echo  $total; ?></span>
        <span class="count-name">Administrador</span>
      </div>
    </div>
  </div>
 <div class="row">

  <div class="col-sm-6 mb-3 mb-md-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo ucfirst($_SESSION['nombre']); ?></h5>
        <p class="card-text">Nombre de usuario: <?php echo ucfirst($_SESSION['usuario']); ?></p>
        <p class="card-text">Correo: <?php echo ucfirst($_SESSION['correo']); ?></p>
        <p class="card-text">Rol: ADMIN</p>
<a href="../profile/mostrar.php" class="btn btn-primary">Configuración de la cuenta</a>
<a href="../pages-logout.php" class="btn btn-primary">Cerrar Sesión</a>


      </div>
    </div>
  </div>

 
         

  
                   

    </div>
  </div>

  

</div>
        </div>

    </div>
		   
</div>
</div>
<!----------html code compleate----------->
  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="../../Assets/js/jquery-3.3.1.slim.min.js"></script>
   <script src="../../Assets/js/popper.min.js"></script>
   <script src="../../Assets/js/bootstrap-1.min.js"></script>
   <script src="../../Assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../Assets/DataTables/js/datatables.min.js"></script>

    <script type="text/javascript">
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
</script>
  
<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
  
  </body>
  
  </html>


