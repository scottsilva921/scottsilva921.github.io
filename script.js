var cont = 0;

function barsX(x) {
	x.classList.toggle("change");
	cont+=1;
	}

			/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
	if (cont%2==0){
		document.getElementById("mySidenav").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";
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
	document.body.style.backgroundColor = "white";
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
