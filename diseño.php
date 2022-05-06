<?php include 'php/cabeza.php' ?> 

        <div class="contenedor-p">
            <section class="contenidor-pd">
                <section class="text-header">
                    <h1>Diseño</h1>
    
                </section>
            
            </section>
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



      <section class="banner">
            <h3>MESETA OPCIONES</h3>

              <div class="accordion-item mb-2">
                <h2 class="accordion-header mb-0" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    TIPOS DE MESETA
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ul class="menu">
                      <li>
                      
                        <button  onclick="forma(0)" id="dat-1" class="boton2 img-selec " style="background-image: url(img/12.png);"></button>
                        <button  onclick="forma(1)" id="dat1" class="boton2 img-selec " style="background-image: url(img/13.png);"></button>
                        <button  onclick="forma(2)" id="dat1" class="boton2 img-selec " style="background-image: url(img/14.png);"></button>
                      </li>
                  </ul>

                  </div>



                </div>

                
              </div>
              <div class="accordion-item mb-2">
                <h2 class="accordion-header mb-0" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    TIPOS DE MESETA
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ul class="menu">
                      <li>
                      
                        <button  onclick="mate(0)" id="dat2" class="boton2 img-selec " style="background-image: url(img/granito.jpg);"></button>
                        <button  onclick="mate(1)" id="dat2" class="boton2 img-selec " style="background-image: url(img/marmol.jpg);"></button>
                        
                      </li>
                  </ul>

                  </div>



                </div>

                
              </div>
              <div class="accordion-item mb-2">
                                  <h2 class="accordion-header mb-0" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        MEDIDAS DE LA MESETA
                                    </button>
                                  </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <div class="col mb-3">
                                      <label for="exampleFormControlInput1" class="form-label">Largo(mt)</label>
                                      <input type="number" name="mx" id="largo">
                                    </div> 
                                    <div class="col mb-3">
                                      <label for="exampleFormControlInput1" class="form-label">Ancho(mt)</label>
                                      <input type="number" name="my"  id="ancho">
                                   </div>
                                   <div class="col mb-2">
                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="zoc">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Zocalos</label>
                                        
                                      </div>
                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="cant">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Canto</label>
                                        
                                      </div>
                                    </div>
                                      
                                    <p>El presupuesto es:<span id="result"></span></p>
                                    <button onclick="calculomeseta2()" type="button" >calcular</button>
                                </div>
                              </div>
                            </div>



                          
 <!--
                            <div class="accordion-item mb-2">
                            <h2 class="accordion-header mb-0" id="headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                TIPOS DE ZOCALO
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                              <div class="accordion-body">

                                
                                <ul class="menu">
                                  <li>
                
                                    <button  onclick="zocalo(0)" class="boton2 img-selec" style="background-image: url(/img/cantop.png);"></button>
                                    <button onclick="zocalo(1)" class="boton2 img-selec" style="background-image: url(/img/cantolargo.png);"></button>
                                  
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>


                          <div class="accordion-item mb-2">
                                 <h2 class="accordion-header mb-0" id="headingFive">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                     TIPO DE CANTO
                                   </button>
                                  </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <ul class="menu">
                                      <li>
                
                                        <button  onclick="canto(0)" class="boton2 img-selec" style="background-image: url(/img/cantop1.png);"></button>
                                        <button  onclick="canto(1)" class="boton2 img-selec" style="background-image: url(/img/cantolargo1.png);"></button>
                                  
                                      </li>
                                   </ul> 
                                  </div>
                             </div>
                            </div>



                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header mb-0" id="headingSix ">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    HUECO
                                  </button>
                                </h2>
                              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <ul class="menu">
                                    <li>
                
                                      <button onclick="hueco(0)" class="boton2 img-selec" style="background-image: url(/img/hueco.png);"></button>
                                  
                                    </li>
                                  </ul>
                                </div>
                            </div>
                          </div>
                          -->
                          

                            <button  id="dat1" value="" class="c-button f-primary">Continuar</button>




             </div>






                              













         </div>        

                            
                           
                          
                
                          
                
                            



                          




      </section>
















    </div>
             








    
      

      
     
   
   
 
    

		
    <?php include 'php/pie.php' ?> 