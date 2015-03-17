

$(function() {

    $('#precio_cotiza').keyup('blur', function() {
        var precio_cotiza = parseFloat($(this).val());

        $("input#cantidad_precio").val(precio_cotiza);

    });

    //Cambio de ejes y llantas

    $('.ejes').change(function() {
            var ejes = parseInt($(this).val());
            $("input.rines").val('8');
            $("input.llantas").val('8');

            if (ejes == 2) {
                $("input.rines").val('8');
                $("input.llantas").val('8');
            } else {
                $("input.rines").val('12');
                $("input.llantas").val('12');
            }

        })
        .change();



    //Sumas de importes más IVA

    $('.importeDes').keyup('blur', function() {
        //Evaluamos el precio del vehiculo
        var importeDes = parseFloat($(this).val());
        //var iva;
        //var total;
        if (!importeDes) {

            /*
                Si el precio del vehiculo no esta definido, iva y total los evaluamos a 0
             */
            $(this).parent().find('.total').val('0');
            $(this).parent().find('.iva').val('0');
        } else {
            var iv = .16;
            var iva = parseFloat(importeDes * iv);


            $(this).parent().find('.iva').val(parseFloat(iva).toFixed(2));

            var total = parseFloat(importeDes + iva);

            //console.log( total );

            $(this).parent().find('.total').val(parseFloat(total).toFixed(2));

        }

        var cantidad_opc = 0;
        $('.opc').each(function() {
            cantidad_opc += parseFloat($(this).val() || 0);
        });

        $('#total_opcionales').val(cantidad_opc);
        //console.log( cantidad_opc );



        var cantidad_iva = 0;
        $('.iva').each(function() {
            cantidad_iva += parseFloat($(this).val() || 0);
        });


        $('#total_iva').val(cantidad_iva.toFixed(2));
        //console.log(cantidad_iva);


        //console.log(cantidad_opc + cantidad_iva);

        $('#total_total').val((importeDes + cantidad_opc + cantidad_iva).toFixed(2));


        $('#porcentaje').change(function() {
            var porcentaje 	= parseFloat($('#porcentaje').val());
            var porcentaje2 = parseFloat($('#porcentaje2').val());
            var total_total = parseFloat($('#total_total').val());

            $("#fifty").val((total_total * porcentaje).toFixed(2));

            if (porcentaje == 0.2) {
                $("#porcentaje2").val(80);
                $("#fifty2").val((total_total * (porcentaje2/100)).toFixed(2));

            }

            if (porcentaje == 0.3) {
                $("#fifty2").val((total_total *(porcentaje2/100)).toFixed(2));
                $("#porcentaje2").val(70);
            }

            if (porcentaje == 0.4) {
                $("#fifty2").val((total_total * (porcentaje2/100)).toFixed(2));
                $("#porcentaje2").val(60);
            }
            if (porcentaje == 0.5) {
                $("#fifty2").val((total_total * (porcentaje2/100)).toFixed(2));
                $("#porcentaje2").val(50);
            }
            if (porcentaje == 0.6) {
                $("#fifty2").val((total_total * (porcentaje2/100)).toFixed(2));
                $("#porcentaje2").val(40);
            }
            if (porcentaje == 0.7) {
                $("#fifty2").val((total_total * (porcentaje2/100)).toFixed(2));
                $("#porcentaje2").val(30);
            }



            //console.log(total_total * porcentaje);

        });



    });

});


