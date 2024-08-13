<?php include 'header.php'; ?>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE products SET name = ?, price = ?, description = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdsi", $name, $price, $description, $id);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success' role='alert'>Produto atualizado com sucesso!</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Erro ao atualizar produto: " . $conn->error . "</div>";
    }

    $stmt->close();
    $conn->close();
}
?>

<a href="list_products.php" class="btn btn-primary">Voltar à Lista de Produtos</a>

<?php include 'footer.php'; ?>
