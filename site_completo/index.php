<html xmlns="http://www.w3.org/1999/xhtml">

<head>

 <meta http-equiv="Content-Type" content ="text/html;  charset=utf-8" />
 <title> The Best of Brazil </title>
 <link href="estilo.css" type = "text/css" rel="stylesheet" media="all">
 
</head>

<body>

     <div id="Principal">
	 
	        <div id="Cabecalho">
			 <div id="Banner-superior">
			       <a href="index.php"> <img src="imagens/azul" border = "0" width="970" height ="247"> </a>
				   
			 </div>
			 <!-- fim da div banner superior -->
			 <div id="Menu-superior"  >
			       <ul>
				          <li> <a href="index.php?link=1">  Home </a> </li>
						<li> <a href="index.php">  About </a> </li>
						<li> <a href="index.php">  Contato </a> </li>
						<li> <a href="index.php">  Home </a> </li>
				   </ul>
				   <a> <img src="imagens/7" width="970" height ="57"> <a/>
			 </div>
			 
			 <div id="Slide">
			      <img src="imagens/azul" width="970" height ="57"/>
			 </div>
			 
			 <!-- FIM DA DIV CABECALHO ------------------------->
		   </div>
		   
					   <div id="Corpo">
						  <!-- li é o menu e o ul é o sub menu -->
									  <div id="Esquerdo">
									      <ul> 
												 <li> Igreja
													 <ul>
														 <li> <a href="index.php?link=2">   Igreja Europa </a>  </li>
														  <li> <a href="index.php?link=3">    Cremos que</a> </li>
														  <li> <a href="index.php?link=4">   Nossa historia</a></li>
													 </ul>
												 </li>
													  
												 <li> Missoes
													 <ul>
														  <li> <a href="index.php?link=5">   Igreja Europa </a>  </li>
														  <li> <a href="index.php?link=6">    Cremos que</a> </li>
														  <li> <a href="index.php?link=7">   Nossa historia</a></li>
													 </ul>
												 </li>												 
												 <li> Cremos que
													 <ul>
														  <li> <a href="index.php?link=8">   Igreja Europa </a>  </li>
														  <li> <a href="index.php?link=9">    Cremos que</a> </li>
														  <li> <a href="index.php?link=10">   Nossa historia</a></li>
													 </ul>
												 </li>													   
													   
										  </ul>
									   </div>
									   
									   
									   <div id="Centro">
										<?php
										
										$link = $_GET["link"];
										
										$pag[1] = "home.php";
										
										if(!empty ($link))
										{
														if (file_exists($pag[$link]))
														{
															include $pag[$link];
															
														}else{
															
															include "home.php";
														}
										
										}
										else{
											include "home.php";
										}
										
										?>
									   </div>
									   
									   
									   
									   
									   <div id="Direito">
									          <div id="Redes">
											           <ul>
													     <li><a href="index.php"> <img src="imagens/fp" > </a></li>
														 <li><a href="index.php"> <img src="imagens/ip" > </a></li>
																     
													  </ul>									          
										       </div>
											   <div id="fb-root"></div>
													<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v9.0" nonce="bYYVCcul"></script>
													<div class="fb-page" data-href="https://www.facebook.com/EvangelhoDoReinoMT24" data-tabs="timeline" data-width="203" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/EvangelhoDoReinoMT24" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/EvangelhoDoReinoMT24">Mensagens de Deus</a></blockquote></div>											   										
										
									   <div id="Noticias">
									   
										   <h3>  <img src="imagens/" /> </h3>
										   
										   <div id="Item-noticias">
										      <span> 05/01/2021 </span> <br/>
											  <a href="index.php?link="> Lançamento do curso criando um site completo </a>
									         </div>  
											 
											 <div id="Item-noticias">
										      <span> 05/01/2021 </span> <br/>
											  <a href="index.php?link="> Lançamento do curso criando um site completo </a>
									         </div>

										   <div id="Item-noticias">
										      <span> 05/01/2021 </span> <br/>
											  <a href="index.php?link="> Lançamento do curso criando um site completo </a>
									         </div>

										   <div id="Item-noticias">
										      <span> 05/01/2021 </span> <br/>
											  <a href="index.php?link="> Lançamento do curso criando um site completo </a>
									         </div>	

												<a href="index.php?link="> Todas as noticias </a> </br>
												
									   </div> 											   
								   </div>							
					        </div>
		   
		   
		   <div id="Rodape">
			   RODAPE
		   </div>
		   
		   
	 </div>

</body>

</html>