
<?php
   session_start();
  
  if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 2){
    header('location: ../home.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Perfil | CETPRO</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../Assets/css/bootstrap-1.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="../../Assets/css/custom.css">
        <link rel="shortcut icon" href="../../Assets/img/favicon.ico" />

		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
       <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="../../Assets/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js.map">
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
                            <a href="../docente-perfil/mostrar.php">Perfil</a>
                        </li>
                        <li>
                            <a href="../pages-logout.php">Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
                

                <li  class="">
                <a href="../docente/pages-docente.php" class="dashboard"><i class="material-icons">dashboard</i>
					      <span>Dashboard</span></a>
              </li>
              
                <li  class="">
                    <a href="../docente-estudiantes/mostrar.php"><i class="material-icons">sentiment_very_satisfied</i>
                    <span>Alumnos</span></a>
                </li>
                
                <li  class="">
                    <a href="../docente-notas/mostrar.php"><i class="material-icons">card_membership</i>
                    <span>Notas</span></a>
                </li>

                <li  class="">
                    <a href="../docente-general/mostrar.php"><i class="material-icons">dynamic_feed</i>
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
            <h4 class="page-title">Bienvenido&nbsp;<?php echo ucfirst($_SESSION['usuario']); ?></h4>                                 
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
                <a href="../docente-perfil/mostrar.php">
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


            <div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../admin/pages-admin.php">Home</a></li>
              
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="../../Assets/img/user.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo ucfirst($_SESSION['nombre']); ?></h4>
                      <p class="text-secondary mb-1"><?php echo ucfirst($_SESSION['correo']); ?></p>
                      
                     

                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nombre completo</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo ucfirst($_SESSION['nombre']); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Correo</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo ucfirst($_SESSION['correo']); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Usuario</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo ucfirst($_SESSION['usuario']); ?>
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
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
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

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  </body>
  
  </html>


