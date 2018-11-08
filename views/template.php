<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Meu Site</title>
</head>
<body>
	<h1>Este é o topo</h1>
	<a href="<?php echo BASE;?>">Home</a>
	<hr/>

	<?php $this->loadViewInTemplate($viewName, $viewData);?>

</body>
</html>