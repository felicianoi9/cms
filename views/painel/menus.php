<h1>Menus</h1>

<table border="0" width="100%" align='center'>
    <tr>
        <th  align="left">Id</th>
        <th align="left">Nome</th>
        <th align="left">URL</th>
        <th  align="center">
            Ações: >>>  
            <a href="<?php echo BASE;?>painel/menuAdd"  class="button_menus button_menusAdd">Adicionar Menu</a>
        </th>
    </tr>
    <?php foreach($menus as $m):?>
    <tr>        
        <td><?php echo $m['id'];?></td>
        <td><?php echo utf8_encode($m['name']);?></td>
        <td><?php echo utf8_encode($m['url']);?></td> 
        <td align="center" >
            <a href="<?php echo BASE;?>painel/menuEdit/<?php echo $m['id'];?>" class="button_menus button_menusAdd">Editar</a>    
            <a href="<?php echo BASE;?>painel/menuDel/<?php echo $m['id'];?>" class="button_menus button_menusDel">Deletar</a>
        </td>        
    </tr>
    <?php endforeach;?>
</table>