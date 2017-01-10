<?php include("header.php"); ?>
<div id="contenidoGeneral">
	<div class="wrapper">
		<div class="left_menu">
			<nav class="left_nav">
				<ul>
					<li class="show">
						<a href="#">
							Dashboard
							<i class="gauge-icon"></i>
						</a>
					</li>
					<li class="active">
						<a href="#">
							<span class="top-part"><i class="small-chat-icon"></i> Expresiones</span>
							<span class="repasos_num">
								<i>12</i>
								Repasos
							</span>
							<span class="nuevas_num">
								<i>3</i>
								Nuevas
							</span>
						</a>
					</li>
					<li class="show">
						<a href="#">
							<span class="top-part"><i class="small-play-icon"></i> Diálogos</span>
							<span class="repasos_num">
								<i>0</i>
								Pendientes
							</span>
							<span class="nuevas_num">
								<i>1</i>
								Repasado
							</span>
						</a>
					</li>
					<li class="show">
						<a href="#">
							<span class="top-part"><i class="small-mic-icon"></i> Conversaciones</span>
							<span class="repasos_num">
								<i>0</i>
								Hechas
							</span>
							<span class="nuevas_num">
								<i>1</i>
								Nueva
							</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="right_wrapper primeras-section">
			<ul class="tab">
			  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'datos')">MIS DATOS</a></li>
			  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'reto')">RETO DIARIO</a></li>
			  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'estadisticas')">ESTADÍSTICAS</a></li>
			  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'logros')">MIS LOGROS</a></li>
			</ul>

			<div id="datos" class="tabcontent">
				<h1>Mis datos</h1>
			</div>

			<div id="reto" class="tabcontent">
				<h1>Reto diario</h1>
			</div>
			<div id="estadisticas" class="tabcontent">
				<h1>Estadísticas</h1>
			</div>
			<div id="logros" class="tabcontent">
				<h1>Mis logros</h1>
			</div>

		</div>	
	</div><!--end wrapper-->
</div>


</body>
</html>


