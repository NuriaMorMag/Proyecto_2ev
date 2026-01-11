<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shooting Mood | Nuria Moreno</title>
    <meta name="description" content="A photography blog showcasing particular and beautiful moments of people.">
    <meta name="keywords"
        content="photography, portraits, camera, session, photo editing, photography types, photography blog, photo model">
    <meta name="author" content="Nuria Moreno Magaña">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="web/img/favicon.jpg"> <!-- icon in the browser tab -->

    <!-- CSS común -->
    <link rel="stylesheet" href="web/css/style.css?v=2">

    <!-- CSS específico según la vista -->
    <?php if (isset($page)): ?>
        <link rel="stylesheet" href="web/css/<?= $page ?>.css">
    <?php endif; ?>
</head>

<body>

    <header>
        <nav>
            <ul>
                <!-- Ponemos class="active" según la página en la que esté -->
                <li><a href="index.php?page=home"
                        class="<?= (isset($page) && $page === 'home') ? 'active' : '' ?>">
                        Home
                    </a>
                </li>
                <li><a href="index.php?page=gallery"
                        class="<?= (isset($page) && $page === 'gallery') ? 'active' : '' ?>">
                        Gallery
                    </a>
                </li>
                <li><a href="index.php?page=about"
                        class="<?= (isset($page) && $page === 'about') ? 'active' : '' ?>">
                    About me
                    </a>
                </li>
                <li><a href="index.php?page=contact"
                        class="<?= (isset($page) && $page === 'contact') ? 'active' : '' ?>">
                    Contact
                    </a>
                </li>
                <li><a href="index.php?page=blog"
                        class="<?= (isset($page) && $page === 'blog') ? 'active' : '' ?>">
                    Blog
                    </a>
                </li>
            </ul>

            <!-- Welcome y Logout solo aparecen si la sesión existe -->
            <?php if (isset($_SESSION['user'])): ?>
                <p class="welcome">Welcome, <?= htmlspecialchars($_SESSION['name']) ?></p>

                <form method="post" class="logout-form">
                    <button type="submit" name="order" value="Logout">Logout</button>
                </form>

            <?php endif; ?>

        </nav>
    </header>

    <main class="<?= isset($page) ? $page . '-page' : '' ?> page-container">