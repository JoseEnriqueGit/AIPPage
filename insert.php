<?php
include("conection.php");?>

<?php
    
    
    $FechaHora = (isset($_POST['FehaHora']))?$_POST['FehaHora']:"";
    $Lugar=(isset($_POST['Lugar']))?$_POST['Lugar']:"";
    $Latitud=(isset($_POST['Latitud']))?$_POST['Latitud']:"";
    $Longitud=(isset($_POST['Longitud']))?$_POST['Longitud']:"";
    $TipoArma=(isset($_POST['TipoArma']))?$_POST['TipoArma']:"";
    $Muertos=(isset($_POST['Muertos']))?$_POST['Muertos']:"";
    $Heridos=(isset($_POST['Heridos']))?$_POST['Heridos']:"";
    $TotalDanos=(isset($_POST['Daño']))?$_POST['Daño']:"";
    $Autor=(isset($_POST['Autor']))?$_POST['Autor']:"";

    if(isset($_POST['BtnGuardar'])){
        
        $sql = "INSERT INTO tb_ataques(ID,FechaHora,Ciudad,Latitud,Longitud,TipoArma,Muertos,Heridos,TotalDanos,Autor) 
        VALUES ( 'NULL','$FechaHora', '$Lugar', '$Latitud', '$Longitud', '$TipoArma', '$Muertos', '$Heridos', '$TotalDanos', '$Autor')";

        $result = mysqli_query($conn, $sql);
        // echo 'insertado';

        if (($result = mysqli_query($conn, $sql)) === false) {
            die(mysqli_error($conn));
        }

    

        // $setenciaSQL=$conexion->prepare ("INSERT INTO tb_ataques(FechaHora,Ciudad,Latitud,Longitud,TipoArma,Muertos,Heridos,TotalDanos,Autor) 
        // Values (:FechaHora,:Lugar,:Latitud,:Longitud,:TipoArma,:Muertos,:Heridos,:TotalDanos,:Autor);");
    
        // $setenciaSQL->bindParam(':FehaHora',$FechaHora);
        // $setenciaSQL->bindParam(':Lugar',$Lugar);
        // $setenciaSQL->bindParam(':Latitud',$Latitud);
        // $setenciaSQL->bindParam(':Longitud',$Longitud);
        // $setenciaSQL->bindParam(':TipoArma',$TipoArma);
        // $setenciaSQL->bindParam(':Muertos',$Muertos);
        // $setenciaSQL->bindParam(':Heridos',$Heridos);
        // $setenciaSQL->bindParam(':TotalDanos',$TotalDanos);
        // $setenciaSQL->bindParam(':Autor',$Autor);
        // $setenciaSQL->execute();
    }
?>