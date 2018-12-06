<?php
    require "conexion.php";    
    $Consulta = $Conexion ->query("
        SELECT id_tarea,responsable,tarea,fecha_inicio,fecha_fin FROM tareas WHERE fecha_fin is null;
    ");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>TO-DO List</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/grayscale.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">		
	
</head>
<body>
	<div class="container content-section">
      <div class="row">
      	<div class="col-sm-4">
      		<h1 class="h2">Listado de Tareas</h1>
      	</div>
      	<div class="col-sm-4">
      		<div style="padding-top: 26px;float: inherit;">
                <label>Buscar por Responsable: </label>
            </div>
            <div style="padding-left: 166px;padding-top: 23px;">
            <input id="filter" type="text" placeholder="Buscar en esta tabla">
            </div>
      	</div>
      	<div class="col-sm-4">
      		<div style="padding-left: 212px;padding-top: 21px;"> 
      		<button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">Agregar Tarea</button>
      		</div>
      	</div>
      	</div>
         <div style="padding-left: 258px;">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Responsable</th>
                  <th>Tarea</th>
                  <th>Proceso</th>
                  <th>Fecha Inicio</th>
                  <th>Fecha Fin</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody class="table table-hover tablaSort">
                <?php  
                    while($Fila = $Consulta->fetch_assoc())
                    { 

                    	$id_tarea = $Fila['id_tarea'];
                        $nombre = $Fila['responsable'];
                        $tarea = $Fila['tarea'];
                        $fechainico = $Fila['fecha_inicio'];
                        $fechafin = $Fila['fecha_fin'];                       
                        ?>
                        <tr>
                        	
                        	<td><?php echo $id_tarea;?></td>
                            <td><?php echo $nombre;?></td>
                            <td><?php echo $tarea;?></td>
                            <td></td>
                            <td><?php echo $fechainico;?></td>
                            <td><?php echo $fechafin;?></td>
                        </tr>
                        <?php
                    }
                    ?>
              </tbody>
            </table>
          </div>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Tarea</h5>
      </div>
      <form id="form_edit">
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <div class="col-sm-3">Responsable:</div>
            <div class="col-sm-9">
                <input class="form-control input-sm" id="responsable" name="responsable" type="text" placeholder="Responsable" required="required">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="col-sm-3">Tarea:</div>
            <div class="col-sm-9">
                <input class="form-control input-sm" id="tarea" name="tarea" type="text" placeholder="Tarea" required="required">
            </div>
          </div>
        </div>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button onclick="registrar()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/fincamex.js"></script>
</body>
</html>