
document.getElementById('formulario1').addEventListener('submit', function(e) {
    e.preventDefault();

    let formulario = new FormData(document.getElementById('formulario1'));

    fetch('ingreso.php', {
        method: 'POST',
        body: formulario
    })
    .then(res=>res.json())
    .then(data => {
        if(data == 'true') {
            document.getElementById('propietarios').value = '';
            document.getElementById('direcciones').value = '';
            document.getElementById('nombre1').value = '';
            document.getElementById('cedula1').value = '';
            document.getElementById('documento').value = '';
            document.getElementById('telefono1').value = '';
            document.getElementById('email1').value = '';
            document.getElementById('name2').value = '';
            document.getElementById('cedula2').value = '';
            document.getElementById('documento2').value = '';
            document.getElementById('telefono2').value = '';
            document.getElementById('email2').value = '';
            document.getElementById('fechaContrato').value = '';
            document.getElementById('contrato').value = '';
            alert('Los datos ingresaron correctamente.');
        }else{
            console.log(data);
        }
  
        });


    });

