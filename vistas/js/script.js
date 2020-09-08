var menu = document.getElementById("menu");
var menu2 = document.getElementById("menuOculto");

menu.addEventListener('click', function Mostrar(){
	if (menu2.style.display == "none") {
		menu2.style.display = "block";
		menu.getElementsByTagName('a').addclass('active');
	}else{
		menu2.style.display = "none";
		menu.getElementsByTagName('a').addclass('active');
	}
})


