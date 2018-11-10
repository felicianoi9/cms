<h1>Minhas páginas</h1>
<table border="0" width="100%">
    <tr>
        <th align="left">Id</th>
        <th align="left">URL</th>
        <th align="left">Título</th>
        <th align="left">Ações</th>
    </tr>
    <?php foreach($pages as $p):?>
    <tr>        
        <td><?php echo $p['id'];?></td>
        <td><?php echo utf8_encode($p['url']);?></td>
        <td><?php echo utf8_encode($p['title']);?></td> 
        <td></td>        
    </tr>
    <?php endforeach;?>
</table>