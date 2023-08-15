<?php

    include "mysql.php";

    

    if(isset($_REQUEST['item_data'])){
        $id = $_REQUEST["item_data"];

        $query = mysqli_query($conn, "SELECT * FROM tech WHERE id = $id");

        while($rows = mysqli_fetch_assoc($query)){
            echo json_encode($rows);
        }
    }

    if(isset($_REQUEST['content'])){
        $id = $_REQUEST["content"];

        $query = mysqli_query($conn, "SELECT * FROM tech WHERE id = $id");

        while($rows = mysqli_fetch_assoc($query)){
            echo json_encode($rows);
        }
    }


    if(isset($_REQUEST['compu_filter'])){
        $estado = $_POST['estado'];
        $fecha1 = $_POST['fecha1'];
        $fecha2 = $_POST['fecha2'];
        $nombre = $_POST['nombre'];
        //checar en que pagina esta el usuario
        $categoria = $_POST['categoria'];
        $and = false;

        $query1 = "SELECT * FROM tech WHERE";
        //SI TODOS LOS CAMPOS ESTAN EN BLANCO, SOLICITAR TODOS LOS DATOS
        if($estado == "" && $fecha1 == "" && $fecha2 == "" && $nombre = ""){
            $query1 = "SELECT * FROM tech";
        }else{
            //FILTRAR POR TIPO
            if($estado != "0"){
                $q_estado = "";
                    if($and == true){
                        $q_estado = " AND `estado` LIKE '%$estado%'";
                    }else{
                        $q_estado = " `estado` LIKE '%$estado%'";
                        $and = true;
                    }
                    $query1 .= $q_estado;
            }
            //FILTRAR POR FECHA
            if($fecha1 != "" && $fecha2 != ""){
                $q_fecha = "";
                    if($and == true){
                        $q_fecha = " AND `fecha` BETWEEN '$fecha1' AND '$fecha2'";
                    }else{
                        $q_fecha = " `fecha` BETWEEN '$fecha1' AND '$fecha2'";
                        $and = true;
                    }
                    $query1 .= $q_fecha;
            }
            //FILTRAR POR NOMBRE
            if($nombre != "") {
                $q_nombre = "";
            
                if ($and == true) {
                    $q_nombre = " AND `nombre` LIKE '%$nombre%'";
                }else{
                    $q_nombre = " `nombre` LIKE '%$nombre%'";
                    $and = true;
                }
                
                $query1 .= $q_nombre;
            }
            
        }

        //SI LA URL NO ES IGUAL AUNA DE LAS "TODOS OPCIONES", SE MOSTRARA SOLO LA CATEGORIA CORRECTA, DE LO CONTRARIO SE MOSTRARA TODOS LOS DATOS

        if($categoria != "todos_tech"){
            $query1 .= " AND `categoria` = '$categoria'";
        }else{
            //SE MOSTRARAN TODOS LOS DATOS DE LA TABLA TECH
        }
        

        $data = mysqli_query($conn, $query1);

        $i = 0;

        while($rows = mysqli_fetch_assoc($data)){
            $i++;

            echo "
                 <tr>
                     <td>$i</td>
                     <td>$rows[nombre]</td>
                     <td>$rows[tipo]</td>
                     <td>$rows[marca]</td>
                     <td>$rows[modelo]</td>
                     <td>$rows[cantidad]</td>
                     <td>$rows[estado]</td>
                     <td>$rows[fecha]</td>
                     <td style='white-space:nowrap;width:10%;text-align:center;'>
                        <button class='btn btn-sm show btn-primary text-light' id='$rows[id]' data-bs-toggle='modal' i data-bs-target='#content'><img src='../app_icos/eye.svg' width='16'height='16'></button>
                        <button class='btn btn-sm edit btn-success text-light' id='$rows[id]' data-bs-toggle='modal' i data-bs-target='#edit_computer_form'><img src='../app_icos/edit2.svg' width='16'height='16'></button>
                        <button class='btn btn-sm delete btn-danger text-light' id='$rows[id]'  data-bs-toggle='modal' i data-bs-target='#delete'><img src='../app_icos/trash-2.svg' width='16'height='16'></button>
                    </td>
                    <script src='../js/main.js' crossorigin='anonymous'></script>
                 </tr>
             ";
        }
        
    }
?>