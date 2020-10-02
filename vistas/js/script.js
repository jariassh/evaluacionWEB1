$(function (){
	$('.btn_show').click(function(ev){
		ev.preventDefault();
		$('#contenido').slideToggle("slow");
	});
})


var txtAltura = document.getElementById('txtAltura1');

txtAltura.addEventListener('keyup', () =>{
    var txtValor = txtAltura.value;
    document.getElementById('txtAltura2').value = txtValor;
});

