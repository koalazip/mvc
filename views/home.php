<a href="<?php echo BASE_URL; ?>contatos/adicionar">[ ADICIONAR ]</a>

<table border="1px" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $item): ?>
    <tr>
        <td><?php echo $item['id']; ?></td>
        <td><?php echo $item['nome']; ?></td>
        <td><?php echo $item['email']; ?></td>
        <td>
            <a href="<?php echo BASE_URL; ?>contatos/editar/<?php echo $item['id']?>">[EDITAR]</a>
            <a href="<?php echo BASE_URL; ?>contatos/deletar/<?php echo $item['id']?>">[DELETAR]</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>