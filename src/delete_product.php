<?php include 'header.php'; ?>

<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success' role='alert'>Produto excluído com sucesso!</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Erro ao excluir produto: " . $conn->error . "</div>";
    }

    $stmt->close();
} else {
    echo "<div class='alert alert-danger' role='alert'>ID de produto não fornecido.</div>";
}

$conn->close();
?>

<a href="list_products.php" class="btn btn-primary">Voltar à Lista de Produtos</a>

<?php include 'footer.php'; ?>
