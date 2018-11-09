<div class="home_banner" style="background-image:url('<?php echo BASE;?>assets/images/<?php echo $this->config['home_banner'];?>')">
</div>
<div class="home_banner_txt"><?php echo $this->config['home_welcome'];?></div>

<div class="home_depo">    
    <h2>Depoimentos</h2>        
        <?php foreach($testimony as $t):?>
        <div class="home_depo_item">
            <fieldset>
                <legend>
                    <fieldset style="background-color: #aaa; width: 100px;">
                        <strong><?php echo utf8_encode($t['name']);?></strong>
                    </fieldset> 
                </legend>
                <?php echo utf8_encode($t['msg_text']);?>
            </fieldset>  
        </div>          
        <?php endforeach;?>
    
</div> 

<div class="home_cta">
    Deseja conferir nossos serviços?<br/>
    <a href="<?php echo BASE;?>servicos"><div>Conferir nossos Seviços</div></a>
</div> 

