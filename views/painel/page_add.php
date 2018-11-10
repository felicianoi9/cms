<h1>Adicionar Página</h1>
<form method="POST">
    <fieldset>
        <fieldset style = "border: 0px;">
            <input width="100%" type="submit" value="Adicionar Página"  />
        </fieldset>
        <fieldset>            
            <input type="text" name ="title" placeholder="Digite o nome do Menu - Primeira letra maiúscula." required />
            
        </fieldset>
        <fieldset>
            <input type="text" name ="url" placeholder="Digite o url - somente letras minúsculas." required />
        </fieldset>
        <fieldset>
            <legend>
                <fieldset>
                    Click para criar menu automaticamente:
                    <input type="checkbox" name="add_menu" value="Sim" /> 

                </fieldset>
            </legend>
            <textarea name="body" id="body_text" placeholder="Digite seu texto." ></textarea>
            
        </fieldset>
        
    </fieldset>    
</form>

<script type="text/javascript" src="<?php echo BASE;?>ckeditor/ckeditor.js" ></script>
<script type="text/javascript" >
    window.onload = function(){
        CKEDITOR.replace("body_text");  
                
    }
    
</script>