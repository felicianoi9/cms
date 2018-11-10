<h1>Configurações</h1>

<form method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>
            
                Titulo do Site:
            
        </legend>
	    <input type="text" name="site_title" value="<?php echo $site_title; ?>" />	
    </fieldset>
    <fieldset>
        <legend>
            
                Texto de boas vindas:
            
        </legend>    
	    <input type="text" name="home_welcome" value="<?php echo $home_welcome; ?>" />
    </fieldset>
    <fieldset>
        <legend>            
                Template do site:            
        </legend>
        <select name="site_template">
            <option value="default" <?php echo ($site_template=='default')?'selected="selected"':''; ?>>Padrão</option>
            <option value="default2" <?php echo ($site_template=='default2')?'selected="selected"':''; ?>>Padrão 2</option>
            <option value="construcao" <?php echo ($site_template=='construcao')?'selected="selected"':''; ?>>Em Construção</option>
        </select>
    </fieldset>
    <fieldset>
        <legend >            
            Banner da página inicial:           
        </legend>
	<input type="file" name="home_banner" />
    </fieldset>
	<input type="submit" class="botao add" value="Salvar" />
</form>