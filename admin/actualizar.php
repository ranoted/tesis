<!-- Header-->
<?php include ('php/cabeadmin.php');
    include ('conexion.php');
    $id=($_GET['id']);
    $usuarios= "SELECT * FROM usuarios WHERE id='$id'";
?> 
  
      
    <div class="container">
        <div class="row">
            <div class="col-lg-12">  
            <h1 class="h3 mb-4 text-gray-800">Actualizar informacion</h1>          
            
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                    <form action="/admin/modificar.php" method="POST" >
                        <?php $resultado = mysqli_query($conexion,$usuarios);
                                        while($row=mysqli_fetch_assoc($resultado)) {?>
                                                
                                                    
                                                    <input type="hidden"  value="<?php echo $row["id"]; ?>" name="id">
                                                    <label for="">Usuario  </label>
                                                    <input type="text" value="<?php echo $row["usuario"]; ?>" name="usuario">
                                                    <br>
                                                    <label for="">Clave   </label>
                                                    <input type="text" value="<?php echo $row["password"]; ?>" name="password">
                                                    <br>
                                                    <label for="">Password    </label>
                                                    <input type="text" value="<?php echo $row["nombre"]; ?>" name="nombre">
                                                    <br>
                                                    <label for="">Correo   </label>
                                                    <input type="text" value="<?php echo $row["correo"]; ?>" name="correo">
                                                    
                                                    <div>
                                                    <button id="btnNuevo" type="submit" class="btn btn-success " data-toggle="modal">Actualizar</button>    
                                                    </div>
                                                         
                                                        
                                                
                                        <?php } mysqli_free_result($resultado) ?>  
                                        </form>                                           
                                
                       </table>                    
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