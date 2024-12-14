
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
        <title>Sección | CEPTRO</title>
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
                
                <li  class="active">
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
          <h2 class="ml-lg-2">Notas</h2>
        </div>

        <div class="col-sm-12 p-0 d-flex justify-content-lg-end justify-content-center">
          <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
          <i class="material-icons">&#xE147;</i> </a>

          <a href="#" class="btn btn-danger">
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

        $sentencia = $connect->query("SELECT detalle_notas.id, students.nomstu, 
        notas.nota1, notas.nota2, notas.nota3, notas.nota4, notas.nota5,
        count(*) AS conteo FROM detalle_notas 
        INNER JOIN students ON students.idstu = detalle_notas.students_idstu
        INNER JOIN notas ON notas.id = detalle_notas.notas_id;");

        $conteo = $sentencia->fetchObject()->conteo;
        $paginas = ceil($conteo / $productosPorPagina);
        $sentencia = $connect->prepare("SELECT detalle_notas.id, students.nomstu, 
        notas.nota1, notas.nota2, notas.nota3, notas.nota4, notas.nota5
        FROM detalle_notas 
        INNER JOIN students ON students.idstu = detalle_notas.students_idstu
        INNER JOIN notas ON notas.id = detalle_notas.notas_id LIMIT ? OFFSET ?");

        $sentencia->execute([$limit, $offset]);
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
      ?>

    <table class="table table-striped table-hover">
      <thead>
        <tr>
        
          <th>Nombre</th>
          <th>Nota 1</th>
          <th>Nota 2</th>
          <th>Nota 3</th>
          <th>Nota 4</th>
          <th>Nota 5</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($productos as $persona){ ?>
            <tr>
              <td><?php echo $persona->nomstu ?></td>
               <td><?php echo $persona->nota1 ?></td>
               <td><?php echo $persona->nota2 ?></td>
               <td><?php echo $persona->nota3 ?></td>
               <td><?php echo $persona->nota4 ?></td>
               <td><?php echo $persona->nota5 ?></td>

               <td>
                                               
               <form method='POST' action='<?php $_SERVER['PHP_SELF'] ?>'>
                <input type='hidden' name='idsec' value="<?php echo  $persona->idsec; ?>">
                <button name='editar' class='btn btn-warning text-white'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></button>
                </form>
                   
               </td>
               <td>
                <form  onsubmit="return confirm('Realmente desea eliminar el registro?');" method='POST' action='<?php $_SERVER['PHP_SELF'] ?>'>
                <input type='hidden' name='idsec' value="<?php echo  $persona->idsec; ?>">
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

                    <p>Mostrando <?php echo $productosPorPagina ?> de <?php echo $conteo ?> secciones disponibles</p>
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
$idsec = $_POST['idsec'];
$sql= "SELECT notas.id, notas.nota1, notas.nota2, notas.nota3, notas.nota4, teachers.nota5 FROM  notas INNER JOIN subgrade ON seccion.idsub =subgrade.idsub INNER JOIN teachers ON seccion.idtea = teachers.idtea INNER JOIN course ON seccion.idcur = course.idcur WHERE id = :id"; 
$stmt = $connect->prepare($sql);
$stmt->bindParam(':idsec', $idsec, PDO::PARAM_INT); 
$stmt->execute();
$obj = $stmt->fetchObject();
 
?>

    <div class="col-12 col-md-12"> 

<form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input value="<?php echo $obj->idsec;?>" name="idsec" type="hidden">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Sección</label>

      <select required name="nomsec" class="form-control">
    <option value="<?php echo $obj->nomsec;?>"><?php echo $obj->nomsec;?></option>        
    <option value=""><< >></option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="E">E</option>
    </select>
      
    </div>
    <div class="form-group col-md-6">
      <label for="edad">Docente </label>
      <select required name="idtea" class="form-control">
    <option value="<?php echo $obj->idtea;?>"><?php echo $obj->nomte;?></option>        
    <option value=""><< >></option>

    <?php 
    $stmt = $connect->prepare('SELECT * FROM teachers');
    $stmt->execute();

while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $idtea; ?>"><?php echo $nomte; ?></option>
            <?php
        }
        ?>
     ?>
 
    
    </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Capacidad</label>

      <input maxlength="2"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" value="<?php echo $obj->capa;?>" name="capa" type="text" class="form-control">
      
    </div>
    
  </div>

        <div class="form-group">
          <button name="actualizar" type="submit" class="btn btn-primary  btn-block">Actualizar Registro</button>
        </div>
</form>
    </div>  
<?php }?>

<!----------------------- REGISTRAR NUEVO ----------------------->
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
                                    <label for="modal_contact_firstname">Periodo</label>
                                    <div class="input-group">
                                      <select required name="txtperi" id="periodo" class="form-control" onchange="enableDisableCodigo();" >
                                      <option value="0">--Selecciona el Periodo--</option>
                                    <?php 
                                       $stmt = $connect->prepare('SELECT idper, numperi FROM period');
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
                     
                            <div class="col-sm-6" >
                                <div class="form-group">
                                    <label for="modal_contact_lastname">Curso</label>
                                    <div class="input-group">
                                    <!-- <select name="txtcur" id="curso" class="form-control" disabled> 
                                      <option value=""> --Selecciona el Curso--</option>
                                      
                                    
                                     </select> -->
                                     <select id="curso" name="txtcur" class="form-control" disabled>
                                      <option value="" disabled selected>--Selecciona una opción--</option>
                                  </select>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">    
                
                            <div class="col-sm-6"  >
                                <div class="form-group">
                                    <label for="modal_contact_lastname">Estudiante</label>
                                    <div class="input-group" >
                                    <select required name="txtcur" id="estudiante" class="form-control" >
                                    <option value="" >--Selecciona el Estudiante--</option>
                                    <?php 
                                       $stmt = $connect->prepare('SELECT idstu, nomstu FROM students');
                                        $stmt->execute();

                                        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                        {
                                            extract($row);
                                            ?>

                                            <option value="<?php echo $idstu; ?>"><?php echo $nomstu; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                            </div>




                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_firstname">Nota 1</label>
                                    <div class="input-group">
                                        <input type="text"  name="txtn1" required class="form-control" placeholder="Nota1" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_firstname">Nota 2</label>
                                    <div class="input-group">
                                        <input type="text"  name="txtn2" required class="form-control" placeholder="Nota2" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_firstname">Nota 3</label>
                                    <div class="input-group">
                                        <input type="text"  name="txtn3" required class="form-control" placeholder="Nota3" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_firstname">Nota 4</label>
                                    <div class="input-group">
                                        <input type="text"  name="txtn4" required class="form-control" placeholder="Nota4" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_firstname">Nota 5</label>
                                    <div class="input-group">
                                        <input type="text"  name="txtn5" required class="form-control" placeholder="Nota5" />
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="conexion.js"></script>
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
  $estudiante=$_POST['idstu'];
   $nota1=$_POST['txtn1'];
   $nota2=$_POST['txtn2'];
   $nota3=$_POST['txtn3'];
   $nota4=$_POST['txtn4'];
   $nota5=$_POST['txtn5'];

 if(!isset($errMSG))
 {

  $respuesta_prof_period = $connect->prepare("SELECT INTO prof_period (period_idper, usuarios_id, course_idcur) 
  VALUES (:period_idper, :usuarios_id, :course_idcur)");

  $stmt = $connect->prepare("INSERT INTO notas (nota1, nota2, nota3, nota4, nota5) VALUES (:nota1, :nota2, :nota3, :nota4, :nota5)");
  $stmt->bindParam(':nota1',$nota1);
  $stmt->bindParam(':nota2',$nota2);
  $stmt->bindParam(':nota3',$nota3);
  $stmt->bindParam(':nota4',$nota4);
  $stmt->bindParam(':nota5',$nota5);
  
  
$respuesta = $stmt->execute();
$inNotas = $connect->prepare("INSERT INTO detalle_notas (notas_id, students_idstu, prof_period_id) 
VALUES ($respuesta.id, $estudiante.id, $respuesta_prof_period.id)");

$inNotas ->bindParam(':notaiid',$respuesta['id']);
$inNotas ->bindParam(':estudiante',$estudiante['id']);
$inNotas ->bindParam(':respuesta_prof_period',$respuesta_prof_period['id']);


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
   $errMSG = "error al insertar....";
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
////////////// Actualizar la tabla /////////
$consulta = "DELETE FROM `notas` WHERE `id`=:id";
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
}// Cierra envio de guardado
?>
  


  <?php
    
if(isset($_POST['actualizar'])){
///////////// Informacion enviada por el formulario /////////////
$id=trim($_POST['id']); 
$nota1=trim($_POST['nota1']);    
$nota1=trim($_POST['nota2']); 
$nota1=trim($_POST['nota3']); 
$nota1=trim($_POST['nota4']); 
$nota1=trim($_POST['nota5']); 


///////// Fin informacion enviada por el formulario /// 

////////////// Actualizar la tabla /////////
$consulta = "UPDATE notas
SET `nota1`= :nota1, `nota2`= :nota2, `nota3`= :nota3, `nota4`= :nota4, `nota5`= :nota5 WHERE `id` = :id";
$sql = $connect->prepare($consulta);
$sql->bindParam(':nota1',$nota1,PDO::PARAM_STR, 25);
$sql->bindParam(':nota2',$nota1,PDO::PARAM_STR, 25);
$sql->bindParam(':nota3',$nota1,PDO::PARAM_STR, 25);
$sql->bindParam(':nota4',$nota1,PDO::PARAM_STR, 25);
$sql->bindParam(':nota5',$nota1,PDO::PARAM_STR, 25);
$sql->bindParam(':id',$id,PDO::PARAM_INT);

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
<script src="../../Assets/js/periodo.js"></script>
  </body>
  
  </html>


