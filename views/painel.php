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
          <li>Página 1</li>
          <li>Página 2</li>
          <li>Página 3</li>
          <li>Página 4</li>
      </ul>
      
      <a href="<?php echo BASE;?>painel/logout"><div class="logout">Sair</div></a>
          
      
    </div>
    <div class="container">
        <?php $this->loadViewInTemplate($viewName, $viewData);?>
    </div>
    
	

	

</body>
</html>