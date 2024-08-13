<?php include 'header.php'; ?>

<h2 class="mb-4">Cadastro de Produto</h2>
<form action="insert_product.php" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Preço:</label>
        <input type="text" id="price" name="price" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrição:</label>
        <textarea id="description" name="description" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
</form>

<?php include 'footer.php'; ?>
