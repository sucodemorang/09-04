<?php
include 'db.php';
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Colegio Alberto Gomes Veiga</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <h1>Colegio Alberto Gomes Veiga</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a herf="#">Cursos</a><li>
                <li><a href="#">Contato</a><li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </nav>
        <p class="login-status">Logado como: <strong><?php echo $_SESSION['username']; ?></strong></p>
    </header>

    <main class="content">
        <section>
            <h2>Bem vindo ao nosso Colegio!</h2>
            <p>O Colegio Alberto Gomes Veiga oferece ensino de qualidade com foco em inovação valores humanos. Aqui formamos cidadões preparados para o futuro.</p>
        </section>
    </main>
    
    <footer class="site-footer">
        <p>&copy; 2025 Colegio Alberto Gomes Veiga. Todos os direitos reservados.</p>
    </footer>
</body>
</html>