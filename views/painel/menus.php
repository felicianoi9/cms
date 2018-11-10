<table border="0" width="100%">
    <tr>
        <th align="left">Id</th>
        <th align="left">Nome</th>
        <th align="left">URL</th>
        <th align="left">Ações</th>
    </tr>
    <?php foreach($menus as $m):?>
    <tr>        
        <td><?php echo $m['id'];?></td>
        <td><?php echo utf8_encode($m['name']);?></td>
        <td><?php echo utf8_encode($m['url']);?></td> 
        <td></td>        
    </tr>
    <?php endforeach;?>
</table>