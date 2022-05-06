const cambio = document.getElementById('cambio');
let ubicacionPrincipal = window.pageYOffset; //0

  AOS.init();


cambio.addEventListener('click', (e) => {
   
   if(e.target && e.target.tagName === 'button' ){
    
    e.target.classList.toggle('activo')
   }
})




window.addEventListener("scroll", function(){
    let desplazamientoActual = window.pageYOffset; //180
    if(ubicacionPrincipal >= desplazamientoActual){ // 200 > 180
        document.getElementsByTagName("nav")[0].style.top = "0px"
    }else{
        document.getElementsByTagName("nav")[0].style.top = "-100px"
    }
    ubicacionPrincipal= desplazamientoActual; //200

})

// Menu caracteristicas

let enlacesHeader = document.querySelectorAll(".enlaces-header")[0];
let semaforo = true;

document.querySelectorAll(".hamburguer")[0].addEventListener("click", function(){
    if(semaforo){
        document.querySelectorAll(".hamburguer")[0].style.color ="#fff";
        semaforo= false;
    }else{
        document.querySelectorAll(".hamburguer")[0].style.color ="#000";
        semaforo= true;
    }

    enlacesHeader.classList.toggle("menudos")
})

function forma(sw){
   var pic;
   if (sw ==0){
       pic = "img/meseta1.png"}


    if (sw ==1){
         pic = "img/meseta2.png"}    

    if (sw ==2){
     pic = "img/meseta3.png"}
  
   
   document.getElementById('formas').src = pic;
   }
   function foto(){
    var elemento=document.getElementById("zocalo");
    elemento.src ="/img/cantolargo1.png"

   }
   function mate(sw){
      var pic;
      if (sw ==0){
        pic = "img/mesetagr.png"}
 
 
     if (sw ==1){
          pic = "img/mesetagra1.png"}     
   
       if (sw ==2){
        pic = "/img/forma\ U.png"}
     
      
      document.getElementById('formas').src = pic;
      }

      
       
      var dato1=document.getElementById('dat-1')

      dato1.addEventListener("clik",clicked);
      function clicked(){
          alert('has hecho click ');
      }
        
         
         
         function zocalo(sw){
            var pic;
            if (sw ==0){
                pic = "/img/forma\ I.png"}
         
         
             if (sw ==1){
                  pic = "/img/forma\ L.png"}    
         
             if (sw ==2){
              pic = "/img/forma\ U.png"}
           
            
            document.getElementById('zocalo').src = pic;
            }
           
               function hueco(sw){
                  var pic;
                  var hu;
                  if (sw ==0){
                      pic = "/img/forma\ I.png"
                    
                        return hu=1; 
                    }
               
                 
                  
                  document.getElementById('hueco').src = pic;
                  }

           function calculomeseta1(){
                var mes1;
                var mes2;
                    mes1 = document.getElementById("largo");
                    var mx = mes1.value;
                    alert(mx);
                    mes2 = document.getElementById("ancho");
                    var my = mes2.value;
                    alert(my);

                    
                    // sin zocalo y canto
                    
                        document.getElementById('result').innerHTML=mx*my
                        }


                        function calculomeseta2(){
                            var mes1;
                            var mes2;
                                mes1 = document.getElementById("largo");
                                var mx =parseFloat(mes1.value) ;
                                
                                mes2 = document.getElementById("ancho");
                                var my =parseFloat(mes2.value) ;
                                var t1=parseFloat(0.10);
                                var t2=parseFloat(0.05);
                                var t4=parseInt(850);
                                var c1= parseFloat(mx+t1+t2);
                                var c2=parseFloat(my+t1+t2);
                                var c3=parseFloat(c1*c2);
                                c3=parseFloat(c3*10.76);
                                c3=parseFloat(c3*t4);
                                

                                
                                // con 2 zocalo y 2 canto
                                
                                    document.getElementById('result').innerHTML=c3
                                    
                                    }




                                   



var img = document.getElementById("imagen");
var amarillo = document.getElementById("amarillo");
var verde = document.getElementById("verde");
var rojo = document.getElementById("rojo");

amarillo.onclick = function(){
    img.src="img/1.jpg";
    document.getElementById("card").style.background="linear-gradient(90deg,#c5a609,#fcd926,#ffe149)";
}
verde.onclick = function(){
    img.src="img/1.jpg";
    document.getElementById("card").style.background="linear-gradient(90deg,#298b02,#3acf00,#68ff2d)";
}
     
rojo.onclick = function(){
    img.src="img/1.jpg";
    document.getElementById("card").style.background="linear-gradient(98def,#c5a609,#fcd926,#ffe149)";
}
     
                 
                 
                    
                    

