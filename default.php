<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $this->config['site_title'];?></title>
    <link rel="stylesheet" href="<?php echo BASE;?>assets/css/default.css">
</head>
<body>
	<div class="top">
        Topo
    </div>
    <div class="menu">
        <?php $this->loadMenu() ;?>
    </div>
    <div class="container">
        <?php $this->loadViewInTemplate($viewName, $viewData);?>
    </div>
    <div class="footer">
        Rodapé
    </div>
	

	

</body>
</html>