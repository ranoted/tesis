<?php include 'php/cabeza.php' ?> 

        <div class="contenedor-p">
            <section class="contenidor-pd">
                <section class="text-header">
                    <h1>Contactos</h1>
    
                </section>
            
            </section>
        </div>
    </header>
   
    <section class="contacto1">
        <div class="contact_form">

            <div class="formulario">      
              <h1 id="hc1"> Formulario de contacto</h1>
                <h4>Escríbenos y en breve nos pondremos en contacto contigo</h4>
        
        
                  <form action="submeter-formulario.php" method="post">       
        
                    
                        <p id="pc">
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
                          </label>
                            <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                        </p>    
                      
                            
                       
                      
                        <p>
                          <label for="mensaje" class="colocar_mensaje">Mensaje
                            <span class="obligatorio">*</span>
                          </label>                     
                                            <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                                        </p>                    
                      
                        <button type="submit"class="ad" name="ad" id="ad"><p>Enviar</p></button>
        
                        <p class="aviso">
                          <span class="obligatorio"> * </span>los campos son obligatorios.
                        </p>          
                    
                  </form>
            </div>  
          </div>
        
    </section>
    
	
	
    
    <?php include 'php/pie.php' ?> 