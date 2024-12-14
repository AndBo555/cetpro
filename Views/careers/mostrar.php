
<?php
   session_start();
  
  if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 1){
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
        <title>Cursos | CETPRO</title>
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
                            <a href="../profile/mostrar.php">Perfil</a>
                        </li>
                        <li>
                            <a href="../pages-logout.php">Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
                

			        <li  class="">
                <a href="../admin/pages-admin.php" class="dashboard"><i class="material-icons">dashboard</i>
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

              <li  class="active">
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
              <div class="row">
                
                <div class="col-md-12">
                <div class="table-wrapper">
                <div class="table-title">
                  <div class="row">
                    <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
                      <h2 class="ml-lg-2">Cursos</h2>
                    </div>

                <div class="col-sm-12 p-0 d-flex justify-content-lg-end justify-content-center">
                  <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                  <i class="material-icons">&#xE147;</i> </a>

                  <a href="plantilla.php" class="btn btn-danger">
                  <i class="material-icons">print</i> </a>
         
                </div>
              </div>
            </div>
       <?php  
        require '../../Config/config.php';
        $productosPorPagina = 5;
        $pagina = 1;
            if (isset($_GET["pagina"])) {
                $pagina = $_GET["pagina"];
                }
        $limit = $productosPorPagina;
        $offset = ($pagina - 1) * $productosPorPagina;

        $sentencia = $connect->query("SELECT course.idcur, course.nomcur, count(*) AS conteo FROM course;");
    $conteo = $sentencia->fetchObject()->conteo;
    $paginas = ceil($conteo / $productosPorPagina);
    $sentencia = $connect->prepare("SELECT course.idcur, course.nomcur FROM course ORDER BY course.idcur DESC LIMIT ? OFFSET ?");
    $sentencia->execute([$limit, $offset]);
    $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        ?>
    <table class="table table-striped table-hover" id="myTable">
      <thead>
        <tr>
          <th>Curso</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($productos as $producto){ ?>
            <tr>
               <td><?php echo $producto->nomcur ?></td>
               <td>
              <form method='POST' action='<?php $_SERVER['PHP_SELF'] ?>'>
              <input type='hidden' name='idcur' value="<?php echo  $producto->idcur; ?>">
              <button name='editar' class='btn btn-warning text-white'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></button>
              </form>
                   
               </td>
               <td>
              <form  onsubmit="return confirm('Realmente desea eliminar el registro?');" method='POST' action='<?php $_SERVER['PHP_SELF'] ?>'>
              <input type='hidden' name='idcur' value="<?php echo  $producto->idcur; ?>">
              <button name='eliminar' class='btn btn-danger text-white' ><i class='material-icons'  title='Delete'>&#xE872;</i></button>
              </form>
               </td>

            </tr>
            <?php } ?>
      </tbody>
     
    </table>

    <nav aria-label="Page navigation example">
            <div class="row">
                <div class="col-xs-12 col-sm-6">

                    <p>Mostrando <?php echo $productosPorPagina ?> de <?php echo $conteo ?> cursos disponibles</p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p>Página <?php echo $pagina ?> de <?php echo $paginas ?> </p>
                </div>
            </div>
            <ul class="pagination">
                <!-- Si la página actual es mayor a uno, mostramos el botón para ir una página atrás -->
                <?php if ($pagina > 1) { ?>
                    <li>
                        <a href="./mostrar.php?pagina=<?php echo $pagina - 1 ?>">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                <?php } ?>

                <!-- Mostramos enlaces para ir a todas las páginas. Es un simple ciclo for-->
                <?php for ($x = 1; $x <= $paginas; $x++) { ?>
                    <li class="<?php if ($x == $pagina) echo "active" ?>">
                        <a href="./mostrar.php?pagina=<?php echo $x ?>">
                            <?php echo $x ?></a>
                    </li>
                <?php } ?>
                <!-- Si la página actual es menor al total de páginas, mostramos un botón para ir una página adelante -->
                <?php if ($pagina < $paginas) { ?>
                    <li>
                        <a href="./mostrar.php?pagina=<?php echo $pagina + 1 ?>">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>

  </div>
</div>

<?php 

if (isset($_POST['editar'])){
$idcur = $_POST['idcur'];
$sql= "SELECT * FROM course WHERE idcur = :idcur"; 
$stmt = $connect->prepare($sql);
$stmt->bindParam(':idcur', $idcur, PDO::PARAM_INT); 
$stmt->execute();
$obj = $stmt->fetchObject();
 
?>

    <div class="col-12 col-md-12"> 
      <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
          <input value="<?php echo $obj->idcur;?>" name="idcur" type="hidden">
        <div class="form-row">

        <div class="form-group col-md-6">
          <label for="edad">Curso </label>
          <input value="<?php echo $obj->nomcur;?>" name="nomcur" type="text" class="form-control">
        </div>
      </div>

        <div class="form-group">
          <button name="actualizar" type="submit" class="btn btn-primary  btn-block">Actualizar Registro</button>
        </div>
</form>
    </div>  
<?php }?>

<!-- add Modal HTML -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form  enctype="multipart/form-data" method="POST"  autocomplete="off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="fa fa-user mr-1"></i>NUEVO
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_firstname">Curso</label>
                                    <div class="input-group">
                                        <input type="text"  name="txtnomcur" required class="form-control" placeholder="Nombre del curso" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                        <button  name='agregar' class="btn btn-primary">GUARDAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<!-- Edit Modal HTML -->
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
<?php  

 if(isset($_POST['agregar']))
 {
  //$username = $_POST['user_name'];// user name
  //$userjob = $_POST['user_job'];// user email


    $nomcur=$_POST['txtnomcur'];

  
  if(empty($nomcur)){
   $errMSG = "Please enter your name.";
  }


  if(!isset($errMSG))
  {
   $stmt = $connect->prepare("INSERT INTO course(nomcur) VALUES(:nomcur)");
   $stmt->bindParam(':nomcur',$nomcur);
   
   if($stmt->execute())
   {
    echo '<script type="text/javascript">
swal("¡Registrado!", "Agregado correctamente", "success").then(function() {
            window.location = "mostrar.php";
        });
        </script>';
   }
   else
   {
    $errMSG = "error while inserting....";
   }

  }
 }
?>

<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeOut(1500);
    },3000);

});
</script>




