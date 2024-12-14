
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
        <title>Docentes | CETPRO</title>
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
       <style type="text/css">
           .hideMe {
    display: none;
}
       </style>

       
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

              <li  class="">
                    <a href="../careers/mostrar.php"><i class="material-icons">school</i>
                    <span>Cursos</span></a>
                </li>

                <li  class="active">
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
          <h2 class="ml-lg-2">Docentes</h2>
        </div>

        <div class="col-sm-12 p-0 d-flex justify-content-lg-end justify-content-center">
          <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
          <i class="material-icons">&#xE147;</i> </a>

          <a href="../teachers/plantilla.php" class="btn btn-danger">
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

        $sentencia = $connect->query("SELECT prof_period.id, period.numperi, usuarios.nombre, usuarios.apellidos, course.nomcur, count(*) AS conteo 
        FROM prof_period 
        INNER JOIN period ON period.idper = prof_period.period_idper 
        INNER JOIN course ON course.idcur = prof_period.course_idcur 
        INNER JOIN usuarios ON usuarios.id =  prof_period.usuarios_id;");

        $conteo = $sentencia->fetchObject()->conteo;
        $paginas = ceil($conteo / $productosPorPagina);
        $sentencia = $connect->prepare("SELECT prof_period.id, period.numperi, usuarios.nombre, usuarios.apellidos, course.nomcur 
        FROM prof_period 
        INNER JOIN period ON period.idper = prof_period.period_idper 
        INNER JOIN course ON course.idcur = prof_period.course_idcur 
        INNER JOIN usuarios ON usuarios.id =  prof_period.usuarios_id ORDER BY prof_period.id DESC LIMIT ? OFFSET ?");
        
        $sentencia->execute([$limit, $offset]);
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
       ?>
    <table class="table table-striped table-hover" >
      <thead>
        <tr>
            
          <th>Periodo</th>
          <th>Docente A Cargo</th>
          <th>Curso</th>
          <th>Editar</th>
        </tr>
      </thead>
   
    <tbody>
          <?php foreach($productos as $producto){ ?>
            <tr>
               <td><?php echo $producto->numperi ?></td>
               <td><?php echo $producto->nombre." ".$producto->apellidos?></td>
               <td><?php echo $producto->nomcur ?></td>
               <td>
                <form method='POST' action='<?php $_SERVER['PHP_SELF'] ?>'>
                <input type='hidden' name='idtea' value="<?php echo  $producto->idtea; ?>">
                <button name='editar' class='btn btn-warning text-white'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></button>
                </form>
                   
               </td>
   <!--            <td>
                <form  onsubmit="return confirm('Realmente desea eliminar el registro?');" method='POST' action='<?php $_SERVER['PHP_SELF'] ?>'>
                <input type='hidden' name='idtea' value="<?php echo  $producto->idtea; ?>">
                <button name='eliminar' class='btn btn-danger text-white' ><i class='material-icons'  title='Delete'>&#xE872;</i></button>
                </form> -->
               </td>

            </tr>
            <?php } ?>
      </tbody>
       </table>

       <nav aria-label="Page navigation example">
            <div class="row">
                <div class="col-xs-12 col-sm-6">

                    <p>Mostrando <?php echo $productosPorPagina ?> de <?php echo $conteo ?> profesores disponibles</p>
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

<!------------------------------ EDITAR ------------------------------>


<?php 

if (isset($_POST['editar'])){
$idtea = $_POST['idtea'];
$sql= "SELECT * FROM prof_period WHERE id = :id"; 
$stmt = $connect->prepare($sql);
$stmt->bindParam(':id', $idtea, PDO::PARAM_INT); 
$stmt->execute();
$obj = $stmt->fetchObject();
 
?>

    <div class="col-12 col-md-12"> 

<form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input value="<?php echo $obj->idtea;?>" name="idtea" type="hidden">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">DNI</label>
      <input value="<?php echo $obj->dnite;?>" maxlength="8"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="dnite" type="text" class="form-control"  placeholder="DNI">
    </div>
    <div class="form-group col-md-6">
      <label for="edad">Nombre y apellidos</label>
      <input value="<?php echo $obj->nomte;?>" name="nomte" type="text" placeholder="Nombre y apellidos" class="form-control">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Sexo</label>
      <select required name="sexte" class="form-control">
    <option value="<?php echo $obj->sexte;?>"><?php echo $obj->sexte;?></option>        
    <option value=""><< >></option>
    <option value="Masculino">Masculino</option>
    <option value="Femenino">Femenino</option>
    
    </select>
    </div>

     <div class="form-group col-md-6">
      <label for="nombres">Correo</label>
      <input value="<?php echo $obj->correo;?>" name="correo" type="email" class="form-control" placeholder="Correo">
    </div>
  </div>


    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Teléfono</label>
      <input value="<?php echo $obj->telet;?>" name="telet" maxlength="9"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" type="text" class="form-control" placeholder="Teléfono móvil">
    </div>

     <div class="form-group col-md-6">
      <label for="nombres">Usuario</label>
      <input value="<?php echo $obj->usuario;?>" name="usuario" type="text" class="form-control" placeholder="Usuario">
    </div>
  </div>


        <div class="form-group">
          <button name="actualizar" type="submit" class="btn btn-primary  btn-block">Actualizar Registro</button>
        </div>
</form>
    </div>  
<?php }?>




<!------------------------------REGISTRO NUEVO------------------------------>

<div id="addEmployeeModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myTitle" aria-hidden="true">
    <div class="modal-dialog">
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
                                    <select required name="txtcur" id="curso" class="form-control">
                                    <option value="" disabled="" selected="">Selecciona el Curso</option>
                                    <?php 
                                       $stmt = $connect->prepare('SELECT * FROM course');
                                        $stmt->execute();

                                        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                        {
                                            extract($row);
                                            ?>

                                            <option value="<?php echo $idcur; ?>"><?php echo $nomcur; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_lastname">Usuario</label>
                                    <div class="input-group">
                                      <select required name="txtusu" id="usuario" class="form-control">
                                       <option value="" disabled="" selected="">Selecciona el usuario</option>
                                       <?php 
                                       $stmt = $connect->prepare('SELECT * FROM usuarios');
                                        $stmt->execute();

                                        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                        {
                                            extract($row);
                                            ?>

                                            <option value="<?php echo $id; ?>"><?php echo $nombre." ".$apellidos; ?></option>
                                            
                                            <?php
                                        }
                                        ?>
                                      </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_lastname">Periodo</label>
                                    <div class="input-group">
                                      <select required name="txtperi" id="periodo" class="form-control">
                                       <option value="" disabled="" selected="">Selecciona el periodo</option>
                                       <?php 
                                       $stmt = $connect->prepare('SELECT * FROM period');
                                        $stmt->execute();

                                        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                        {
                                            extract($row);
                                            ?>

                                            <option value="<?php echo $idper; ?>"><?php echo $numperi; ?></option>
                                            <?php
                                        }
                                        ?>
                                      </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="modal-footer">
                    <button name='agregar' class="btn btn-primary">GUARDAR</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                </div>
                
            </div>
            <div class="modal-footer"></div>
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
    $period_idper=$_POST['txtperi'];
    $usuarios_id=$_POST['txtusu'];
    $course_idcur=$_POST['txtcur'];

  if(!isset($errMSG))
  {
   $stmt = $connect->prepare("INSERT INTO prof_period (usuarios_id, period_idper, course_idcur) VALUES (:usuarios_id, :period_idper, :course_idcur)");
   $stmt->bindParam(':usuarios_id',$usuarios_id);
   $stmt->bindParam(':period_idper',$period_idper);
   $stmt->bindParam(':course_idcur',$course_idcur);
   
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
if(isset($_POST['eliminar'])){
$consulta = "DELETE FROM `prof_period` WHERE `id`=:id";
$sql = $connect-> prepare($consulta);
$sql -> bindParam(':id', $id, PDO::PARAM_INT);
$id=trim($_POST['id']);
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
}
?>
  


  <?php
    
if(isset($_POST['actualizar'])){
///////////// Informacion enviada por el formulario /////////////
$idtea=trim($_POST['idtea']);
$dnite=trim($_POST['dnite']);
$nomte=trim($_POST['nomte']);
$sexte=trim($_POST['sexte']);
$correo=trim($_POST['correo']);
$telet=trim($_POST['telet']);
$usuario=trim($_POST['usuario']);

///////// Fin informacion enviada por el formulario /// 

////////////// Actualizar la tabla /////////
$consulta = "UPDATE teachers
SET `dnite`= :dnite, `nomte` = :nomte, `sexte` = :sexte, `correo` = :correo, `telet` = :telet,  `usuario` = :usuario WHERE `idtea` = :idtea";
$sql = $connect->prepare($consulta);
$sql->bindParam(':dnite',$dnite,PDO::PARAM_STR, 25);
$sql->bindParam(':nomte',$nomte,PDO::PARAM_STR, 25);
$sql->bindParam(':sexte',$sexte,PDO::PARAM_STR,25);
$sql->bindParam(':correo',$correo,PDO::PARAM_STR,25);
$sql->bindParam(':telet',$telet,PDO::PARAM_STR,25);
$sql->bindParam(':usuario',$usuario,PDO::PARAM_STR,25);
$sql->bindParam(':idtea',$idtea,PDO::PARAM_INT);

$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();
echo '<script type="text/javascript">
swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
            window.location = "mostrar";
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
  <script type="text/javascript">
      $("#btnEndStep1").click(function () {
    $("#step1").addClass('hideMe');
    $("#step2").removeClass('hideMe');
});
$("#btnEndStep2").click(function () {
    $("#step2").addClass('hideMe');
    $("#step3").removeClass('hideMe');
});
$("#btnEndStep3").click(function () {
    // Whatever your final validation and form submission requires
    $("#sampleModal").modal("hide");
});
  </script>
  </body>
  
  </html>


