jQuery(document).ready(function(){
	
	jQuery("#telefono").mask("(99) 9999-9999");
    
    jQuery.validator.addMethod("textonly", function(value) {
            return String(value).match(/^[a-zA-Z\sáéíóúAÉÍÓÚÑñüÜ]+$/);
        }, 'Ha introducido un caracter inválido'
    );
		
    jQuery("#formPaso1").validate({
            rules: {
                "categoria": {
                    required: true
                },
                "nombre": {
                    required: true,
                    'textonly' : true
                },
                "apellidoP": {
                    required: true,
                    'textonly' : true
                },
                "correo": {
                    required: true,
                    email: true
                },
                'email': {
                    required: true,
                    email: true
                },
                'telefono': {
                    required: true
                },
                'codigoPostal': {
                    required: true,
                    digits: true,
                    minlength: 5,
                    maxlength: 5
                },
                'estado':{
                    required: true
                },
                'municipio': {
                    required: true
                },
                'tipoContratante' : {
                	required: true
                },
                'numeroAlumnos' : {
                	required: true,
                	digits: true,
                	range: [1, 500]
                },
                'montoMaximoAlumno': {
                	required: true
                },
                'numeroHabitaciones':{
                	required: true,
                	digits: true,
                	range: [1, 200]
                }
                
            },
            messages: {
                categoria: "Seleccione el giro del inmueble.",
                nombre: "Escriba su nombre",
                apellidoP: "Escriba su apellido paterno",
                correo:{
                    required: "Escriba su dirección de correo electrónico",
                    email: "Escriba una dirección de correo válida"
                },
                telefono: "Proporcione su número de teléfono",
                codigoPostal: {
                    required: "El código postal es obligatorio",
                    digits: "Escriba solo números en el código postal",
                    minlength: "El código postal debe ser de 5 dígitos" 
                },
                estado: "El estado es obligatorio",
                municipio: "El municipio es obligatorio",
                tipoContratante: "Responda si es usted dueño de las instalaciones",
                numeroAlumnos: {
                	required: "Especifique el número de alumnos",
                	digits: "Escriba un valor numérico en el número de alumnos",
                	range: "El número de alumnos sobrepasa a la estimación (mín. 1 máx. 500)"
                },
                montoMaximoAlumno: "Especifique el monto máximo a cubrir por alumno",
                numeroHabitaciones: {
                	required: "Especifique el número de habitaciones",
                	digits: "Escriba un valor numérico en el número de habitaciones",
                	range: "El número de habitaciones sobrepasa a la estimación (mín. 1 máx. 200)"
                } 
            },
  			errorLabelContainer: "#errors ul",
  			errorElement: 'li',
        });
            
            jQuery("#categoria").change(function(){
            	if(jQuery(this).val() === "salon_fiestas"){
            		jQuery("#datos_salon").css("display", "block");
            		jQuery("#datos_escuela").css("display", "none");
            		jQuery("#datos_restaurante").css("display", "none");
            		jQuery("#datos_hotel").css("display", "none");
            		jQuery("#giroI").html("Salón de fiestas");
            	}
            	else if(jQuery(this).val() === "escuela"){
            		jQuery("#datos_salon").css("display", "none");
            		jQuery("#datos_escuela").css("display", "block");
            		jQuery("#datos_restaurante").css("display", "none");
            		jQuery("#datos_hotel").css("display", "none");
            		jQuery("#giroI").html("Escuela/Colegio");
            	}
            	else if(jQuery(this).val() === "restaurante"){
            		jQuery("#datos_salon").css("display", "none");
            		jQuery("#datos_escuela").css("display", "none");
            		jQuery("#datos_restaurante").css("display", "block");
            		jQuery("#datos_hotel").css("display", "none");
            		jQuery("#giroI").html("Restaurante");
            	}
            	else if(jQuery(this).val() === "hotel"){
            		jQuery("#datos_salon").css("display", "none");
            		jQuery("#datos_escuela").css("display", "none");
            		jQuery("#datos_restaurante").css("display", "none");
            		jQuery("#datos_hotel").css("display", "block");
            		jQuery("#giroI").html("Hotel");
            	}
            	else{
            		jQuery("#datos_salon").css("display", "none");
            		jQuery("#datos_escuela").css("display", "none");
            		jQuery("#datos_restaurante").css("display", "none");
            		jQuery("#datos_hotel").css("display", "none");
            		jQuery("#giroI").html("");
            	}
            	
            	
            	
            });
});