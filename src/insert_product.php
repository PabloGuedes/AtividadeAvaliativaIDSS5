<?php include 'header.php'; ?>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $price = isset($_POST['price']) ? trim($_POST['price']) : '';
    $description = isset($_POST['description']) ? trim($_POST['description']) : '';

    $sql = "INSERT INTO products (name, price, description) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sds", $name, $price, $description); 

        if ($stmt->execute()) {
            echo "<div class='alert alert-success' role='alert'>Produto cadastrado com sucesso!</div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>Erro ao cadastrar produto: " . $stmt->error . "</div>";
        }

        $stmt->close();
    } else {
        echo "<div class='alert alert-danger' role='alert'>Erro ao preparar a consulta: " . $conn->error . "</div>";
    }

    $conn->close();
}
?>

<a href="list_products.php" class="btn btn-primary">Voltar à Lista de Produtos</a>

<?php include 'footer.php'; ?>
