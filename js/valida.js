$(document).ready(function() {     

$(#registro).validate({
        rules: {
            nombre: { required: true, minlength: 6, maxlength: 30},
			nickname: { required: true, minlength: 4, maxlength: 10},
			password: { required: true, minlength: 6, maxlength: 10 },
			repassword: { required: true, minlength: 6, maxlength: 10, equalTo: "#password"},
            email: { required:true, email: true},
            fecha:{required:true, date: true}
        },
        messages: {
            nombre: {required: "Debe introducir su nombre.", minlength: "El nombre debe tener como minimo 6 letras", maxlength: "El nombre debe tener como maximo 30 letras"},            
            nickname : { required: "Debe introducir un nombre de usuario", minlength: "El nickname debe tener como minimo 4 letras", maxlength: "El nickname debe tener como maximo 10 letras"}, 
			password: { required: "Ingrese un password", minlength: "El password debe tener como minimo 6 carateres", maxlength: "El password debe tener como maximo 10 carateres" },
			repassword: { required: "Reingrese un password", minlength: "El password debe tener como minimo 6 carateres", maxlength: "El password debe tener como maximo 10 carateres", equalTo: "Los password introducidos no  coinciden"},
            fecha : {required:"Debe introducir una fecha de nacimiento", date: "Debe introducir una feca de nacimiento valida"}
        }
    });

  }); 
