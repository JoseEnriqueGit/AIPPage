<?php 
include("insert.php");
include("buscar.php");
include("borrar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asaltos RD</title>
    <link rel="stylesheet" href="Style/Css.css"/>
</head>
<body>

    <div class="MainContainer">
        <div class="DivForm">
            <h3>AGREGAR CASO</h3>
            <form class="FormAdd" id="FormAdd" method="POST">
                <div class="SubFormAdd-1">
                    <div class="DivsInputs">
                        <label class="Label">Fecha y Hora<input type="datetime-local" id="FehaHora" name="FehaHora"></label>
                    </div>
                    <div class="DivsInputs">
                        <label class="Label">Ciudad<input type="text" id="Lugar" name="Lugar" /></label>
                    </div>
                    <div class="DivsInputs">
                        <label class="Label">Latitud<input type="text" id="Latitud" name="Latitud" /></label>
                    </div>
                    <div class="DivsInputs">
                        <label class="Label">Longitud<input type="text" id="Longitud" name="Longitud" /></label>
                    </div>
                    <div class="DivsInputs">
                        <label class="Label">Tipo de arma
                            <select id="TipoArma" name="TipoArma">
                                <option value="None">Seleccione</option>
                                <option value="Arma blanca">Arma blanca</option>
                                <option value="De fuego">De fuego</option>
                            </select>
                        </label>
                    </div>

                </div>
                <div class="SubFormAdd-2">

                    <div class="SubDiv-1">
                        <div class="div">
                            <div class="DivsInputs">
                                <label class="Label">Muertos<input type="text" id="Muertos" name="Muertos" /></label>
                            </div>
                            <div class="DivsInputs">
                                <label class="Label">Heridos<input type="text" id="Heridos" name="Heridos" /></label>
                            </div>
                        </div>
                        <div class="DivsInputs">
                            <label class="Label">Total del daño<input type="text" id="Daño" name="Daño" /></label>
                        </div>

                    </div>

                    <div class="SubDiv-2">
                        <div class="DivsInputs">
                            <label class="Label">Autor del ataque<input type="text" id="Autor" name="Autor" /></label>
                        </div>
                        <div class="DivsBtns">
                            <button type="submit" class="BtnGuardar" name="BtnGuardar">GUARDAR</button>
                        </div>
                    </div>

                </div>
                <!-- <a class="aa" href="/graficas.html">ESTADISTICA</a>
                <a class="aa" href="/map.html">MAPA</a> -->
            </form>
            <!-- <p class="Warn">Por favor llene todos los campos</p> -->

            <!-- <table class="Tabla">


            </table> -->

        </div>
        <div class="DivForm">
            <h3>MODIFICAR HORARIO</h3>
            <form class="FormAdd" id="FormSet" method="POST">
                <div class="SubFormAdd-1">
                    <div class="DivsInputs">
                        <label class="Label">ID<input type="text" id="ID" name="ID" value=""></label>
                    </div>
                    <div class="DivsInputs">
                        <label class="Label">Fecha y Hora<input type="text" id="FechaHora" name="FechaHora" value="<?php echo $FechaHora?>"/></label>
                    </div>
                    <div class="DivsInputs">
                        <label class="Label">Ciudad<input type="text" id="Lugar" name="Lugar" value="<?php echo $Lugar?>"/></label>
                    </div>
                    <div class="DivsInputs">
                        <label class="Label">Latitud<input type="text" id="Latitud" name="Latitud" value="<?php echo $Latitud?>"/></label>
                    </div>
                    <div class="DivsInputs">
                        <label class="Label">Longitud<input type="text" id="Longitud" name="Longitud" value="<?php echo $Longitud?>"/></label>
                    </div>
                    <div class="DivsInputs">
                    <label class="Label">Tipo de arma<input type="text" id="Longitud" name="Longitud" value="<?php echo $TipoArma?>"/></label>
                    </div>

                </div>
                <div class="SubFormAdd-2">

                    <div class="SubDiv-1">
                        <div class="div">
                            <div class="DivsInputs">
                                <label class="Label">Muertos<input type="text" id="Muertos" name="Muertos" value="<?php echo $Muertos?>"/></label>
                            </div>
                            <div class="DivsInputs">
                                <label class="Label">Heridos<input type="text" id="Heridos" name="Heridos" value="<?php echo $Heridos?>"/></label>
                            </div>
                        </div>
                        <div class="DivsInputs">
                            <label class="Label">Total del daño<input type="text" id="Daño" name="Daño" value="<?php echo $TotalDanos?>"/></label>
                        </div>

                    </div>

                    <div class="SubDiv-2">
                        <div class="DivsInputs">
                            <label class="Label">Autor del ataque<input type="text" id="Autor" name="Autor" value="<?php echo $Autor?>"/></label>
                        </div>
                        <div class="DivsBtns">
                            <button type="submit" class="BtnModificar" name="Buscar">BUSCAR</button>
                        </div>
                    </div>

                </div>
                <!-- <a class="aa" href="/graficas.html">ESTADISTICA</a>
                <a class="aa" href="/map.html">MAPA</a> -->
                <label class="Label">Fecha y Hora <label class="Label"><?php echo $FechaHora?></label></label>
            </form>
            <!-- <p class="Warn">Por favor llene todos los campos</p> -->
        </div>

        <div class="DivForm">

            <h3>ELIMINAR CASO</h3>
            <form class="FormDel">
                <div class="DivsInputs">
                    <label class="Label">ID<input type="text" id="IDDEL" name="IDDEL" /></label>
                </div>
                <div class="DivsBtns">
                    <button type="submit" class="BtnDel" name="BtnDel">ELIMINAR</button>
                </div>
            </form>
            <!-- <p class="Warn">Me falto las graficas, no por falta de tiempo si no por no hacer las busqueda correcta en internet.</p> -->

            
        </div>
        <table class="Tabla">
            <tr>
                <th class="L">ID</th>
                <th>FECHA Y HORA</th>
                <th>CIUDAD</th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
                <th>TIPO DE ARMA</th>
                <th>MUERTOS</th>
                <th>HERIDOS</th>
                <th>AUTOR</th>
                <th class="R">TOTAL EN DAÑOS</th>
            </tr>
            <tr>
                <?php
                    $sql = "SELECT * FROM tb_ataques";

                    $result = mysqli_query($conn, $sql);

                    while ($registros = $result->fetch_assoc()) {
                        echo '<tr><td class="L">' . $registros['ID'] . '</td>
                        <td>'. $registros['FechaHora'] .'</td>
                        <td>'. $registros['Ciudad'] .'</td>
                        <td>'. $registros['Latitud'] .'</td>
                        <td>'. $registros['Longitud'] .'</td>
                        <td>'. $registros['TipoArma'] .'</td>
                        <td>'. $registros['Muertos'] .'</td>
                        <td>'. $registros['Heridos'] .'</td>
                        <td>'. $registros['Autor'] .'</td>
                        <td class="R">'. $registros['TotalDanos'] .'</td></tr>';
                    }
                ?>
            </tr>

        </table>

    </div>

    <!-- <canvas id="tipoCaso" width="400px" height="400px"></canvas> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="Casos.js"></script> -->
</body>
</html>