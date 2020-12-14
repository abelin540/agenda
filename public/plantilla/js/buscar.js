

$(document).on("ready",inicio);
function inicio(){
    $("form").submit(function (event){
        alert("estoy aqui");
        event.preventDefault();
    });
}



function mostrardatos(valor){}



$.ajax({
    url:"http://localhost/agenda/public/home/mostrar",
    type:"POST",
    data:{buscar:valor},
    success:function(respuesta){
alert(respuesta)
    }
});
