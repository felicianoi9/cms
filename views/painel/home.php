<h1>Minhas páginas</h1>
<table border="0" width="100%">
    <tr>
        <th align="left">Id</th>
        <th align="left">URL</th>
        <th align="left">Título</th>
        <th align="center">
            Ações: >>>
            <a href="<?php echo BASE;?>painel/pageAdd"  class="button_menus button_menusAdd">Adicionar Página</a>
        </th>
    </tr>
    <?php foreach($pages as $p):?>
    <tr>        
        <td><?php echo $p['id'];?></td>
        <td><a href="<?php echo BASE.$p['url'];?>" target="_blank"><?php echo BASE.utf8_encode($p['url']);?></a></td>
        <td><?php echo utf8_encode($p['title']);?></td> 
        <td align="center" >
            <a href="<?php echo BASE;?>painel/pageEdit/<?php echo $p['id'];?>" class="button_menus button_menusAdd">Editar</a>    
            <a href="<?php echo BASE;?>painel/pageDel/<?php echo $p['id'];?>" class="button_menus button_menusDel">Deletar</a>
        </td>        
    </tr>
    <?php endforeach;?>
</table>