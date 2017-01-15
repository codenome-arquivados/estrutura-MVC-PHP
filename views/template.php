<html>
    <head>
        <meta charset="UTF-8">
        <title>Youtube</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css" />
        <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
    </head>
    <body>
    	<div class="topo">
            <a href="<?php echo BASE_URL; ?>">Home</a> - 
            <a href="<?php echo BASE_URL; ?>/usuarios">Usuários</a> -
            <a href="<?php echo BASE_URL; ?>/videos">Vídeos</a>
    	</div>
        <?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    </body>
</html>
