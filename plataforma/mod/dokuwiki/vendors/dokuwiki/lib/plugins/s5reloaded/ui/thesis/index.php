<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es-es" >


<head>

	<title>[Título de la presentación aquí]</title>
	<!-- metadata -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="es" />

	<!--titulo y datos de publicación de la presentación-->

	<meta name="description" content="[Título de la presentación aquí]" />

	<meta name="keywords" content="[keywords aquí]" />
	<meta name="presdate" content="[Aquí la fecha de publicación en formato aaaammdd]" />

	<meta name="author" lang="es" content="[Nombre del autor de la presentación aquí]" />
	<meta name="company" content="[Organización del autor de la presentación aquí]" />

	<link rel="shortcut icon" href="ui/default/pics/favicon.ico" />
	
	<meta name="generator" content="S5" />
	<meta name="progid" content="quanta+" />
	<meta name="version" content="S5 · jEsuSdA · 1.1" />
	<!--Versión adaptada del estandard S5 1.1 por jEsuSdA-->

	<meta name="robots" content="all" />
	
	<!-- configuration parameters -->
	<meta name="defaultView" content="slideshow" />
	<meta name="controlVis" content="hidden" />
	
	<!-- style sheet links -->
	<link rel="stylesheet" href="ui/default/slides.css" type="text/css" media="projection" id="slideProj" />
	<link rel="stylesheet" href="ui/default/outline.css" type="text/css" media="screen" id="outlineStyle" />
	<link rel="stylesheet" href="ui/default/print.css" type="text/css" media="print" id="slidePrint" />
	<link rel="stylesheet" href="ui/default/opera.css" type="text/css" media="projection" id="operaFix" />
	
	<!-- S5 JS -->
	<script src="ui/default/slides.js" type="text/javascript"></script>

</head>
<?php
$page_owner = page_owner_entity();
?>
<body>

	<div class="layout">
		<div id="controls"><!-- NO EDITAR --></div>
		<div id="currentSlide"><!-- NO EDITAR --></div>

		<div id="header">
			<div id="logo" style="background:url(<?php echo $page_owner->getIcon('medium'); ?>) no-repeat;"><!-- NO EDITAR --></div>
		</div>

	</div>

	<div id="footer">
		<h1>[Lugar/Fecha de la presentación aquí]</h1>
		<h2>[Título de la presentación aquí]</h2>
	</div>




<div class="presentation">

	<div class="slide">
		<h1>[Título de la presentación aquí]</h1>
		<h3>[Nombre del ponente aquí]</h3>
		<h4>[Datos extra aquí]</h4>
	</div>


	<div class="slide">
		<h1>[Título de la diapositiva]</h1>
	
		<ul>
			<li>[Punto uno]</li>
			<li>[Punto dos]</li>
			<li>[Punto tres]</li>
			<li>[Punto cuatro]</li>
			<li>[Punto cinco]</li>
		</ul>
	
		<div class="handout">
		
			[Añade aquí cualquier nota o información que desees mostrar en la versión impresa, pero no en la versión en pantalla]
		
		</div>
	
	</div>
	<!--fin slide-->

</div>

</body>
</html>
