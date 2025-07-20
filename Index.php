<?php
// Halaman utama CLOTHESIS
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CLOTHESIS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Asets/Style.css">
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <!-- Konten utama: Sidebar kiri + konten utama -->
    <div class="main-content">
        <!-- Sidebar samping kiri -->
        <aside class="sidebar">
            <h3>Menu</h3>
            <ul>
                <li><a href="article.php">Article</a></li>
                <li><a href="#">Event</a></li>
                <li><a href="galery.php">Galeri</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </aside>

        <!-- Area konten utama -->
        <main class="content">
            <div class="image-container">
                <img src="Gambar 1 - copy.jpg" alt="Clothesis Fashion Image">
            </div>
        </main>
    </div>
     <?php include 'Partials/footer.php'; ?>
</body>
</html>
