$(function (){
	$('.btn_show').click(function(ev){
		ev.preventDefault();
		$('#contenido').slideToggle("slow");
	});
})

