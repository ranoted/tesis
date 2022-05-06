<!-- Header-->
<?php include ('php/cabeadmin.php');
    include ('conexion.php');
    $usuarios= "SELECT * FROM cotizacion";
    
?> 
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Cotizacion</h1>
                   
                        <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                    <div class="container">
                        <br>
        <div class="row">
            <div class="col-lg-12">  

            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Tipo</th>
                                <th>Medida X</th>                                
                                <th>Mediada Y</th>  
                                <th>Valor final</th> 
                                <th>Fecha</th> 
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $resultado = mysqli_query($conexion,$usuarios);
                                        while($row=mysqli_fetch_assoc($resultado)) {?>
                                                <tr>
                                                        <td><?php echo $row["id_coti"]; ?></td>
                                                        <td><?php echo $row["tipmes"]; ?></td>
                                                        <td><?php echo $row["mex"]; ?></td>
                                                        <td><?php echo $row["mey"]; ?></td>
                                                        <td><?php echo $row["valorf"]; ?></td>
                                                        <td><?php echo $row["fecha"]; ?></td>
                                                        <td><div class="text-center">
                                                            <a href="/admin/actualizar.php?id=<?php echo $row["id"]; ?>"><button id="btnEditar" type="button" class="btn btn-primary " data-toggle="modal">Editar</button></a>
                                                            
                                                            <a href="/admin/delete.php?id=<?php echo $row["id"]; ?>"><button id="btnBorrar" type="button" class="btn btn-danger bt" data-toggle="modal">Borrar</button></a>
                                                        </div></td>
                                                </tr>
                                        <?php } mysqli_free_result($resultado) ?>                                 
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>    
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'php/pieadmin.php' ?> 