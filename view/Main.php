<?php
	# Uso de sesiones.
	session_start();
	# Rutas
	include_once("rutas/Url.php");

	# Archivo de estilos
	require_once(INC."Header.php");
	# Modals
	include(PAGES.'ViewModals.php');
	# Acceso de usario (Login).
	if (!isset($_SESSION['id'])) {
	    require_once('auth/ViewLogin.php');
	    require_once(INC.'Footer.php');
	} 
	# Acceso al sistema Panel principal
	else {?>
	<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed">
	    <div class="wrapper">
	      	<?php require_once(INC.'Nav.php'); ?>
	       	<input type="hidden" value="<?= $_GET['i']; ?>" id="id" name="id" />    	
	        <!-- Contenedor principal -->
	        <div class="content-wrapper"> </div>
	        <?php require_once(INC.'Copy.php'); 
	        require_once(INC.'Footer.php'); ?>
	    </div>
	    <script src="<?=ASSETS.SRC.JS?>vPanelEdit.js"></script>
	<?php } ?>
	</body>
</html>
