$(function() {

//Cambio de modelo entre Hendrickson y National
    $('.modelo').change(function(){
            var modelo = ($(this).val());
            $("input#hendrix").val('Hendrickson');

            if(modelo == 'TPM-AF-HENDRIKSON'){

                $('input#hendrix').attr('value','Hendrickson');

            }else{
                $("input#hendrix").val('');
                $('input#hendrix').attr('value','');
            }
        }

    )
        .change();

    //Cambio de suspencion en Caja seca 53 solo para caja seca

    $('.caja_seca').change(function(){
       var caja53 = ($(this).val());
        console.log(caja53);
        if(caja53 == "CAJA SECA 53'"){
            $("input.deslizable").removeAttr('style').val('Deslizable');
        }else{
            $("input.deslizable").val('');
        }
    })
        .change()
    ;

    $(".plataforma").change(function(){
       var plataforma = ($(this).val());

        switch(plataforma) {
            case "PLATAFORMA DE 30'":
                $(".largo-plataforma").val('9.144mts');
                break;
            case "PLATAFORMA DE 35'":
                $(".largo-plataforma").val('10.67mts');
                break;
            case "PLATAFORMA DE 38'":
                $(".largo-plataforma").val('11.58mts');
                break;

            case "PLATAFORMA DE 40'":
                $(".largo-plataforma").val('12.192mts');
                break;

            case "PLATAFORMA DE 42'":
                $(".largo-plataforma").val('12.80mts');
                break;
            case "PLATAFORMA DE 45'":
                $(".largo-plataforma").val('13.716mts');
                break;
            case "PLATAFORMA DE 48'":
                $(".largo-plataforma").val('14.63mts');
                break;

        }
    }) .change();

    $('.volteo').change(function(){
        var volteo = ($(this).val());

        if(volteo == 'VOLTEO ACERO AL CARBON 24mts3' || volteo == 'VOLTEO ACERO INOX 24mts3' || volteo == 'VOLTEO HARDOX 24mts3'){
            $('.largo_volteo').val('7.31mts');
        }else{
            $('.largo_volteo').val('9.144mts');

        }

    }).change();

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

	
$('input,textarea').attr('size',5);
$('input.input-xlarge').attr('size',20);
// from http://www.mediacollege.com/internet/javascript/number/round.html
function roundNumber(number,decimals) {
  var newString;// The new rounded number
  decimals = Number(decimals);
  if (decimals < 1) {
    newString = (Math.round(number)).toString();
  } else {
    var numString = number.toString();
    if (numString.lastIndexOf(".") == -1) {// If there is no decimal point
      numString += ".";// give it one at the end
    }
    var cutoff = numString.lastIndexOf(".") + decimals;// The point at which to truncate the number
    var d1 = Number(numString.substring(cutoff,cutoff+1));// The value of the last decimal place that we'll end up with
    var d2 = Number(numString.substring(cutoff+1,cutoff+2));// The next decimal, after the last one we want
    if (d2 >= 5) {// Do we need to round up at all? If not, the string will just be truncated
      if (d1 == 9 && cutoff > 0) {// If the last digit is 9, find a new cutoff point
        while (cutoff > 0 && (d1 == 9 || isNaN(d1))) {
          if (d1 != ".") {
            cutoff -= 1;
            d1 = Number(numString.substring(cutoff,cutoff+1));
          } else {
            cutoff -= 1;
          }
        }
      }
      d1 += 1;
    }
    if (d1 == 10) {
      numString = numString.substring(0, numString.lastIndexOf("."));
      var roundedNum = Number(numString) + 1;
      newString = roundedNum.toString() + '.';
    } else {
      newString = numString.substring(0,cutoff) + d1.toString();
    }
  }
  if (newString.lastIndexOf(".") == -1) {// Do this again, to the new string
    newString += ".";
  }
  var decs = (newString.substring(newString.lastIndexOf(".")+1)).length;
  for(var i=0;i<decimals-decs;i++) newString += "0";
  //var newNumber = Number(newString);// make it a number if you like
  return newString; // Output the result to the form field (change for your purposes)
}
    function update_price(itemRow) {
      var row;
      if($(itemRow).hasClass('item-row')){
        // if called directly
        row = $(itemRow)
      } else {
        // if called from blur
        row = $(this).parents('.item-row');
      }

        var precio = row.find('.cost').val();
        if(row.find('.cost').val() == ''){
            precio = 0;
        }
        var price  = row.find('.cost').val().replace("$","") * 0.16;

        price = roundNumber(price,2);
        isNaN(price) ? row.find('.price').html("N/A") : row.find('.price').val(price);

        var iva = parseFloat(precio) + parseFloat(price);
        iva = roundNumber(iva,2);
        isNaN(iva) ? row.find('.iva').html("N/A") : row.find('.iva').val(iva);

     //update_total();
        var precio_cotiza = parseFloat($('#cantidad_precio').val());
            $("input#precio_cotiza").val(parseFloat(precio_cotiza).toFixed(2));

        var cantidad_opc = 0;
            $('.opc').each(function(k,v) {
                cantidad_opc += parseFloat($(this).val() || 0);
            });

          $('#total_opcionales').val(cantidad_opc.toFixed(2));

          var cantidad_iva = 0;


             $('.iv').each(function(k,v) {
                cantidad_iva += parseFloat($(this).val() || 0);
            });
         //   console.log(cantidad_iva);

         $('#total_iva').val(cantidad_iva.toFixed(2));
         $('#total_total').val((precio_cotiza + cantidad_opc + cantidad_iva).toFixed(2));

    }


        function bind() {
          $("body").on('keyup', '.cost, .iva, .price, .iv, .opc', update_price);
        }

        $(document).ready(function() {

          $('input').click(function(){
            $(this).select();
          });



          bind();

        });
							         

        $('#porcentaje').change(function() {

            var total_total = parseFloat($('#total_total').val());
            var porcentaje  = parseFloat($('#porcentaje').val());
            var porcentaje2 = parseFloat($('#porcentaje2').val());
            var fifty2      = parseFloat($("#fifty2").val());
            //  console.log(fifty2);
            // iva = roundNumber(iva,2);
            $("#fifty").val((total_total * porcentaje).toFixed(2));

            var fifty       = parseFloat($("#fifty").val());

            $("#porcentaje2").val(((1-porcentaje)*100).toFixed(0));
            $("#fifty2").val(parseFloat(total_total - fifty).toFixed(2));

            if($("input").attr('disabled', 'disabled')){
            $("input").removeAttr("disabled");
            //$("input").addAtrr("readonly");
            }else{
            //$("input").addAtrr("readonly");
            }
        });

});




