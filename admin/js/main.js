$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
       "columnDefs":[{
        "targets": -1
        
          
       }],
        
    "language": {
            "lengthMenu":"Mostrar registros _MENU_ ",
            "zeroRecords":"No se encontraron resultados",
            "info":"Registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Registros del 0 al 0 de un total de 0 registros",
            "infoFiltered":"(filtrado de un total de _MAX_ registros)",
            "sSearch":"Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious":"Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo usuario");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
}); 
$("#btnEditar").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar usuario");            
    $("#modalCRUD2").modal("show");        
    id=null;
    opcion = 2; //editar
}); 
$("#btborrar").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Borrarusuario");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 3; //borrar
});  
  
    
});


function confirmacion(e){
if(confirm("¿Esta seguro que desea eliminar este registro?")){
    return true;
}else{
    e.preventDefault();
    
}

}
let linkDelete= document.querySelectorAll(".bt");
for (var i = 0; i< linkDelete.length; i++){
    linkDelete[i].addEventListener('click',confirmacion);
}