<h1>Editar Página</h1>
<form method="POST">
    <fieldset>
        <fieldset style = "border: 0px;">
            <input width="100%" type="submit" value="Editar página"  />
        </fieldset>
        <fieldset>                        
            <input type="text" name ="title" value="<?php echo $page['title'];?>" />
            
        </fieldset>
        <fieldset>
            <input type="text" name ="url" value="<?php echo $page['url'];?>" />
            
        </fieldset>
        <fieldset>
            
            <textarea name="body" id="body_text"  ><?php echo $page['body'];?></textarea>
            
        </fieldset>
        
    </fieldset>    
</form>

<script type="text/javascript" src="<?php echo BASE;?>ckeditor/ckeditor.js" ></script>
<script type="text/javascript" >
    window.onload = function(){
        CKEDITOR.replace("body_text");  
       
    }
    
</script>