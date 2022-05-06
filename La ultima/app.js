document.getElementById('formulario').addEventListener('submit', function(e) {

    e.preventDefault();

    let formulario = new FormData(document.getElementById('formulario'));

    fetch('registrar.php',{
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if (data == 'true') {

            document.getElementById('BD_name').value ='';
            document.getElementById('BD_password').value ='';
            alert('El usuario se ha registrado correctamente');
            
        }else{
            console.log(data);
        }
    })

});