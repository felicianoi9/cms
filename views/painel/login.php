<?php if(!empty($msg)):?>
    <fieldset><?php echo $msg;?></fieldset>
<?php endif;?>
<fieldset>
<form method="POST">
<fieldset><input type="email" name="email" placeholder="Digite seu email" required/></fieldset>
<fieldset><input type="password" name="password" placeholder="Digite sua Senha" required/></fieldset>
<input type="submit" value="Entrar" />
</form>
</fieldset>