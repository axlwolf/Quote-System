$(document).ready(function () {

    //
    $('#enviar').click(function () {
    var contacto         = $('#contacto').val();
    var email 	 		 = $('#email').val();
    var precio_cotiza 	 = $('#precio_cotiza').val();
    var dias 			 = $('#dias').val();
    if(contacto == '' && email == '' && precio_cotiza == '' && dias == ''){
    $("#errores").append('<label class="label-danger" style="color:white ">No puedes enviar el formulario si los campos de  nombre de contacto o email estan vacios</label>').fadeIn(1500);
    } else {

        var post_data = $('input[type=text], input[type=number],input[type=hidden], select').change(function () {



        });


    console.log(post_data);
    $.ajax({
    type: 'POST', //Definimos el tipo de verbo de envio de datos por HTTP
    url: 'indexc.php', //El archivo que preocesará la información
    data: post_data, //Nuestro objeto de datos
    encode: true,
    success: function () {
    $('#formulario').html("<div id='message'></div>");
    $('#message').html("<h2>Cotización enviada y guardada en la base de datos</h2>")
    .append("<p>Gracias!!.</p>")
    .hide()
    .fadeIn(1500, function () {
    $('#message').append("<img id='checkmark' src='img/check.png'/>");
    });
    setTimeout("location.href='http://localhost/cotizador_trapmsa/admin/cotizaciones.php'", 4000);
    //setTimeout("location.href='http://cotizaciones-trapmsa.com.mx/admin/cotizaciones.php'", 4000);

    }

    });

    return false;
    }
    });



});