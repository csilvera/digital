$(document).ready(function(){
    var m = 0;
    $('#idioma').on('change', function(e){
        e.preventDefault();
        var n = $('.idioma-opc').val();
        window.location = n;
    });
    $('#cl-mn').on('click', function(e){
        e.preventDefault();
        var n = $('.idioma-opc').val();
        if(m == 0){
           $('.Despl-menu').animate({left:'0%'},'show');
            m = 1;
        }
        else{
           $('.Despl-menu').animate({left:'-30%'},'show');
            m = 0;
        }
    });
    $('#IniciaSesion').on('submit', function(e){
        e.preventDefault();
		var n = $("#Usuario").val();
		
		if(n.length === 0 && n.length < 2){
		   $('#Alertas').empty();
		   $('#Alertas').append(`<div class="conexion alert alert-danger">
					   <i class="ico-excla"></i>
					   <div class="text-inter">Complete el campo usuario correctamente.</div>
					</div>`);
		}
		else{
			var user = localStorage.setItem("user", n);
		}
        
		
    });
});