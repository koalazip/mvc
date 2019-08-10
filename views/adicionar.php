<h3>Adicionar</h3>

<?php if($error == 'exist'): ?>
    <div style="color:brown">Email já existe, tente outro.</div><br>
<?php endif; ?>
<form method="POST" action="<?php echo BASE_URL;?>contatos/salvar">
    <label for="nome">Nome:</label>
    <input type="text" name="nome"><br><br>
    <label for="email">Email:</label>
    <input type="text" name="email">
    <br><br>
    <input type="submit" value="Adicionar">


</form>