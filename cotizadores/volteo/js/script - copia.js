$(function() {

//Cambio de modelo entre Hendrickson y National
    $('.modelo').change(function(){
            var modelo = ($(this).val());
            $("input#hendrix").val('Hendrickson');


            if(modelo == 'TPM-AF-H'){

                $('input#hendrix').attr('value','Hendrickson');

            }else{
                $("input#hendrix").val('');
                $('input#hendrix').attr('value','');
            }
        }

    )
        .change();
		
//Cambio de ejes y llantas

    $('.ejes').change(function() {
            var ejes = parseInt($(this).val());
            $("input.rines").val('8');
            $("input.llantas").val('8');
            $("input.ejes2").val('2');

            if (ejes == 2) {
                $("input.rines").val('8');
                $("input.llantas").val('8');
                $("input.ejes2").val('2');
            } else {
                $("input.rines").val('12');
                $("input.llantas").val('12');
                $("input.ejes2").val('3');
            }

        })
        .change();
		
//Sumas de importes más IVA

    $('.importeDes').keyup(function() {
		
        var importeDes = parseFloat($(this).val());
        var precio_cotiza = parseFloat($('#precio_cotiza').val());
        $("input#cantidad_precio").val(parseFloat(precio_cotiza).toFixed(2));
		
        if (!importeDes) {
            $(this).parent().find('.total').val('0');
            $(this).parent().find('.iva').val('0');
        } else {
            var iv = .16;
            var iva = parseFloat(importeDes * iv);


            $(this).parent().find('.iva').val(parseFloat(iva).toFixed(2));

            var total = parseFloat(importeDes + iva);

            $(this).parent().find('.total').val(parseFloat(total).toFixed(2));

        }
//Operaciones opcionales
        var cantidad_opc = 0;
        $('.opc').each(function(k,v) {
            cantidad_opc += parseFloat($(this).val() || 0);
        });

        var cantidad_iva = 0;
        $('.iva').each(function(k,v) {
            cantidad_iva += parseFloat($(this).val() || 0);
        });

        $('#total_opcionales').val(cantidad_opc.toFixed(2));


        $('#total_iva').val(cantidad_iva.toFixed(2));
        //console.log(cantidad_iva);


        //console.log(cantidad_opc + cantidad_iva);
        var total_total = parseFloat(importeDes + cantidad_opc + cantidad_iva).toFixed(2);

        $('#total_total').val(total_total);

    $('#porcentaje').change(function() {
         		   var total_total = parseFloat($('#total_total').val());
            var porcentaje  	= parseFloat($('#porcentaje').val());
            var porcentaje2 = parseFloat($('#porcentaje2').val());
			            var fifty2      = parseFloat($("#fifty2").val());
            				//  console.log(fifty2);
         		   // iva = roundNumber(iva,2);
            $("#fifty").val((total_total * porcentaje).toFixed(2));
          
        		    var fifty       = parseFloat($("#fifty").val());
          
											            $("#porcentaje2").val(((1-porcentaje)*100).toFixed(0));
            			$("#fifty2").val(parseFloat(total_total - fifty).toFixed(2));
          
        });




    });

});




