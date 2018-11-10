<h1>Configurações</h1>

<form method="POST" enctype="multipart/form-data">
	Titulo do Site:<br/>
	<input type="text" name="site_title" value="<?php echo $site_title; ?>" /><br/><br/>	

	Texto de boas vindas:<br/>
	<input type="text" name="home_welcome" value="<?php echo $home_welcome; ?>" /><br/><br/>

	Template do site:<br/>
	<select name="site_template">
		<option value="default" <?php echo ($site_template=='default')?'selected="selected"':''; ?>>Padrão</option>
		<option value="default2" <?php echo ($site_template=='default2')?'selected="selected"':''; ?>>Padrão 2</option>
		<option value="construcao" <?php echo ($site_template=='construcao')?'selected="selected"':''; ?>>Em Construção</option>
	</select><br/><br/>

	Banner da página inicial:<br/>
	<input type="file" name="home_banner" /><br/><br/>

	<input type="submit" class="botao add" value="Salvar" />
</form>