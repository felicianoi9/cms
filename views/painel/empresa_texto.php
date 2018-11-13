<form method="POST">
    <fieldset>
        <fieldset style = "border: 0px;">
            <input width="100%" type="submit" value="Salvar"  />
        </fieldset>
        
        <fieldset>
            <legend><fieldset>A empresa:</fieldset></legend>  
            <textarea name="texto" id="body_text1"  ><?php echo $empresa['texto'];?></textarea>            
        </fieldset>
        <fieldset>
            <legend><fieldset>Missão:</fieldset></legend>  
            <textarea name="missao" id="body_text2"  ><?php echo $empresa['missao'];?></textarea>            
        </fieldset>
        <fieldset>
            <legend><fieldset>Visão:</fieldset></legend>  
            <textarea name="visao" id="body_text3"  ><?php echo $empresa['visao'];?></textarea>            
        </fieldset>
        <fieldset>
            <legend><fieldset>Valores:</fieldset></legend>  
            <textarea name="valores" id="body_text4"  ><?php echo $empresa['valores'];?></textarea>            
        </fieldset>
        
    </fieldset>    
</form>

<script type="text/javascript" src="<?php echo BASE;?>ckeditor/ckeditor.js" ></script>
<script type="text/javascript" >
    window.onload = function(){
        CKEDITOR.replace("body_text1");  
        CKEDITOR.replace("body_text2"); 
        CKEDITOR.replace("body_text3"); 
        CKEDITOR.replace("body_text4"); 
       
    }
    
</script>