<?php 

////////////// Eliminar la tabla /////////
if(isset($_POST['eliminar'])){
$consulta = "DELETE FROM `course` WHERE `idcur`=:idcur";
$sql = $connect-> prepare($consulta);
$sql -> bindParam(':idcur', $idcur, PDO::PARAM_INT);
$idcur=trim($_POST['idcur']);
$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();
echo '<script type="text/javascript">
swal("¡Eliminado!", "Eliminado correctamente", "success").then(function() {
            window.location = "mostrar.php";
        });
        </script>';
}
else{
    echo "<div class='content alert alert-danger'> No se pudo eliminar el registro  </div>";

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>
  


  <?php
    
if(isset($_POST['actualizar'])){
$idcur=trim($_POST['idcur']);    
$nomcur=trim($_POST['nomcur']);


////////////// Actualizar la tabla /////////
$consulta = "UPDATE course
SET `nomcur` = :nomcur WHERE `idcur` = :idcur";
$sql = $connect->prepare($consulta);
$sql->bindParam(':nomcur',$nomcur,PDO::PARAM_STR, 25);
$sql->bindParam(':idcur',$idcur,PDO::PARAM_INT);

$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();
echo '<script type="text/javascript">
swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
            window.location = "mostrar.php";
        });
        </script>';
}
else{
    echo "<div class='content alert alert-danger'> No se pudo actulizar el registro  </div>";

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>
<script>
   function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
  </script>
  <script src="../../Assets/js/periodo.js"></script>
  </body>
  
  </html>


