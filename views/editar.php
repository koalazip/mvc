<h3>Editar</h3>

<?php if(isset($_GET['error']) && $error == 'exist'): ?>
    <div style="color:brown">Email já existe, tente outro.</div><br>
<?php endif; ?>
<form method="POST">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?php echo $info['nome']; ?>"><br><br>
    <label for="email">Email:</label>
    <?php echo $info['email']; ?>
    <br><br>
    <input type="submit" value="Editar">


</form>