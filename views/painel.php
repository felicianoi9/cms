<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Painel Administrativo</title>
    <link rel="stylesheet" href="<?php echo BASE;?>assets/css/painel.css">
</head>
<body>
	
    <div class="menu">
      <ul>          
          <a href="<?php echo BASE;?>painel"><li>Páginas</li></a>
          <a href="<?php echo BASE;?>painel/menus"><li>Menus</li></a>
          
      </ul>     
    </div>
    <div class="container">
        <?php $this->loadViewInTemplate($viewName, $viewData);?>
    </div>
    
	

	

</body>
</html>