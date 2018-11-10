<h1>Editar Menu</h1>
<form method="POST">
    <fieldset>
        <fieldset>
            <legend><fieldset>Digite o Nome do menu:</fieldset></legend>
            <input type="text" name ="name" value="<?php echo utf8_encode($menus['name']);?>" required />
        </fieldset>
        <hr>
        <fieldset>            
        <legend><fieldset>Digite o Nome da url <small>(somente minúsculas separadas por ifem)</small></fieldset></legend>
            <input type="text" name ="url" value="<?php echo utf8_encode($menus['url']);?>" required />
        </fieldset>
        <fieldset style = "border: 0px;">
            <input width="100%" type="submit" value="Editar Menu" />
        </fieldset>
    </fieldset>    
</form>