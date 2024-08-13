<?php include 'header.php'; ?>

<h2 class="mb-4">Editar Produto</h2>
<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <form action="update_product.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Preço:</label>
                <input type="text" id="price" name="price" class="form-control" value="<?php echo $row['price']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição:</label>
                <textarea id="description" name="description" class="form-control" required><?php echo $row['description']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar Produto</button>
        </form>
        <?php
    } else {
        echo "<div class='alert alert-danger' role='alert'>Produto não encontrado.</div>";
    }

    $stmt->close();
} else {
    echo "<div class='alert alert-danger' role='alert'>ID de produto não fornecido.</div>";
}

$conn->close();
?>

<a href="list_products.php" class="btn btn-primary">Voltar à Lista de Produtos</a>

<?php include 'footer.php'; ?>
