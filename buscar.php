<?php
include("conection.php");?>

<?php
    
    $ID = (isset($_POST['ID']))?$_POST['ID']:"";
    // $FechaHora = (isset($_POST['FehaHora']))?$_POST['FehaHora']:"";
    // $Lugar=(isset($_POST['Lugar']))?$_POST['Lugar']:"";
    // $Latitud=(isset($_POST['Latitud']))?$_POST['Latitud']:"";
    // $Longitud=(isset($_POST['Longitud']))?$_POST['Longitud']:"";
    // $TipoArma=(isset($_POST['TipoArma']))?$_POST['TipoArma']:"";
    // $Muertos=(isset($_POST['Muertos']))?$_POST['Muertos']:"";
    // $Heridos=(isset($_POST['Heridos']))?$_POST['Heridos']:"";
    // $TotalDanos=(isset($_POST['Daño']))?$_POST['Daño']:"";
    // $Autor=(isset($_POST['Autor']))?$_POST['Autor']:"";

    if(isset($_POST['Buscar'])){
        
        $sql = "SELECT * FROM tb_ataques WHERE ID = " . $ID;

        $result = mysqli_query($conn, $sql);

        $registro = $result->fetch_assoc();

        $FechaHora = $registro['FechaHora'];
        $Lugar = $registro['Ciudad'];
        $Latitud = $registro['Latitud'];
        $Longitud = $registro['Longitud'];
        $TipoArma = $registro['TipoArma'];
        $Muertos = $registro['Muertos'];
        $Heridos = $registro['Heridos'];
        $TotalDanos = $registro['Autor'];
        $Autor = $registro['TotalDanos'];
    }
?>