<html>

	<head>

		<title>Scott Filmes - In&iacute;cio</title>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		
		<link rel="stylesheet" type="text/css" href="style.css">

		<script type="text/javascript" src="script.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" href="imagens/iconscott.png" type="image/jpg">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script src="https://code.jquery.com/jquery-3.5.0.js"></script>


	</head>

	<body onload="load(4,1,'stars')">

		<div id="myModal" class="modal">

			<div class="modal-content">
				<div class="modal-header">
					<span class="close">&times;</span>
					<h2 id="tModal" style="text-align: center"></h2>
					<hr/>
				</div>
				<div id="Modal" style="text-align: center; padding-top: 10px; padding-bottom: 20px"></div>

				<div class="coluna2">
					<div id="imgModal" class="modal-body"></div>

					<div id="cModal" class="modal-body"></div>
				</div>

				<div id="fModal" class="modal-footer"></div>

			</div>

		</div> 

		<!-- <div id="mySidenav" class="sidenav">
			<img id="imglogo" src="imagens/logoscott.png">
			<a href="topimdb.html">Top IMDb</a>
			<a href="#">Top Metacritic</a>
			<a href="topnetflixoriginal.html">Top Netflix Original</a>
			<a href="recomendacoes.html">Recomendados por Scott</a>
		</div> -->


	<div id="main">

		<!--<div id="idHead" class="divHead1">
			<img id="imglogo" src="imagens/logoscott.png">-->

		<div class="parallax" style="background-image: url('imagens/era-uma-vez-em-hollywood-bg.jpg');"></div>
		<a href="https://scottsilva921.cincopa.com/watch/A4HAcLOLOO68!AsID8hk7PIz5" target="_blank"><img class="play1" src="imagens/play2.png"></a>
		<div class="filmeDestaque">Era Uma Vez Em... Hollywood</div>
		<div class="filmeDestaque2">2019</div>
		<div id="stars"></div>
		<div class="filmeDestaque2" style="top: 585px; left: 80%; font-size: 22px">By Quentin Tarantino</div>

			<!-- <div class="container" onclick="openNav();barsX(this)">
	  			<div class="bar1"></div>
	  			<div class="bar2"></div>
	  			<div class="bar3"></div>
			</div> -->

			<div class="container">
				<img id="imglogo" src="imagens/logoscott.png">
			</div>

			<div class="container" style="left: 75%; top: 10px; float: right; font-size: 20px; padding: 20px">
	  			<span style="padding-right: 20px"><a id="linkH" href="index.html" style="color:#B22222; border-bottom:1.5px solid #B22222;">Home</a></span>

	  			<span class="dropdown" style="padding-right: 20px">
	  				<a id="linkH" href="filmes.html">Categorias</a>
	  				<div class="dropdown-content">
						<a href="#">Ação</a>
						<a href="#">Animação</a>
						<a href="#">Comédia</a>
						<a href="#">Drama</a>
						<a href="#">Ficção Científica</a>
						<a href="#">Suspense</a>
						<a href="#">Terror</a>
						<a href="#">Western</a>
					</div>
	  			</span>

	  			<span class="dropdown">
	  				<a id="linkH" href="series.html">Listas</a>
	  				<div class="dropdown-content" style="right:0;">
						<a href="#">DreamWorks</a>
						<a href="#">Monty Python</a>
						<a href="#">Netflix Originals</a>
						<a href="#">Top IMDb</a>
						<a href="#">Top Metacritic</a>
						<a href="#">Trilogia Cornetto</a>
					</div>
	  			</span>

			</div>

			<div class="container" style="left: 93%; float: right">
	  			
			</div>

		<div id="idNav1" class="nav1">

				<div class="div3">
					<a class="linkC" href="#!" onclick="rolar('acao')">Ação</a>
					<a class="linkC" href="#!" onclick="rolar('animacao')">Animação</a>
					<a class="linkC" href="#!" onclick="rolar('comedia')">Comédia</a>
					<a class="linkC" href="#!" onclick="rolar('drama')">Drama</a>
					<a class="linkC" href="#!" onclick="rolar('dreamworks')">DreamWorks</a>
					<a class="linkC" href="#!" onclick="rolar('fcientifica')">Ficção Científica</a>
					<a class="linkC" href="#!" onclick="rolar('montypython')">Monty Python</a>
					<a class="linkC" href="#!" onclick="rolar('netflix')">Netflix Orignals</a>
					<a class="linkC" href="#!" onclick="rolar('terror')">Terror</a>
					<a class="linkC" href="#!" onclick="rolar('tcornetto')">Trilogia Cornetto</a>
					<a class="linkC" href="#!" onclick="rolar('western')">Western</a>
				</div>

		<div class="coluna">
			<div id="pages">
				<div id="div1">
					<h1 class="title"><a id="linkD" href="recomendacoes.html" target="_blank"><a id="linkD" href="recomendacoes.html">Scott Recomenda</h1>
					<div class="slideshow-container">

						<div id="slides1" class="mySlides">
						<div class="tooltip1">
							<div class="container1" onmouseover="filmeOver('capas33','f33', 'c33', 's33')" onmouseout="filmeOut('capas33','f33', 'c33', 's33')">
								<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AEFDgmUFT-oL" target="_blank"><div class="cImagem" id="f33"><img id="capas33" class="capas" src="imagens/2001-uma-odisseia-no-espaco.jpg" alt="2001: Uma Odisséia No Espaço"></div></a><div class="text">2001: Uma Odisséia No Espaço</div><div class="text2">(1968)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AEFDgmUFT-oL" target="_blank"><img id="play" src="imagens/play.png"></a></div><br>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('2001: Uma Odisséia No Espaço (1968)','Stanley Kubrick', '2h29m','Ficção científica/Aventura', 5, 0, '2001-uma-odisseia-no-espaco.jpg')"></div>
								</div>

							</div>
						</div>

						<div class="tooltip1">
								<div class="container1" onmouseover="filmeOver('capas24','f24', 'c24', 's24')" onmouseout="filmeOut('capas24','f24', 'c24', 's24')">
								<a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!A8PDJjUrKVn6" target="_blank"><div class="cImagem" id="f24"><img id="capas24" class="capas" src="imagens/mp-em-busca-do-calice-perdido.jpg" alt="Monty Python"></div></a><div class="text">M.P. Em Busca do Cálice Sagrado </div><div class="text2">(1975)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!A8PDJjUrKVn6" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Monty Python: Em Busca do Cálice Perdido (1975)','Terry Gilliam, Terry Jones', '1h32m','Comédia/Fantasia', 5, 0, 'mp-em-busca-do-calice-perdido.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip1">
								<div class="container1" onmouseover="filmeOver('capas25','f25', 'c25', 's25')" onmouseout="filmeOut('capas25','f25', 'c25', 's25')">
								<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AUDDjlUWl8Ie" target="_blank"><div class="cImagem" id="f25"><img id="capas25" class="capas" src="imagens/mp-a-vida-de-brian.jpg" alt="Monty Python"></div></a><div class="text">M.P. A Vida de Brian </div><div class="text2">(1979)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AUDDjlUWl8Ie" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Monty Python: A Vida de Brian (1979)','Terry Jones', '1h34m','Comédia/Sátira', 5, 0, 'mp-a-vida-de-brian.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip1">
							<div class="container1" onmouseover="filmeOver('capas35','f35', 'c35', 's35')" onmouseout="filmeOut('capas35','f35', 'c35', 's35')">
								<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AoCDVl0WZGVW" target="_blank"><div class="cImagem" id="f35"><img id="capas35" class="capas" src="imagens/mp-o-sentido-da-vida.jpg" alt="Monty Python"></div></a><div class="text">M.P. O Sentido Da Vida </div><div class="text2">(1983)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AoCDVl0WZGVW" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Monty Python: O Sentido da Vida (1983)','Terry Jones', '1h56m','Comédia/Musical', 5, 0, 'mp-o-sentido-da-vida.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip1">
							<div class="container1" onmouseover="filmeOver('capas27','f27', 'c27', 's27')" onmouseout="filmeOut('capas27','f27', 'c27', 's27')">
								<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!A4IDQk0jnJR2" target="_blank"><div class="cImagem" id="f27"><img id="capas27" class="capas" src="imagens/o-iluminado.jpg" alt="O Iluminado"></div></a><div class="text">O Iluminado</div><div class="text2">(1980)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!A4IDQk0jnJR2" target="_blank"><img id="play" src="imagens/play.png"></a></div><br>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('O Iluminado (1980)','Stanley Kubrick', '2h26m','Terror/Mistério', 5, 0, 'o-iluminado.jpg')"></div>
								</div>

							</div>
						</div>

						<div class="tooltip1">
							<div class="container1" onmouseover="filmeOver('capas16','f16', 'c16', 's16')" onmouseout="filmeOut('capas16','f16', 'c16', 's16')">
								<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AMIDqg0-767J" target="_blank"><div class="cImagem" id="f16"><img id='capas16' class="capas" src="imagens/o-rei-da-comedia.jpg" alt="O Rei Da Comédia"></div></a><div class="text">O Rei Da Comédia</div> <div class="text2">(1982)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AMIDqg0-767J" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('O Rei Da Comédia (1982)','Martin Scorsese', '1h49m','Comédia/Humor Negro', 4, 1, 'o-rei-da-comedia.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip1">
							<div class="container1" onmouseover="filmeOver('capas5', 'f5', 'c5', 's5')" onmouseout="filmeOut('capas5','f5', 'c5', 's5')">
								<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AwKD2kEy8u7_" target="_blank"><div class="cImagem" id="f5"><img id="capas5" class="capas" src="imagens/os-bons-companheiros.jpg" alt="Os Bons Companheiros"></div></a><div class="text">Os Bons Companheiros</div><div class="text2">(1990)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AwKD2kEy8u7_" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Os Bons Companheiros (1990)','Martin Scorsese', '2h28m','Crime/Drama', 5,0, 'os-bons-companheiros.jpg')"></div>
								</div>
							</div>
						</div>
						<div class="tooltip1">
							<div class="container1" onmouseover="filmeOver('capas1','f1', 'c1', 's1')" onmouseout="filmeOut('capas1','f1', 'c1', 's1')">
								<a href="https://scottsilva921.cincopa.com/watch/A4HAcLOLOO68!A0FDUcEo7fBw" target="_blank"><div class="cImagem" id="f1"><img id="capas1" class="capas" src="imagens/caes-de-aluguel.jpg" alt="Cães De Aluguel"></div></a><div class="text">Cães de Aluguel</div><div class="text2">(1992)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://scottsilva921.cincopa.com/watch/A4HAcLOLOO68!A0FDUcEo7fBw" target="_blank"><img id="play" src="imagens/play.png"></a></div><br>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Cães de Aluguel (1992)','Quentin Tarantino', '1h40m','Crime/Ficção policial', 4, 1, 'caes-de-aluguel.jpg')"></div>
								</div>
							</div>
						</div>
						<div class="tooltip1">
							<div class="container1" onmouseover="filmeOver('capas22','f22', 'c22', 's22')" onmouseout="filmeOut('capas22','f22', 'c22', 's22')">
								<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AoGDCmkMBMne" target="_blank"><div class="cImagem" id="f22"><img id="capas22"class="capas" src="imagens/o-grande-lebowski.jpg" alt="O Grande Lebowski"></div></a><div class="text">O Grande Lebowski</div><div class="text2">(1998)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AoGDCmkMBMne" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('O Grande Lebowski (1998)','Irmãos Coen', '1h59m','Comédia/Crime', 4, 1, 'o-grande-lebowski.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip1">
							<div class="container1" onmouseover="filmeOver('capas4','f4', 'c4', 's4')" onmouseout="filmeOut('capas4','f4', 'c4', 's4')">
								<a href="https://scottsilva921.cincopa.com/watch/A4HAcLOLOO68!AsID8hk7PIz5" target="_blank"><div class="cImagem" id="f4"><img id="capas4" class="capas" src="imagens/era-uma-vez-em-hollywood.jpg" alt="Era Uma Vez Em... Hollywood"></div></a><div class="text">Era Uma Vez Em... HollyWood</div><div class="text2">(2019)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://scottsilva921.cincopa.com/watch/A4HAcLOLOO68!AsID8hk7PIz5" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Era Uma Vez Em... Hollywood (2019)','Quentin Tarantino', '2h40m','Comédia/Drama', 4, 1, 'era-uma-vez-em-hollywood.jpg')"></div>
								</div>
							</div>
						</div>

						</div>

					</div>
			</div>

				<div id="div1">
					<h1 id="acao" class="title"><a id="linkD" href="recomendacoes.html" target="_blank">Ação</h1>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas67','f67', 'c67', 's67')" onmouseout="filmeOut('capas67','f67', 'c67', 's67')">
							<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AsFDeoEjUvmW" target="_blank"><div class="cImagem" id="f67"><img id="capas67" class="capas" src="imagens/duro-de-matar.jpg" alt="A Qualquer Custo"></div></a><div class="text">Duro de Matar </div><div class="text2">(1988)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AsFDeoEjUvmW" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Duro de Matar (1988)','John McTiernan', '2h12m','Ação, Thriller', 0, 0, 'duro-de-matar.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas21','f21', 'c21', 's21')" onmouseout="filmeOut('capas21','f21', 'c21', 's21')">
							<a href="https://scottsilva930.cincopa.com/watch/A4HAcLOLOO68!A4DDKjk2cNcK" target="_blank"><div class="cImagem" id="f21"><img id="capas21" class="capas" src="imagens/a-qualquer-custo.jpg" alt="A Qualquer Custo"></div></a><div class="text">A Qualquer Custo </div><div class="text2">(2016)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://scottsilva930.cincopa.com/watch/A4HAcLOLOO68!A4DDKjk2cNcK" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('A Qualquer Custo (2016)','David Mackenzie', '1h42m','Ação, Crime, Drama', 4, 1, 'a-qualquer-custo.jpg')"></div>
							</div>
						</div>
					</div>

				<div class="tooltip">

					<div class="container1" onmouseover="filmeOver('capas11','f11', 'c11', 's11')" onmouseout="filmeOut('capas11','f11', 'c11', 's11')">
						<a href="https://u725144.cincopa.com/watch/A4HAcLOLOO68!AcGD7j0GkRUs" target="_blank"><div class="cImagem" id="f11"><img id="capas11" class="capas" src="imagens/em-ritmo-de-fuga.jpg" alt="Em Ritmo de Fuga"></div></a><div class="text">Em Ritmo de Fuga </div><div class="text2">(2017)</div>
						<div class="overlay">
							<div id="filmeHover"><a href="https://u725144.cincopa.com/watch/A4HAcLOLOO68!AcGD7j0GkRUs" target="_blank"><img id="play" src="imagens/play.png"></a></div>
						</div>

						<div class="overlay">
							<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Em Ritmo de Fuga (2017)','Edgar Wright', '1h35m','Ação, Crime, Música', 4, 1, 'em-ritmo-de-fuga.jpg')"></div>
						</div>

					</div>
				</div>

				<div id="div1">
					<h1 id="animacao" class="title"><a id="linkD" href="recomendacoes.html" target="_blank">Animação</h1>

					<div class="tooltip">

						<div class="container1" onmouseover="filmeOver('capas38','f38', 'c38', 's38')" onmouseout="filmeOut('capas38','f38', 'c38', 's38')">
							<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AUMDznUDu-oS" target="_blank"><div class="cImagem" id="f38"><img id="capas38" class="capas" src="imagens/o-fantastico-sr-raposo.jpg" alt="O Fantástico Sr. Raposo"></div></a><div class="text">O Fantástico Sr. Raposo </div><div class="text2">(2009)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AUMDznUDu-oS" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('O Fantástico Sr. Raposo (2009)','Wes Anderson', '1h28m','Animação, Aventura, Comédia', 4, 0, 'o-fantastico-sr-raposo.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">

						<div class="container1" onmouseover="filmeOver('capas72','f72', 'c72', 's72')" onmouseout="filmeOut('capas72','f72', 'c72', 's72')">
							<a href="https://brumbram20.cincopa.com/watch/A4HAcLOLOO68!AsHDOykkmxyM" target="_blank"><div class="cImagem" id="f72"><img id="capas72" class="capas" src="imagens/uma-historia-de-amor-e-furia.jpg" alt="Uma História de Amor e Fúria"></div></a><div class="text">Uma História de Amor e Fúria </div><div class="text2">(2013)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://brumbram20.cincopa.com/watch/A4HAcLOLOO68!AsHDOykkmxyM" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Uma História de Amor e Fúria (2013)','Luiz Bolognesi', '1h14m','Ação, Animação, Aventura', 4, 1, 'uma-historia-de-amor-e-furia.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">

						<div class="container1" onmouseover="filmeOver('capas73','f73', 'c73', 's73')" onmouseout="filmeOut('capas73','f73', 'c73', 's73')">
							<a href="https://brumbram20.cincopa.com/watch/A4HAcLOLOO68!AgHDyw0fq18k" target="_blank"><div class="cImagem" id="f73"><img id="capas73" class="capas" src="imagens/homem-aranha-no-aranhaverso.jpg" alt="Homem-Aranha no Aranhaverso"></div></a><div class="text">Homem-Aranha no Aranhaverso</div><div class="text2">(2018)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://brumbram20.cincopa.com/watch/A4HAcLOLOO68!AgHDyw0fq18k" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Homem-Aranha no Aranhaverso (2018)',' Bob Persichetti, Peter Ramsey, Rodney Rothman', '1h57m','Ação, Animação, Aventura', 5, 0, 'homem-aranha-no-aranhaverso.jpg')"></div>
							</div>
						</div>
					</div>
				</div>

				<div id="div1">
					<h1 id="comedia" class="title"><a id="linkD" href="recomendacoes.html" target="_blank">Comédia</h1>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas28','f28', 'c28', 's28')" onmouseout="filmeOut('capas28','f28', 'c28', 's28')">
								<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AkCD5m0D5R1H" target="_blank"><div class="cImagem" id="f28"><img id="capas28" class="capas" src="imagens/dr-fantastico.jpg" alt="Dr Fantástico"></div></a><div class="text">Dr. Fantástico</div><div class="text2">(1964)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AkCD5m0D5R1H" target="_blank"><img id="play" src="imagens/play.png"></a></div><br>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Dr. Fantástico (1964)','Stanley Kubrick', '1h42m','Comédia/Guerra', 0, 0, 'dr-fantastico.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas74','f74', 'c74', 's74')" onmouseout="filmeOut('capas74','f74', 'c74', 's74')">
								<a href="https://yikobe1150.cincopa.com/watch/A4HAcLOLOO68!AsCDULFDLdr2" target="_blank"><div class="cImagem" id="f74"><img id="capas74" class="capas" src="imagens/nnnn.jpg" alt="NNNN"></div></a><div class="text">Noivo Neurótico, Noiva Nervosa</div><div class="text2">(1977)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://yikobe1150.cincopa.com/watch/A4HAcLOLOO68!AsCDULFDLdr2" target="_blank"><img id="play" src="imagens/play.png"></a></div><br>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Noivo Neurótico, Noiva Nervosa (1977)','Woody Allen', '1h33m','Comédia/Romance', 5, 0, 'imagens/nnnn.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas035','f035', 'c035', 's035')" onmouseout="filmeOut('capas035','f035', 'c035', 's035')">
								<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AoCDVl0WZGVW" target="_blank"><div class="cImagem" id="f035"><img id="capas035" class="capas" src="imagens/mp-o-sentido-da-vida.jpg" alt="Monty Python"></div></a><div class="text">M.P. O Sentido Da Vida </div><div class="text2">(1983)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AoCDVl0WZGVW" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Monty Python: O Sentido da Vida (1983)','Terry Jones', '1h56m','Comédia/Musical', 5, 0, 'mp-o-sentido-da-vida.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas54','f54', 'c54', 's54')" onmouseout="filmeOut('capas54','f54', 'c54', 's54')">
								<a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!AQPDxqUd84Sk" target="_blank"><div class="cImagem" id="f54"><img id="capas54" class="capas" src="imagens/arizona-nunca-mais.jpg" alt="Arizona Nunca Mais"></div></a><div class="text">Arizona Nunca Mais</div><div class="text2">(1987)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!AQPDxqUd84Sk" target="_blank"><img id="play" src="imagens/play.png"></a></div><br>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Arizona Nunca Mais (1987)','Irmãos Coen', '1h34m','Comédia/Crime', 4, 0, 'arizona-nunca-mais.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas022','f022', 'c022', 's022')" onmouseout="filmeOut('capas022','f022', 'c022', 's022')">
								<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AoGDCmkMBMne" target="_blank"><div class="cImagem" id="f022"><img id="capas022"class="capas" src="imagens/o-grande-lebowski.jpg" alt="O Grande Lebowski"></div></a><div class="text">O Grande Lebowski</div><div class="text2">(1998)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AoGDCmkMBMne" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('O Grande Lebowski (1998)','Irmãos Coen', '1h59m','Comédia/Crime', 4, 1, 'o-grande-lebowski.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas64','f64', 'c64', 's64')" onmouseout="filmeOut('capas64','f64', 'c64', 's64')">
								<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AoBD-q05resU" target="_blank"><div class="cImagem" id="f64"><img id="capas64"class="capas" src="imagens/o-show-truman.jpg" alt="O Grande Lebowski"></div></a><div class="text">O Show de Truman</div><div class="text2">(1998)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AoBD-q05resU" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('O Show de Truman (1998)','Peter Weir', '1h43m','Comédia, Drama, Ficção Científica', 4, 1, 'o-show-truman.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas29','f29', 'c29', 's29')" onmouseout="filmeOut('capas29','f29', 'c29', 's29')">
								<a href="https://scottsilva921.cincopa.com/watch/AcHAltu0tQtF" target="_blank"><div class="cImagem" id="f29"><img id="capas29" class="capas" src="imagens/shrek.jpg" alt="Shrek"></div></a><div class="text">Shrek </div><div class="text2">(2001)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://scottsilva921.cincopa.com/watch/AcHAltu0tQtF" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Shrek (2001)','Andrew Adamson, Vicky Jenson', '1h35m','Animação/Comédia', 5, 0, 'shrek.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip">

							<div class="container1" onmouseover="filmeOver('capas15','f15', 'c15', 's15')" onmouseout="filmeOut('capas15','f15', 'c15', 's15')">
								<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!A8PD-jkptGZ1" target="_blank"><div class="cImagem" id="f15"><img id="capas15" class="capas" src="imagens/embriagado-de-amor.jpg" alt="Embriagado de Amor"></div></a><div class="text">Embriagado de Amor</div><div class="text2">(2002)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!A8PD-jkptGZ1" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Embriagado de Amor (2002)','Paul Thomas Anderson', '1h35m','Romance/Comédia romântica', 0, 0, 'embriagado-de-amor.jpg')"></div>
								</div>

							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas20','f20', 'c20', 's20')" onmouseout="filmeOut('capas20','f20', 'c20', 's20')">
								<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AsODaj0Cl7HG" target="_blank"><div class="cImagem" id="f20"><img id="capas20" class="capas" src="imagens/trovao-tropical.jpg" alt="Trovâo Tropical"></div></a><div class="text">Trovão Tropical </div><div class="text2">(2008)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AsODaj0Cl7HG" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Trovão Tropical (2008)','Ben Stiller', '2h1m','Comédia/Ação', 0, 0, 'trovao-tropical.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas65','f65', 'c65', 's65')" onmouseout="filmeOut('capas65','f65', 'c65', 's65')">
								<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AcND5rU2sOnO" target="_blank"><div class="cImagem" id="f65"><img id="capas65" class="capas" src="imagens/moonrise-kingdom.jpg" alt="Trovâo Tropical"></div></a><div class="text">Moonrise Kingdom </div><div class="text2">(2012)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AcND5rU2sOnO" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Moonrise Kingdom (2012)','Wes Anderson', '1h34m','Comédia, Drama, Romance', 0, 0, 'moonrise-kingdom.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas37', 'f37', 'c37', 's37')" onmouseout="filmeOut('capas37','f37', 'c37', 's37')">
								<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AgGDhnUEn2Zs" target="_blank"><div class="cImagem" id="f37"><img id="capas37" class="capas" src="imagens/o-lobo-de-wall-street.jpg" alt="O Lobo de Wall Street"></div></a><div class="text">O Lobo de Wall Street</div><div class="text2">(2013)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AgGDhnUEn2Zs" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('O Lobo de Wall Street (2013)','Martin Scorsese', '3h','Biografia, Comédia, Crime', 0, 0, 'o-lobo-de-wall-street.jpg')"></div>
								</div>

							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas34','f34', 'c34', 's34')" onmouseout="filmeOut('capas34','f34', 'c34', 's34')">
								<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AENDcn0bias7" target="_blank"><div class="cImagem" id="f34"><img id="capas34" class="capas" src="imagens/enquanto-somos-jovens.jpg" alt="Enquanto Somos Jovens"></div></a><div class="text">Enquanto Somos Jovens </div><div class="text2">(2014)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AENDcn0bias7" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Enquanto Somos Jovens (2014)','Noah Baumbach', '1h37m','Comédia, Drama, Mistério', 0, 0, 'enquanto-somos-jovens.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas18','f18', 'c18', 's18')" onmouseout="filmeOut('capas18','f18', 'c18', 's18')">
								<a href="https://u725144.cincopa.com/watch/A4HAcLOLOO68!AcKDXgEE7d5b" target="_blank"><div class="cImagem" id="f18"><img id="capas18" class="capas" src="imagens/os-meyerowitz.jpg" alt="Os Meyerowitz"></div></a><div class="text">Os Meyerowitz </div><div class="text2">(2017)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://u725144.cincopa.com/watch/A4HAcLOLOO68!AcKDXgEE7d5b" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Os Meyerowitz (2017)','Noah Baumbach', '1h52m','Comédia/Drama', 4, 0, 'os-meyerowitz.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas6','f6', 'c6', 's6')" onmouseout="filmeOut('capas6','f6', 'c6', 's6')">
								<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AIBDng0uLCd3" target="_blank"><div class="cImagem" id="f6"><img id="capas6" class="capas" src="imagens/ave-cesar.jpg" alt="Ave, César!"></div></a><div class="text">Ave, César! </div><div class="text2">(2016)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AIBDng0uLCd3" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Ave, César (2016)','Irmãos Coen', '1h46m','Comédia/Mistério', 4, 0, 'ave-cesar.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas56','f56', 'c56', 's56')" onmouseout="filmeOut('capas56','f56', 'c56', 's56')">
								<a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!A0EDMqkKTx4E" target="_blank"><div class="cImagem" id="f56"><img id="capas56" class="capas" src="imagens/a-balada-de-buster-scruggs.jpg" alt="A Balada de Buster Scruggs"></div></a><div class="text">A Balada de Buster Scruggs</div><div class="text2">(2018)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!A0EDMqkKTx4E" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('A Balada de Buster Scruggs (2018)','Irmãos Coen', '2h13m','Comédia/Drama/Musical', 5, 0, 'a-balada-de-buster-scruggs.jpg')"></div>
								</div>
							</div>
						</div>

						<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas04','f04', 'c04', 's04')" onmouseout="filmeOut('capas04','f04', 'c04', 's04')">
								<a href="https://scottsilva921.cincopa.com/watch/A4HAcLOLOO68!AsID8hk7PIz5" target="_blank"><div class="cImagem" id="f04"><img id="capas04" class="capas" src="imagens/era-uma-vez-em-hollywood.jpg" alt="Era Uma Vez Em... Hollywood"></div></a><div class="text">Era Uma Vez Em... HollyWood</div><div class="text2">(2019)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://scottsilva921.cincopa.com/watch/A4HAcLOLOO68!AsID8hk7PIz5" target="_blank"><img id="play" src="imagens/play.png"></a></div>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Era Uma Vez Em... Hollywood (2019)','Quentin Tarantino', '2h40m','Comédia/Drama', 4, 1, 'era-uma-vez-em-hollywood.jpg')"></div>
								</div>
							</div>
						</div>
				</div>

				<div id="div1">
					<h1 id="drama" class="title"><a id="linkD" href="recomendacoes.html" target="_blank">Drama</h1>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas39','f39', 'c39', 's39')" onmouseout="filmeOut('capas39','f39', 'c39', 's39')">
							<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AgIDbmECArNJ" target="_blank"><div class="cImagem" id="f39"><img id="capas39" class="capas" src="imagens/doze-homens-e-uma-sentenca.jpg" alt="Doze Homens e uma Sentença"></div></a><div class="text">Doze Homens e Uma Sentença</div><div class="text2">(1957)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AgIDbmECArNJ" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Doze Homens e Uma Sentença (1957)','Sidney Lumet', '1h36m',' Crime, Drama', 0, 0, 'doze-homens-e-uma-sentenca.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">

						<div class="container1" onmouseover="filmeOver('capas17','f17', 'c17', 's17')" onmouseout="filmeOut('capas17','f17', 'c17', 's17')">
							<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AUDDWgU-EbhF" target="_blank"><div class="cImagem" id="f17"><img id="capas17" class="capas" src="imagens/caminhos-perigosos.jpg" alt="Caminhos Perigosos"></div></a><div class="text">Caminhos Perigosos</div><div class='text2'>(1973)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AUDDWgU-EbhF" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Caminhos Perigosos (1973)','Martin Scorsese', '1h52m','Crime/Drama', 4, 1, 'caminhos-perigosos.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas23','f23', 'c23', 's23')" onmouseout="filmeOut('capas23','f23', 'c23', 's23')">
							<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!A0ADUkkMFoYD" target="_blank"><div class="cImagem" id="f23"><img id="capas23" class="capas" src="imagens/gosto-de-sangue.jpg" alt="Gosto de Sangue"></div></a><div class="text">Gosto de Sangue </div><div class="text2">(1982)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!A0ADUkkMFoYD" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>


							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Gosto de Sangue (1982)','Irmãos Coen', '1h39m','Crime, Drama, Thriller', 0, 0, 'gosto-de-sangue.jpg')"></div>
							</div>

						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas50','f50', 'c50', 's50')" onmouseout="filmeOut('capas50','f50', 'c50', 's50')">
							<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!A8NDHkUe9nqK" target="_blank"><div class="cImagem" id="f50"><img id="capas50" class="capas" src="imagens/era-uma-vez-na-america.jpg" alt="Era uma Vez na América"></div></a><div class="text">Era uma Vez na América</div><div class="text2">(1984)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!A8NDHkUe9nqK" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Era uma Vez na América (1984)','Sergio Leone', '3h49m','Crime, Drama', 0, 0, 'era-uma-vez-na-america.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas71','f71', 'c71', 's71')" onmouseout="filmeOut('capas71','f71', 'c71', 's71')">
							<a href="https://brumbram20.cincopa.com/watch/AwGA8sOtprRN" target="_blank"><div class="cImagem" id="f71"><img id="capas71" class="capas" src="imagens/faca-a-coisa-certa.jpg" alt="Faça A Coisa Certa"></div></a><div class="text">Faça A Coisa Certa</div><div class="text2">(1989)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://brumbram20.cincopa.com/watch/AwGA8sOtprRN" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Faça A Coisa Certa (1989)','Spike Lee', '2h','Comédia, Drama', 4, 1, 'faca-a-coisa-certa.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas01','f01', 'c01', 's01')" onmouseout="filmeOut('capas01','f01', 'c01', 's01')">
							<a href="https://scottsilva921.cincopa.com/watch/A4HAcLOLOO68!A0FDUcEo7fBw" target="_blank"><div class="cImagem" id="f01"><img id="capas01" class="capas" src="imagens/caes-de-aluguel.jpg" alt="Cães De Aluguel"></div></a><div class="text">Cães de Aluguel</div><div class="text2">(1992)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://scottsilva921.cincopa.com/watch/A4HAcLOLOO68!A0FDUcEo7fBw" target="_blank"><img id="play" src="imagens/play.png"></a></div><br>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Cães de Aluguel (1992)','Quentin Tarantino', '1h40m',' Crime, Drama, Thriller', 4, 1, 'caes-de-aluguel.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas26','f26', 'c26', 's26')" onmouseout="filmeOut('capas26','f26', 'c26', 's26')">
							<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AsCDFk0lkdAC" target="_blank"><div class="cImagem" id="f26"><img id="capas26" class="capas" src="imagens/a-lista-de-schindler.jpg" alt="A Lista de Schindler"></div></a><div class="text">A Lista de Schindler</div><div class="text2">(1993)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AsCDFk0lkdAC" target="_blank"><img id="play" src="imagens/play.png"></a></div><br>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('A Lista de Schindler (1993)','Steven Spielberg', '3h17m','Biografia, Drama, História', 0, 0, 'a-lista-de-schindler.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas52','f52', 'c52', 's52')" onmouseout="filmeOut('capas52','f52', 'c52', 's52')">
							<a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AkEDZj0iNtKV" target="_blank"><div class="cImagem" id="f52"><img id="capas52" class="capas" src="imagens/um-sonho-de-liberdade.jpg" alt="Um Sonho de Liberdade"></div></a><div class="text">Um Sonho de Liberdade</div><div class="text2">(1994)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AkEDZj0iNtKV" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Um Sonho de Liberdade (1994)','Frank Darabont', '2h22m','Drama', 5, 0, 'um-sonho-de-liberdade.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas59','f59', 'c59', 's59')" onmouseout="filmeOut('capas59','f59', 'c59', 's59')">
							<a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!AwFDXqUzC-FL" target="_blank"><div class="cImagem" id="f59"><img id="capas59" class="capas" src="imagens/cassino.jpg" alt="Cassino"></div></a><div class="text">Cassino </div><div class="text2">(1995)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!AwFDXqUzC-FL" target="_blank"><img id="play" src="imagens/play.png"></a></div><br>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Cassino (1995)','Martin Scorsese', '2h58m',' Crime, Drama', 0, 0, 'cassino.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas47','f47', 'c47', 's47')" onmouseout="filmeOut('capas47','f47', 'c47', 's47')">
							<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AwMDskkmoX0x" target="_blank"><div class="cImagem" id="f47"><img id="capas47" class="capas" src="imagens/seven.jpg" alt="Se7en"></div></a><div class="text">Se7en: Os Sete Crimes Capitais </div><div class="text2">(1995)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AwMDskkmoX0x" target="_blank"><img id="play" src="imagens/play.png"></a></div><br>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Se7en: Os Sete Crimes Capitais (1995)','David Fincher', '2h07m',' Crime, Drama, Mistério', 0, 0, 'seven.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas2','f2', 'c2', 's2')" onmouseout="filmeOut('capas2','f2', 'c2', 's2')">
							<a href="https://scottsilva921.cincopa.com/watch/AEPAZtOSs0AH" target="_blank"><div class="cImagem" id="f2"><img id="capas2" class="capas" src="imagens/jackie-brown.jpg" alt="Jackie Brown"></div></a><div class="text">Jackie Brown</div><div class="text2">(1997)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://scottsilva921.cincopa.com/watch/AEPAZtOSs0AH" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Jackie Brown (1997)','Quentin Tarantino', '2h40m',' Crime, Drama, Thriller', 0, 0, 'jackie-brown.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas36','f36', 'c36', 's36')" onmouseout="filmeOut('capas36','f36', 'c36', 's36')">
							<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AwIDQm0ncGU8" target="_blank"><div class="cImagem" id="f36"><img id="capas36" class="capas" src="imagens/a-outra-historia-americana.jpg" alt="A Outra História Americana"></div></a><div class="text">A Outra História Americana </div><div class="text2">(1998)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AwIDQm0ncGU8" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('A Outra História Americana (1998)','Tony Kaye', '1h59m','Drama', 0, 0, 'a-outra-historia-americana.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas60','f60', 'c60', 's60')" onmouseout="filmeOut('capas60','f60', 'c60', 's60')">
							<a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!AUODrqkMDmKI" target="_blank"><div class="cImagem" id="f60"><img id="capas60" class="capas" src="imagens/o-resgate-do-soldado-ryan.jpg" alt="A Outra História Americana"></div></a><div class="text">O Resgate do Soldado Ryan </div><div class="text2">(1998)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!AUODrqkMDmKI" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('O Resgate do Soldado Ryan (1998)','Steven Spielberg', '2h49m','Drama, Guerra', 0, 0, 'o-resgate-do-soldado-ryan.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas68','f68', 'c68', 's68')" onmouseout="filmeOut('capas68','f68', 'c68', 's68')">
							<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AUEDErUQVruA" target="_blank"><div class="cImagem" id="f68"><img id="capas68" class="capas" src="imagens/clube-da-luta.jpg" alt="Clube da Luta"></div></a><div class="text">Clube da Luta </div><div class="text2">(1999)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AUEDErUQVruA" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Clube da Luta (1999)','David Fincher', '2h19m','Drama', 5, 0, 'clube-da-luta.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas46','f46', 'c46', 's46')" onmouseout="filmeOut('capas46','f46', 'c46', 's46')">
							<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AwCDbmEwYXZE" target="_blank"><div class="cImagem" id="f46"><img id="capas46" class="capas" src="imagens/cidade-de-deus.jpg" alt="Cidade de Deus"></div></a><div class="text">Cidade de Deus</div><div class="text2">(2002)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AwCDbmEwYXZE" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Cidade de Deus (2002)',' Fernando Meirelles e Kátia Lund', '2h10m',' Crime, Drama', 4, 1, 'cidade-de-deus.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas51','f51', 'c51', 's51')" onmouseout="filmeOut('capas51','f51', 'c51', 's51')">
							<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AoMDVpEmSwma" target="_blank"><div class="cImagem" id="f51"><img id="capas51" class="capas" src="imagens/os-infiltrados.jpg" alt="Era uma Vez na América"></div></a><div class="text">Os Infiltrados</div><div class="text2">(2006)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AoMDVpEmSwma" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Os Infiltrados (2006)','Martin Scorsese', '2h31m','Crime, Drama, Thriller', 0, 0, 'os-infiltrados.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas55','f55', 'c55', 's55')" onmouseout="filmeOut('capas55','f55', 'c55', 's55')">
							<a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!AkHDSpEUDpb0" target="_blank"><div class="cImagem" id="f55"><img id="capas55" class="capas" src="imagens/onde-os-fracos-nao-tem-vez.jpg" alt="Onde Os Fracos Não Têm Vez"></div></a><div class="text">Onde Os Fracos Não Têm Vez</div><div class="text2">(2007)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!AkHDSpEUDpb0" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Onde Os Fracos Não Têm Vez (2007)','Irmãos Coen', '2h2m','Crime, Drama, Thriller', 5, 0, 'onde-os-fracos-nao-tem-vez.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas62','f62', 'c62', 's62')" onmouseout="filmeOut('capas62','f62', 'c62', 's62')">
							<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!A8LDGqkCX6Ie" target="_blank"><div class="cImagem" id="f62"><img id="capas62" class="capas" src="imagens/drive.jpg" alt="Drive"></div></a><div class="text">Drive</div><div class="text2">(2011)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!A8LDGqkCX6Ie" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Drive (2011)',' Nicolas Winding Refn', '1h40m','Crime, Drama', 4, 1, 'drive.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas48','f48', 'c48', 's48')" onmouseout="filmeOut('capas48','f48', 'c48', 's48')">
							<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AMODunUOzTgC" target="_blank"><div class="cImagem" id="f48"><img id="capas48" class="capas" src="imagens/o-mestre.jpg" alt="O Mestre"></div></a><div class="text">O Mestre</div><div class="text2">(2012)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AMODunUOzTgC" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('O Mestre (2012)','Paul Thomas Anderson', '2h18m',' Drama', 4, 1, 'o-mestre.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas7','f7', 'c7', 's7')" onmouseout="filmeOut('capas7','f7', 'c7', 's7')">
							<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AgHDdjUZa6ch" target="_blank"><div class="cImagem" id="f7"><img id="capas7" class="capas" src="imagens/inside-llewyn-davis.jpg" alt="Balada de um Homem Comum"></div></a><div class="text" >Inside Llewyn Davis: Balada de um Homem Comum </div><div class="text2">(2013)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AgHDdjUZa6ch" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Inside Llewyn Davis: Balada de um Homem Comum (2013)','Irmãos Coen', '1h50m','Comédia, Drama, Música', 4, 1, 'inside-llewyn-davis.jpg')"></div>
							</div>

						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas69','f69', 'c69', 's69')" onmouseout="filmeOut('capas69','f69', 'c69', 's69')">
							<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AgMDTqEyZHQb" target="_blank"><div class="cImagem" id="f69"><img id="capas69" class="capas" src="imagens/boyhood.jpg" alt="Garota Exemplar"></div></a><div class="text">Boyhood: Da Infância à Juventude</div><div class="text2">(2014)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AgMDTqEyZHQb" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Boyhood: Da Infância à Juventude (2014)','David Linklater', '2h45m','Drama', 0, 0, 'boyhood.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas58','f58', 'c58', 's58')" onmouseout="filmeOut('capas58','f58', 'c58', 's58')">
							<a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!A0EDlpE3vtZp" target="_blank"><div class="cImagem" id="f58"><img id="capas58" class="capas" src="imagens/garota-exemplar.jpg" alt="Garota Exemplar"></div></a><div class="text">Garota Exemplar</div><div class="text2">(2014)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!A0EDlpE3vtZp" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Garota Exemplar (2014)','David Fincher', '2h29m','Drama, Mistério, Thriller', 0, 0, 'garota-exemplar.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas63','f63', 'c63', 's63')" onmouseout="filmeOut('capas63','f63', 'c63', 's63')">
							<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AAODCp0og-rg" target="_blank"><div class="cImagem" id="f63"><img id="capas63" class="capas" src="imagens/a-grande-aposta.jpg" alt="A Grande Aposta"></div></a><div class="text">A Grande Aposta</div><div class="text2">(2015)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AAODCp0og-rg" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('A Grande Aposta (2015)','Adam McKay', '2h10m',' Comédia, Drama', 4, 1, 'a-grande-aposta.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas3','f3', 'c3', 's3')" onmouseout="filmeOut('capas3','f3', 'c3', 's3')">
							<a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AcNDZjk3u8ot" target="_blank"><div class="cImagem" id="f3"><img id="capas3" class="capas" src="imagens/os-oito-odiados.jpg" alt="Os Oito Odiados"></div></a><div class="text">Os Oito Odiados</div><div class="text2">(2015)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AcNDZjk3u8ot" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Os Oito Odiados (2015)','Quentin Tarantino', '2h48m',' Crime, Drama, Mistério, Western', 0, 0, 'os-oito-odiados.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">

						<div class="container1" onmouseover="filmeOver('capas19','f19', 'c19', 's19')" onmouseout="filmeOut('capas19','f19', 'c19', 's19')">
							<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AoPDCiEIOfnN" target="_blank"><div class="cImagem" id="f19"><img id="capas19" class="capas" src="imagens/silencio.jpg" alt="Silêncio"></div></a><div class="text">Silêncio</div> <div class="text2">(2016)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AoPDCiEIOfnN" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Silêncio (2016)','Martin Scorsese', '2h41m','Drama, História', 0, 0, 'silencio.jpg')"></div>
							</div>

						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas49','f49', 'c49', 's49')" onmouseout="filmeOut('capas49','f49', 'c49', 's49')">
							<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AoLDIl0w2_av" target="_blank"><div class="cImagem" id="f49"><img id="capas49" class="capas" src="imagens/tres-anuncios-para-um-crime.jpg" alt="Três Anúncios Para Um Crime"></div></a><div class="text">Três Anúncios Para Um Crime</div><div class="text2">(2017)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AoLDIl0w2_av" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Três Anúncios Para Um Crime (2017)','Martin McDonagh', '1h55m','Comédia, Crime, Drama', 4, 1, 'tres-anuncios-para-um-crime.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas030','f030', 'c030', 's030')" onmouseout="filmeOut('capas030','f030', 'c030', 's030')">
							<a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AMDDNi08m85v" target="_blank"><div class="cImagem" id="f030"><img id="capas030" class="capas" src="imagens/joias-brutas.jpg" alt="Joias Brutas"></div></a><div class="text">Jóias Brutas</div><div class="text2">(2019)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AMDDNi08m85v" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Jóias Brutas (2019)','Josh Safdie, Ben Safdie', '2h15m','Crime, Drama, Thriller', 4, 1, 'joias-brutas.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas75','f75', 'c75', 's75')" onmouseout="filmeOut('capas75','f75', 'c75', 's75')">
							<a href="https://ficeg17545.cincopa.com/watch/A4HAcLOLOO68!A8CDAK1ucplu" target="_blank"><div class="cImagem" id="f75"><img id="capas75" class="capas" src="imagens/meupai.jpg" alt="Meu Pai"></div></a><div class="text">Meu Pai</div><div class="text2">(2020)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://ficeg17545.cincopa.com/watch/A4HAcLOLOO68!A8CDAK1ucplu" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Meu Pai (2019)','Florian Zeller', '1h37m','Drama', 5, 0, 'meupai.jpg')"></div>
							</div>
						</div>
					</div>
				</div>

				<div id="div1">
					<h1 id="fcientifica" class="title"><a id="linkD" href="recomendacoes.html" target="_blank">Ficção Científica</h1>

					<div class="tooltip1">
						<div class="container1" onmouseover="filmeOver('capas033','f033', 'c033', 's033')" onmouseout="filmeOut('capas033','f033', 'c033', 's033')">
							<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AEFDgmUFT-oL" target="_blank"><div class="cImagem" id="f033"><img id="capas033" class="capas" src="imagens/2001-uma-odisseia-no-espaco.jpg" alt="2001: Uma Odisséia No Espaço"></div></a><div class="text">2001: Uma Odisséia No Espaço</div><div class="text2">(1968)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AEFDgmUFT-oL" target="_blank"><img id="play" src="imagens/play.png"></a></div><br>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('2001: Uma Odisséia No Espaço (1968)','Stanley Kubrick', '2h29m','Ficção científica/Aventura', 5, 0, '2001-uma-odisseia-no-espaco.jpg')"></div>
							</div>

						</div>
					</div>

					<div class="tooltip1">
						<div class="container1" onmouseover="filmeOver('capas66','f66', 'c66', 's66')" onmouseout="filmeOut('capas66','f66', 'c66', 's66')">
							<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AoKDIrEXEnvv" target="_blank"><div class="cImagem" id="f66"><img id="capas66" class="capas" src="imagens/blade-runner.jpg" alt="Blade Runner"></div></a><div class="text">Blade Runner</div><div class="text2">(1982)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AoKDIrEXEnvv" target="_blank"><img id="play" src="imagens/play.png"></a></div><br>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Blade Runner (1982)','Ridley Scott', '1h57m','Ação, Ficção científica, Thriller', 0, 0, 'blade-runner.jpg')"></div>
							</div>

						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas45','f45', 'c45', 's45')" onmouseout="filmeOut('capas45','f45', 'c45', 's45')">
							<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AANDIn0GTz2T" target="_blank"><div class="cImagem" id="f45"><img id="capas45" class="capas" src="imagens/interestelar.jpg" alt="Interestelar"></div></a><div class="text">Interestelar </div><div class="text2">(2014)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AANDIn0GTz2T" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Interestelar (2014)','Christopher Nolan', ' 2h49m','Aventura, Drama, Ficção Científica', 0, 0, 'interestelar.jpg')"></div>
							</div>
						</div>
					</div>

				</div>

				<div id="div1">
					<h1 id="terror" class="title"><a id="linkD" href="recomendacoes.html" target="_blank">Terror</h1>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas53','f53', 'c53', 's53')" onmouseout="filmeOut('capas53','f53', 'c53', 's53')">
							<a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!AkIDAoUkdQvB" target="_blank"><div class="cImagem" id="f53"><img id="capas53" class="capas" src="imagens/psicose.jpg" alt="Era uma Vez na América"></div></a><div class="text">Psicose</div><div class="text2">(1960)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!AkIDAoUkdQvB" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Psicose (1960)','Alfred Hitchcock', '1h49m','Terror, Mistério, Thriller', 0, 0, 'psicose.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip1">
							<div class="container1" onmouseover="filmeOver('capas027','f027', 'c027', 's027')" onmouseout="filmeOut('capas027','f027', 'c027', 's027')">
								<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!A4IDQk0jnJR2" target="_blank"><div class="cImagem" id="f027"><img id="capas027" class="capas" src="imagens/o-iluminado.jpg" alt="O Iluminado"></div></a><div class="text">O Iluminado</div><div class="text2">(1980)</div>
								<div class="overlay">
									<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!A4IDQk0jnJR2" target="_blank"><img id="play" src="imagens/play.png"></a></div><br>
								</div>

								<div class="overlay">
									<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('O Iluminado (1980)','Stanley Kubrick', '2h26m','Terror/Mistério', 5, 0, 'o-iluminado.jpg')"></div>
								</div>

							</div>
						</div>
				</div>

				<div id="div1">
					<h1 id="western" class="title"><a id="linkD" href="recomendacoes.html" target="_blank">Western</h1>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas43','f43', 'c43', 's43')" onmouseout="filmeOut('capas43','f43', 'c43', 's43')">
							<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!A0ADJnUKELCu" target="_blank"><div class="cImagem" id="f43"><img id="capas43" class="capas" src="imagens/tres-homens-em-conflito.jpg" alt="Três Homens Em Conflito"></div></a><div class="text">Três Homens Em Conflito </div><div class="text2">(1966)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!A0ADJnUKELCu" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Três Homens Em Conflito (1966)','Sergio Leone', '2h41m','Western', 0, 0, 'tres-homens-em-conflito.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas57','f57', 'c57', 's57')" onmouseout="filmeOut('capas57','f57', 'c57', 's57')">
							<a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!A0CD4rE_j9WW" target="_blank"><div class="cImagem" id="f57"><img id="capas57" class="capas" src="imagens/bravura-indomita.jpg" alt="Bravura Indômita"></div></a><div class="text">Bravura Indômita </div><div class="text2">(2010)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!A0CD4rE_j9WW" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Bravura Indômita (2010)','Irmãos Coen', '1h50m','Drama, Western', 4, 1, 'bravura-indomita.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas44','f44', 'c44', 's44')" onmouseout="filmeOut('capas44','f44', 'c44', 's44')">
							<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!A8ED_mUpJjvW" target="_blank"><div class="cImagem" id="f44"><img id="capas44" class="capas" src="imagens/django-livre.jpg" alt="Django Livre"></div></a><div class="text">Django Livre </div><div class="text2">(2012)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!A8ED_mUpJjvW" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Django Livre (2012)','Quentin Tarantino', ' 2h45m','Drama, Western', 5, 0, 'django-livre.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas03','f03', 'c03', 's03')" onmouseout="filmeOut('capas03','f03', 'c03', 's03')">
							<a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AcNDZjk3u8ot" target="_blank"><div class="cImagem" id="f03"><img id="capas03" class="capas" src="imagens/os-oito-odiados.jpg" alt="Os Oito Odiados"></div></a><div class="text">Os Oito Odiados</div><div class="text2">(2015)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AcNDZjk3u8ot" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Os Oito Odiados (2015)','Quentin Tarantino', '2h48m','Crime, Drama, Mistério, Western', 0, 0, 'os-oito-odiados.jpg')"></div>
							</div>
						</div>
					</div>
				</div>

				<div id="div1">
					<h1 id="dreamworks" class="title"><a id="linkD" href="dreamworks.html" target="_blank">DreamWorks</a></h1>
					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas029','f029', 'c029', 's029')" onmouseout="filmeOut('capas029','f029', 'c029', 's029')">
							<a href="https://scottsilva921.cincopa.com/watch/AcHAltu0tQtF" target="_blank"><div class="cImagem" id="f029"><img id="capas029" class="capas" src="imagens/shrek.jpg" alt="Shrek"></div></a><div class="text">Shrek </div><div class="text2">(2001)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://scottsilva921.cincopa.com/watch/AcHAltu0tQtF" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Shrek (2001)','Andrew Adamson, Vicky Jenson', '1h35m','Animação/Comédia', 5, 0, 'shrek.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas61','f61', 'c61', 's61')" onmouseout="filmeOut('capas61','f61', 'c61', 's61')">
							<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AIGDbrkeXO-F" target="_blank"><div class="cImagem" id="f61"><img id="capas61" class="capas" src="imagens/shrek2.jpg" alt="Shrek 2"></div></a><div class="text">Shrek 2</div><div class="text2">(2004)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AIGDbrkeXO-F" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Shrek 2 (2004)','Andrew Adamson, Kelly Asbury', '1h33m','Animação, Aventura, Comédia', 5, 0, 'shrek2.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas70','f70', 'c70', 's70')" onmouseout="filmeOut('capas70','f70', 'c70', 's70')">
							<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AUDDqukX2cfF" target="_blank"><div class="cImagem" id="f70"><img id="capas70" class="capas" src="imagens/shrek3.jpg" alt="Shrek 2"></div></a><div class="text">Shrek Terceiro</div><div class="text2">(2007)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AUDDqukX2cfF" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Shrek Terceiro(2007)','Chris Miller, Raman Hui', '1h33m','Animação, Aventura, Comédia', 4, 0, 'shrek3.jpg')"></div>
							</div>
						</div>
					</div>
				</div>

				<div id="div1">
					<h1 id="montypython" class="title"><a id="linkD" href="recomendacoes.html" target="_blank">Monty Python</h1>

					<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas40','f40', 'c40', 's40')" onmouseout="filmeOut('capas40','f40', 'c40', 's40')">
							<a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!A8PDJjUrKVn6" target="_blank"><div class="cImagem" id="f40"><img id="capas40" class="capas" src="imagens/mp-em-busca-do-calice-perdido.jpg" alt="Monty Python"></div></a><div class="text">M.P. Em Busca do Cálice Sagrado </div><div class="text2">(1975)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!A8PDJjUrKVn6" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Monty Python: Em Busca do Cálice Perdido (1975)','Terry Gilliam, Terry Jones', '1h32m','Aventura, Comédia, Fantasia', 5, 0, 'mp-em-busca-do-calice-perdido.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas41','f41', 'c41', 's41')" onmouseout="filmeOut('capas41','f41', 'c41', 's41')">
							<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AUDDjlUWl8Ie" target="_blank"><div class="cImagem" id="f41"><img id="capas41" class="capas" src="imagens/mp-a-vida-de-brian.jpg" alt="Monty Python"></div></a><div class="text">M.P. A Vida de Brian </div><div class="text2">(1979)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AUDDjlUWl8Ie" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Monty Python: A Vida de Brian (1979)','Terry Jones', '1h34m','Comédia', 5, 0, 'mp-a-vida-de-brian.jpg')"></div>
							</div>
						</div>
					</div>

					<div class="tooltip">
							<div class="container1" onmouseover="filmeOver('capas0035','f0035', 'c0035', 's0035')" onmouseout="filmeOut('capas0035','f0035', 'c0035', 's0035')">
							<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AoCDVl0WZGVW" target="_blank"><div class="cImagem" id="f0035"><img id="capas0035" class="capas" src="imagens/mp-o-sentido-da-vida.jpg" alt="Monty Python"></div></a><div class="text">M.P. O Sentido Da Vida </div><div class="text2">(1983)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AoCDVl0WZGVW" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Monty Python: O Sentido da Vida (1983)','Terry Jones', '1h56m','Comédia/Musical', 5, 0, 'mp-o-sentido-da-vida.jpg')"></div>
							</div>
						</div>
					</div>

				</div>

				<div id="div1">
					<h1 id="netflix" class="title"><a id="linkD" href="topnetflixoriginal.html" target="_blank">Netflix Original</h1>
					<div class="tooltip">
						<div class="container1" onmouseover="filmeOver('capas30','f30', 'c30', 's30')" onmouseout="filmeOut('capas30','f30', 'c30', 's30')">
							<a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AMDDNi08m85v" target="_blank"><div class="cImagem" id="f30"><img id="capas30" class="capas" src="imagens/joias-brutas.jpg" alt="Joias Brutas"></div></a><div class="text">Jóias Brutas</div><div class="text2">(2019)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AMDDNi08m85v" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Jóias Brutas (2019)','Josh Safdie, Ben Safdie', '2h15m','Drama/Humor Negro', 4, 1, 'joias-brutas.jpg')"></div>
							</div>
						</div>
					</div>
				</div>

				<div id="div1">
					<h1 id="tcornetto" class="title"><a id="linkD" href="recomendacoes.html" target="_blank">Three Flavours Cornetto Trilogy</a></h1>

					<div class="tooltip">

						<div class="container1" onmouseover="filmeOver('capas8','f8', 'c8', 's8')" onmouseout="filmeOut('capas8','f8', 'c8', 's8')">
							<a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!A8MD5iU_5szB" target="_blank"><div class="cImagem" id="f8"><img id="capas8" class="capas" src="imagens/todo-mundo-quase-morto.jpg" alt="Todo Mundo Quase Morto"></div></a><div class="text">Todo Mundo Quase Morto </div><div class="text2">(2004)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!A8MD5iU_5szB" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Todo Mundo Quase Morto (2004)','Edgar Wright', '1h40m','Comédia/Terror', 4, 0, 'todo-mundo-quase-morto.jpg')"></div>
							</div>

						</div>
					</div>

					<div class="tooltip">

						<div class="container1" onmouseover="filmeOver('capas9','f9', 'c9', 's9')" onmouseout="filmeOut('capas9','f9', 'c9', 's9')">
							<a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AcBDeiUp5kvv" target="_blank"><div class="cImagem" id="f9"><img id="capas9" class="capas" src="imagens/chumbo-grosso.jpg" alt="Chumbo Grosso"></div></a><div class="text">Chumbo Grosso </div><div class="text2">(2007)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AcBDeiUp5kvv" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>

							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Chumbo Grosso (2007)','Edgar Wright', '2h1m','Comédia/Ação', 4, 0, 'chumbo-grosso.jpg')"></div>
							</div>

						</div>
					</div>

					<div class="tooltip">

						<div class="container1" onmouseover="filmeOver('capas10','f10', 'c10', 's10')" onmouseout="filmeOut('capas10','f10', 'c10', 's10')">
							<a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AcLD1iki9wPZ" target="_blank"><div class="cImagem" id="f10"><img id="capas10" class="capas" src="imagens/herois-de-ressaca.jpg" alt="Heróis de Ressaca"></div></a><div class="text">Heróis de Ressaca </div><div class="text2">(2013)</div>
							<div class="overlay">
								<div id="filmeHover"><a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!AcLD1iki9wPZ" target="_blank"><img id="play" src="imagens/play.png"></a></div>
							</div>


							<div class="overlay">
								<div id="filmeIMDb"><img id="btn" class="icon" src="imagens/more.png" onclick="modal('Heróis de Ressaca (2013)','Edgar Wright', '1h49m','Comédia/Ficção científica', 3, 1, 'herois-de-ressaca.jpg')"></div>
							</div>

						</div>
					</div>

				</div>

			</div>

		</div>

	</div>

	<img id="toup" src="imagens/up.png" onclick="rolar('idNav1')">
	

	<!--
	<div class="footer">
		
		<img id="imgfooter" style="border-radius: 4px" src="https://logodix.com/logo/1592307.png">
		<img id="imgfooter" src="https://i.pinimg.com/originals/60/b9/b1/60b9b11b28fde9cc13dd039ce8514076.png">
		<img id="imgfooter" src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Metacritic_M.png">
			
	</div>
	-->


	</body>

</html>
