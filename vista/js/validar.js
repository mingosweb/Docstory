$(document).ready(
    function(){
        /*$("#formLogin").validate({
            rules: {
                usuario: { required: true},
                password: {required: true}
            },
            messages: {
                usuario: "campo vacio",
                password: "campo vacio"
            }
        } 
        );*/
        
        $("#formRegistro").validate({
            rules: {
                usuario: { required: true},
                password: {required: true},
                apellido: {required: true},
                nombre: {required: true}
            },
            messages: {
                usuario: "campo vacio",
                password: "campo vacio",
                apellido: "campo vacio",
                nombre: "campo vacio"
            }
        } 
        );
        
    }
);