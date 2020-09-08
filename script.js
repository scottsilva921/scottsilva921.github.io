var cont = 0;

function barsX(x) {
	x.classList.toggle("change");
	cont+=1;
	}

			/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
	if (cont%2==0){
		document.getElementById("mySidenav").style.width = "300px";
		document.getElementById("main").style.marginLeft = "300px";
		document.body.style.backgroundColor = "#A9A9A9";
		document.getElementById("main").style.filter = "grayscale(90%)";
	}
	else {
		document.getElementById("main").style.filter = "grayscale(0%)";
		closeNav();
	}
	}

			/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft = "0";
	document.body.style.backgroundColor = "#000000";
	}



/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function Dropdown(e) {
	
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('#b')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function imgHover(){
	document.getElementById("w1").innerHTML = "<img id='play' src=https://image.flaticon.com/icons/png/512/0/375.png>";
}

function imgOut(){
	var o = document.getElementById("play");
	o.remove();
}

function filmeOver(i, f, c, s){

	document.getElementById(i).style.height="230px";

	
	document.getElementById(f).style.transition="0.3s ease";
	document.getElementById(f).style.opacity="50%";


	document.getElementById(c).style.top="81%";
	document.getElementById(c).style.transition="0.3s ease";
	document.getElementById(c).style.visibility="visible";

	/*
	document.getElementById(s).style.top="3%";
	document.getElementById(s).style.transition="0.3s ease";
	document.getElementById(s).style.visibility="visible";
	*/

	

}

function filmeOut(i, f, c, s){
	document.getElementById(i).style.height="220px";

	document.getElementById(f).style.opacity="100%";

	
	document.getElementById(c).style.transition="0.1s";
	document.getElementById(c).style.visibility="hidden";

	document.getElementById(s).style.top="50%";
	document.getElementById(s).style.transition="0.1s";
	document.getElementById(s).style.visibility="hidden";
}

function linkOver(e){
	e.innerHTML += "<img src='imagens/nomehover.png' style='position:relative; height:16px; padding-left:6px'>";
}

function linkOut(e, text){
	e.innerHTML = text;
	
}

window.onscroll = function() {tamNavBar()};

function tamNavBar(){

	toup=document.getElementById("toup")
	if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
    toup.style.display = "block";
  	}
  	else {
    toup.style.display = "none";
  	}


	
}

function stars(f,h,s){
	var left=250;
	for (var i=0;i<f;i++){
		document.getElementById(s).innerHTML+='<img class="star" src="imagens/fullstar.png" style="left:'+left+'">';
		left+=35;
	}
	if (h>0){
		document.getElementById(s).innerHTML+='<img class="star" src="imagens/halfstar.png" style="left:'+left+'">';
	}
}

function load(f,h,s){
	window.scrollTo(0,0);
	tamNavBar();
	stars(f,h,s);
}

function loadF(){
	window.scrollTo(0,0);
}

function alteraLen(id){
	document.getElementById(id).style.height="50px";
	document.getElementById(id).style.transition="0.5s";
}

function rolar(id){
	var posY = document.getElementById(id).offsetTop-15;
    window.scroll({top: posY, left: 0, behavior: 'smooth'});

}

function modal(title, direcao, duracao, genero, full, half){
	document.getElementById("tModal").innerHTML=title;

	document.getElementById("cModal").innerHTML="Direção: "+direcao+"<br>";

	document.getElementById("cModal").innerHTML+="Duração: "+duracao+"<br>";

	document.getElementById("cModal").innerHTML+="Gênero: "+genero+"<br>";

	var modal = document.getElementById("myModal");

	var btn = document.getElementById("btn");

	var span = document.getElementsByClassName("close")[0];

	modal.style.display = "block";

	var left=15;
	for (var i=0;i<full;i++){
		document.getElementById("Modal").innerHTML+='<img class="star2" src="imagens/fullstar.png" style="left:'+left+'">';
		left+=3;
	}
	if (half>0){
		document.getElementById("Modal").innerHTML+='<img class="star2" src="imagens/halfstar.png" style="left:'+left+'">';
	}

	span.onclick = function() {
		modal.style.display = "none";
		document.getElementById("Modal").innerHTML='';
		document.getElementById("cModal").innerHTML='';
	}

	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
			document.getElementById("Modal").innerHTML='';
			document.getElementById("cModal").innerHTML='';
			}
		}
}