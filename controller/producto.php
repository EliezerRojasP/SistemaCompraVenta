<?php
    /*TODO: Llamando Clases */
    require_once("../config/conexion.php");
    require_once("../models/Producto.php");
    /*TODO: Inicializando clase */
    $producto = new Producto();

    switch ($_GET["op"]){
        /*TODO: Guardar y editar, guardar cuando el ID este vacio, y Actualizar cuando se envie el ID */
        case 'guardaryeditar':
            $suc_id = $_POST["suc_id"];
            $cat_id = $_POST["cat_id"];
            $prod_nom = $_POST["prod_nom"];
            $prod_descrip = $_POST["prod_descrip"];
            $und_id = $_POST["und_id"];
            $mon_id = $_POST["mon_id"];
            $prod_pcompra = $_POST["prod_pcompra"];
            $prod_pventa = $_POST["prod_pventa"];
            $prod_stock = $_POST["prod_stock"];
            $prod_fechaven = $_POST["prod_fechaven"];
            $prod_id = $_POST["prod_id"];

            $prod_img = "";

            if (isset($_FILES["prod_img"]) && $_FILES["prod_img"]["error"] == UPLOAD_ERR_OK) {
                $extension = pathinfo($_FILES["prod_img"]["name"], PATHINFO_EXTENSION);
                $prod_img = uniqid() . "." . $extension;
                $ruta = "../../assets/producto/" . $prod_img;

                if (!move_uploaded_file($_FILES["prod_img"]["tmp_name"], $ruta)) {
                    echo json_encode(["status" => "error", "message" => "Error al subir la imagen."]);
                    exit;
                }
            } else {
                if (empty($prod_id)) {
                    echo json_encode(["status" => "error", "message" => "Debe seleccionar una imagen para el nuevo producto."]);
                    exit;
                } else {
                    $prod_img = $_POST["hidden_producto_imagen"];
                }
            }

            if (empty($prod_id)) {
                $producto->insert_producto($suc_id, $cat_id, $prod_nom, $prod_descrip, $und_id, $mon_id, $prod_pcompra, $prod_pventa, $prod_stock, $prod_fechaven, $prod_img);
                echo json_encode(["status" => "success", "message" => "Producto registrado correctamente."]);
            } else {
                $producto->update_producto($prod_id, $suc_id, $cat_id, $prod_nom, $prod_descrip, $und_id, $mon_id, $prod_pcompra, $prod_pventa, $prod_stock, $prod_fechaven, $prod_img);
                echo json_encode(["status" => "success", "message" => "Producto actualizado correctamente."]);
            }

            break;
        
        /*TODO: Listado de registros formato Json para Datatable Js */
        case "listar":
            $datos=$producto->get_producto_x_suc_id($_POST["suc_id"]);
            $data=Array();
            foreach($datos as $row){
                $sub_array = array();

                if ($row["PROD_IMG"] != ''){
                    $sub_array[] =
                    "<div class='d-flex align-items-center'>" .
                        "<div class='flex-shrink-0 me-2'>".
                            "<img src='../../assets/producto/".$row["PROD_IMG"]."' alt='' class='avatar-xs rounded-circle'>".
                        "</div>".
                    "</div>";
                }else{
                    $sub_array[] =
                    "<div class='d-flex align-items-center'>" .
                        "<div class='flex-shrink-0 me-2'>".
                            "<img src='../../assets/producto/no_imagen.png' alt='' class='avatar-xs rounded-circle'>".
                        "</div>".
                    "</div>";
                }
                $sub_array[] = $row["CAT_NOM"];
                $sub_array[] = $row["PROD_NOM"];
                $sub_array[] = $row["PROD_DESCRIP"];
                $sub_array[] = $row["UND_NOM"];
                $sub_array[] = $row["MON_NOM"];
                $sub_array[] = $row["PROD_PCOMPRA"];
                $sub_array[] = $row["PROD_PVENTA"];
                $sub_array[] = $row["PROD_STOCK"];
                $sub_array[] = $row["PROD_FECHAVEN"];
                $sub_array[] = $row["PROD_IMG"];    
                $sub_array[] = $row["FECH_CREA"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["PROD_ID"].')" id="'.$row["PROD_ID"].'" class="btn btn-warning btn-icon waves-effect waves-light"><i class="ri-edit-2-line"></i></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["PROD_ID"].')" id="'.$row["PROD_ID"].'" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></button>';
                $sub_array[] = '<button type="button" onClick="ver('.$row["PROD_ID"].')" id="'.$row["PROD_ID"].'" class="btn btn-success btn-icon waves-effect waves-light"><i class="ri-settings-2-line"></i></button>';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;

        /* TODO:Mostrar informacion de registro segun su ID */
        case "mostrar":
            $datos=$producto->get_producto_x_prod_id($_POST["prod_id"]);
            if (is_array($datos)==true and count($datos)>0){
                foreach($datos as $row){
                    $output["PROD_ID"] = $row["PROD_ID"];
                    $output["CAT_ID"] = $row["CAT_ID"];
                    $output["UND_ID"] = $row["UND_ID"];
                    $output["UND_NOM"] = $row ["UND_NOM"];
                    $output["MON_ID"] = $row["MON_ID"];
                    $output["PROD_NOM"] = $row["PROD_NOM"];
                    $output["PROD_DESCRIP"] = $row["PROD_DESCRIP"];
                    $output["PROD_PCOMPRA"] = $row["PROD_PCOMPRA"];
                    $output["PROD_PVENTA"] = $row["PROD_PVENTA"];
                    $output["PROD_STOCK"] = $row["PROD_STOCK"];
                    $output["PROD_FECHAVEN"] = $row["PROD_FECHAVEN"];
                    $output["PROD_IMG"] = $row["PROD_IMG"];
                    $output["FECH_CREA"] = $row["FECH_CREA"];
                    if($row["PROD_IMG"] != ''){
                        $output["PROD_IMG"] = '<img src="../../assets/producto/'.$row["PROD_IMG"].'" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image"></img><input type="hidden" name="hidden_producto_imagen" value="'.$row["PROD_IMG"].'" />';
                    }else{
                        $output["PROD_IMG"] = '<img src="../../assets/producto/no_imagen.png" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image"></img><input type="hidden" name="hidden_producto_imagen" value="" />';
                    }
                }
                echo json_encode($output);
            }
            break;

        /* TODO: Cambiar Estado a 0 del Registro */
        case "eliminar";
            $producto->delete_producto($_POST["prod_id"]);
            break;

        case "combo":
            $datos=$producto->get_producto_x_cat_id($_POST["cat_id"]);
            if(is_array($datos)==true and count($datos)>0){
                $html="";
                $html.="<option selected>Seleccionar</option>";
                foreach($datos as $row){
                    $html.= "<option value='".$row["PROD_ID"]."'>".$row["PROD_NOM"]."</option>";
                }
                echo $html;
            }
            break;
        /* TODO: Listar consumo de Productos */
        case "consumo":
            $datos=$producto->get_producto_consumo($_POST["prod_id"]);
            $data=Array();
            foreach($datos as $row){
                $sub_array = array();
                if ($row["REGISTRO"] == 'Compra'){
                    $sub_array[] = "<div class='flex-shrink-0 avatar-xs acitivity-avatar'><div class='avatar-title bg-soft-success text-success rounded-circle'><i class='ri-shopping-cart-2-line'></i></div></div>";
                }else{
                    $sub_array[] = "<div class='flex-shrink-0 avatar-xs acitivity-avatar'><div class='avatar-title bg-soft-danger text-danger rounded-circle'><i class='ri-stack-fill'></i></div></div>";
                }
                $sub_array[] = $row["REGISTRO"];
                $sub_array[] = $row["DOC_NOM"];
                $sub_array[] = $row["FECH_CREA"];
                $sub_array[] = $row["DETC_CANT"];
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;

    }
?>