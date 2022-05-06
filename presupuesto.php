<?php include 'php/cabeza.php' ?> 
<?php  
$usuarios= "SELECT * FROM cotizacion";



?> 

        <div class="contenedor-p">
            <section class="contenidor-pd">
                <section class="text-header">
                    <h1>Presupuesto</h1>
    
                </section>
            
            </section>
        </div>
        </div>
    </header>
   
    <div class="contenedor-d" >
          <Section class="contenedor-conciertos ">
            <div class="col-mb-6">
              <div class="formas">

                <img src="img/blanca.png" width="300" height="300" id="formas" class="img-fluid mb-5" alt="">

              </div>
              <div class="material">
                  <img src="" width="" height="" id="material" class="img-fluid mb-5" alt="">
               </div>
           

          
             </div>
          </Section>  








          
    </div>
    <section class="contacto1">
        <div class="contact_form">

            <div class="formulario">      
              <h1>Datos del cliente</h1>
                
                  <form action="" method="post">       
        
                        <p>
                          <label for="nombre" class="colocar_nombre">Nombre
                            <span class="obligatorio">*</span>
                          </label>
                            <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                        </p>
                      
                        <p>
                          <label for="email" class="colocar_email">Email
                            <span class="obligatorio">*</span>
                          </label>
                            <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                        </p>
                    
                        <p>
                          <label for="telefone" class="colocar_telefono">Teléfono
                            <span class="obligatorio">*</span>
                          </label>
                            <input type="tel" name="introducir_telefono" id="telefono" required="obligatorio" placeholder="Escribe tu teléfono">
                        </p>
                        <p>
                            <label for="direccion" class="colocar_direccion">Direccion
                              <span class="obligatorio">*</span>
                            </label>
                              <input type="" name="introducir_direccion" id="direccion" required="obligatorio" placeholder="Escribe tu direccion">
                          </p>    
 
                        <p>
                          <label for="mensaje" class="colocar_mensaje">Mensaje
                            <span class="obligatorio">*</span>
                          </label>                     
                                            <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder=""></textarea> 
                                        </p>                    
                      
                        <button type="submit" name="enviar_formulario" id="enviar"><p>Continuar</p></button>
        
                        <p class="aviso">
                          <span class="obligatorio"> * </span>los campos son obligatorios.
                        </p>          
                    
                  </form>
            </div>  
          </div>

        
        
    </section>


    

    

    
    <?php include 'php/pie.php' ?> 