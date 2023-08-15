<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech_Todos</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="fluid-container">
        <?php
            include "components/header.php";
            include "mysql.php";
        ?>
    </div>
    <div class="row fluid-container">
        <div class="col-2">
            <?php
                include "components/aside.php";
            ?>
        </div>
                <div class="col-10 mt-5 ps-5 pt-3 container">
                  <!--  <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-1 pe-0 me-0 col-form-label" style="width: 4%">categoria</label>
                        <div class="col-sm-2 ps-0 ms-0">
                            <select id="tipo" class="form-select">
                                <option value = "0"></option>
                                <option value = "Cableados">Cableados</option>
                                <option value = "Inalambricos">Inalambricos</option>
                            </select>
                        </div>

                        <label for="colFormLabel" class="col-sm-1 pe-0 me-0 col-form-label" style="width: 4.5%">Desde</label>
                        <div class="col-sm-2 ps-0 ms-0">
                            <input id="fecha1" type="date" class="form-control">
                        </div>
                        <label for="colFormLabel" class="col-sm-1 pe-0 me-0 col-form-label" style="width: 4.5%">Hasta</label>
                        <div class="col-sm-2 ps-0 ms-0">
                            <input id="fecha2" type="date" class="form-control">
                        </div>

                        <div class="col-sm-3">
                            <input id="nombre" type="text" placeholder="Buscar por nombre" class="form-control">
                        </div>

                    </div>-->

                    <div class="row col-12">
                        <table class="table table-bordered">
                            <thead class="table-secondary">
                                <th>N°</th>
                                <th>Categoria</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Cantidad</th>
                                <th>Estado</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </thead>

                            <tbody id="table-c-body">
                            <?php
                                $data = mysqli_query($conn, "SELECT * FROM tech");
                                    $i = 0;
                                while($row = mysqli_fetch_assoc($data)){
                                    $i++;
                                    echo "
                                        <tr>
                                            <td>$i</td>
                                            <td>$row[categoria]</td>
                                            <td>$row[nombre]</td>
                                            <td>$row[tipo]</td>
                                            <td>$row[marca]</td>
                                            <td>$row[modelo]</td>
                                            <td>$row[cantidad]</td>
                                            <td>$row[estado]</td>
                                            <td>$row[fecha]</td>
                                            <td style='white-space:nowrap;width:10%;text-align:center;'>
                                                <button class='btn btn-sm show btn-primary text-light' id='$row[id]' data-bs-toggle='modal' i data-bs-target='#content'><img src='../app_icos/eye.svg' width='16'height='16'></button>
                                                <button class='btn btn-sm delete btn-danger text-light' id='$row[id]'  data-bs-toggle='modal' i data-bs-target='#delete'><img src='../app_icos/trash-2.svg' width='16'height='16'></button>
                                            </td>
                                        </tr>
                                    ";
                                }
                            ?>
                        </tbody>
                        </table>
                    </div>
                </div>
         </div>


            <!-- MODAL FORMULARIO DE EDICION -->

            <div class="modal modal-lg fade" id="edit_computer_form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Periferico</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body container">
                        <form  class="row" method="post" action="perifericos.php">
                            <div class="col-6">
                                <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nombre:</label>
                                <input type="text" name="e_nombre" class="form-control" id="name">
                                <input type="hidden" id="id" name="id">
                                </div>

                                <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Tipo:</label>
                                    <select name = "e_tipo" id='type' class="form-select">
                                        <option></option>
                                        <option>Cableados</option>
                                        <option>Inalambricos</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Marca:</label>
                                <input type="text" name="e_marca" class="form-control" id="brand">
                                </div>

                                <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Modelo:</label>
                                <input type="text" name ="e_modelo" class="form-control" id="model">
                                </div>

                                <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Cantidad:</label>
                                <input type="number" name="e_cantidad" class="form-control" id="ammount">
                                </div>

                                
                            </div>
                        <div class="col-6">
                                <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Estado:</label>
                                    <select name="e_estado" id="state" class="form-select">
                                        <option></option>
                                        <option>Funcionando</option>
                                        <option>Dañado</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Fecha:</label>
                                <input type="date" name ="e_fecha" class="form-control" id="date" >
                                </div>

                            <div class="mb-5">
                                <label for="message-text" class="col-form-label">Comentarios:</label>
                                <textarea class="form-control" name="e_comentarios" id="comments" rows="8" maxlength="250";></textarea>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" name="edit-pc" class="btn btn-primary">Guardar</button>
                    </div>
                        </form>
                    </div>
                    
                    </div>
                </div>
            </div>

            <!-- MOSTRAR LOS DETALLES DE UNA COMPUTADORA-->

            <div class="modal modal-md fade" id="content" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h5 class="modal-title" id="exampleModalLabel">Comentarios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body container">
                        <form  class="row" method="post" action="perifericos.php">
                            <div class="col-12 content">
                            </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>

            <!-- ELIMINAR UNA COMPUTADORA DE LA TABLA-->
            

            <div class="modal modal-md fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body container">
                        <form  class="row" method="post" action="perifericos.php">
                        <input type="hidden" id="delete_id" name="delete_id">
                            <div class="col-12">
                               <h5 class="text-danger">¿Seguro que desea eliminar este elemento?</h5>
                            </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" name="delete-pc" class="btn btn-primary">Eliminar</button>
                    </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
<script>
    document.getElementById("t-dash").classList.add("active");
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="../js/main.js" crossorigin="anonymous"></script>

    <?php
    include "mysql.php";
        if(isset($_POST['save-pc'])){
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $cantidad = $_POST['cantidad'];
            $estado = $_POST['estado'];
            $fecha = $_POST['fecha'];
            $comentarios = $_POST['comentarios'];
            mysqli_query($conn, "INSERT INTO tech(`categoria`, `nombre`, `tipo`, `marca`, `modelo`, `cantidad`, `estado`, `fecha`, `comentarios`) VALUES('perifericos', '$nombre', '$tipo', '$marca', '$modelo', '$cantidad', '$estado', '$fecha', '$comentarios')");
             echo "<meta http-equiv='refresh' content='0'>";
        }

        if(isset($_POST['edit-pc'])){
            $nombre = $_POST['e_nombre'];
            $tipo = $_POST['e_tipo'];
            $marca = $_POST['e_marca'];
            $modelo = $_POST['e_modelo'];
            $cantidad = $_POST['e_cantidad'];
            $estado = $_POST['e_estado'];
            $fecha = $_POST['e_fecha'];
            $comentarios = $_POST['e_comentarios'];
            $id = $_POST['id'];
            mysqli_query($conn, "UPDATE tech SET `nombre` = '$nombre', `tipo` = '$tipo', `marca` = '$marca', `modelo` = '$modelo', `cantidad` = '$cantidad', `estado` = '$estado', `fecha` = '$fecha', `comentarios` = '$comentarios' WHERE `id` = $id");
             echo "<meta http-equiv='refresh' content='0'>";
        }

        if(isset($_POST["delete-pc"])){
            $id = $_POST['delete_id'];
            mysqli_query($conn, "DELETE FROM tech WHERE `id` = '$id'");
            echo "<meta http-equiv='refresh' content='0'>";
        }
    ?>

</body>
</html>