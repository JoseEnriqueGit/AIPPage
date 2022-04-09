<?php

use LDAP\Result;

include("conection.php");

$sql = 'SELECT * FROM tb_ataques';
$result = mysqli_query($conn, $sql);

// echo $result;

$ataques = array();
$ataques["items"] = array();

while ($registros = $result->fetch_assoc()){
    
    $item = array(
        "id" => $registros['ID'],
        "fechaHora" => $registros['FechaHora'],
        "ciudad" => $registros['Ciudad'],
        "latitud" => $registros['Latitud'],
        "longitud" => $registros['Longitud'],
        "tipoArma" => $registros['TipoArma'],
        "muerto" => $registros['Muertos'],
        "heridos" => $registros['Heridos'],
        "totaldanos" => $registros['TotalDanos'],
        "autor" => $registros['Autor'],
    );
    array_push($ataques["items"], $item);
}
    echo json_encode($ataques);



// class ApiPeliculas{


//     function getAll(){
//         // $pelicula = new Pelicula();
//         $peliculas = array();
//         $peliculas["items"] = array();

//         $res = $result;

//         if($res->rowCount()){
//             while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
//                 $item=array(
//                     "id" => $row['id'],
//                     "nombre" => $row['nombre'],
//                     "imagen" => $row['imagen'],
//                 );
//                 array_push($peliculas["items"], $item);
//             }
        
//             echo json_encode($peliculas);
//         }else{
//             echo json_encode(array('mensaje' => 'No hay elementos'));
//    }
// }
// }

?>