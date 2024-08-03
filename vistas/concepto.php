<?php
// include_once '../config/global.php';
//Activamos el almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';

if ($_SESSION['Escritorio']==1)
{
?>
    <!-- Inicio Contenido PHP-->
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <header class="main-box-header clearfix">
                    <h2 class="box-title">Escritorio</h2>
                </header>
                <div class="row">
                    <div class="main-box-body clearfix" >
                    <div class="col-sm-4">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h4 style="font-size: 17px;">Prestamos del Dia</h4>
                            </div>
                        </div>
                    </div>
                </div>      
                <div class="inner">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">Cliente</th>
                                <th colspan="1" scope="col">Telefono</th>
                                <th colspan="1" scope="col">Prestamo</th>
                                <th colspan="1" scope="col">Interes</th>
                                <th colspan="1" scope="col">Plazo</th>
                                <th colspan="1" scope="col">Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <th colspan="2" scope="row"><?php echo !isset($_SESSION["nombre"])?></th>
                                <td>Mark </td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    
                 <div class="main-box-body clearfix" >
                    <div class="col-sm-4">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h4 style="font-size: 17px;">Pagos del Dia</h4>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="main-box-body clearfix" >
                    <div class="col-sm-4">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h4 style="font-size: 17px;">Gastos del Dia</h4>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="main-box-body clearfix" >
                </div>
                
            </div>
        </div>
    </div>
    <!-- Fin Contenido PHP-->
    <?php
}
else
{
 require 'noacceso.php';
}

require 'footer.php';
?>
        <script type="text/javascript" src="scripts/clientes.js"></script>
<?php 
}
ob_end_flush();
?>

