<!-- Header-->
<?php include ('php/cabeadmin.php');
    include ('conexion.php');
    $usuarios= "SELECT * FROM usuarios";
    
?> 
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>
                   
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
                                <th>Usuario</th>
                                <th>Clave</th>                                
                                <th>Nombre</th>  
                                <th>Correo</th> 
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $resultado = mysqli_query($conexion,$usuarios);
                                        while($row=mysqli_fetch_assoc($resultado)) {?>
                                                <tr>
                                                        <td><?php echo $row["id"]; ?></td>
                                                        <td><?php echo $row["usuario"]; ?></td>
                                                        <td><?php echo $row["password"]; ?></td>
                                                        <td><?php echo $row["nombre"]; ?></td>
                                                        <td><?php echo $row["correo"]; ?></td>
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
      
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form action="consultas.php" method="POST" id="formPersonas">    
            <div class="modal-body">
                    <div class="form-group">
                    
                    <label for="usuario" class="col-form-label">Usuario:</label>
                    <input type="text" class="form-control"  name="usuario">
                    </div>
                    <div class="form-group">
                    <label for="password" class="col-form-label">password:</label>
                    <input type="password" class="form-control" name="password">
                    </div>                
                    <div class="form-group">
                    <label for="nombre" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre">
                    </div> 
                    <div class="form-group">
                    <label for="correo" class="col-form-label">Correo:</label>
                    <input type="email" class="form-control" name="correo">
                    </div> 
                    <div class="form-group">
                    <label for="id_c" class="col-form-label">Cargo:</label>
                    <input type="number" class="form-control" name="id_c">
                    </div> 
                         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  

<div class="modal fade" id="modalCRUD2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form action="consultas.php" method="POST" id="formPersonas">    
            <div class="modal-body">
                    <div class="form-group">
                    
                    <label for="usuario" class="col-form-label">Usuario:</label>
                    <input type="text" class="form-control" name="usuario">
                    </div>
                    <div class="form-group">
                    <label for="password" class="col-form-label">password:</label>
                    <input type="password" class="form-control" name="password">
                    </div>                
                    <div class="form-group">
                    <label for="nombre" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre">
                    </div> 
                    <div class="form-group">
                    <label for="correo" class="col-form-label">Correo:</label>
                    <input type="email" class="form-control" name="correo">
                    </div> 
                    <div class="form-group">
                    <label for="id_c" class="col-form-label">Cargo:</label>
                    <input type="number" class="form-control" name="id_c">
                    </div> 
                         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'php/pieadmin.php' ?> 