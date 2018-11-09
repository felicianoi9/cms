<ul>
    <?php foreach($menu as $menuitem):?>
    <a href="<?php echo BASE;?><?php echo $menuitem['url']?>" ><li><?php echo utf8_encode($menuitem['name']);?></li></a>
    <?php endforeach;?>
</ul>