<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($config['locale'] ?? 'en'); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($config['podcast_title']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($config['podcast_subtitle'] ?? ''); ?>">

    <!-- Citadel Theme CSS -->
    <link rel="stylesheet" href="<?php echo $config['theme_path']; ?>/style/custom.css">

    <!-- Bootstrap 5 -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YcnS/1fQ0teG6vIFonDq39ITRsNBIapy+HQ"
          crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo $config['url']; ?>/images/favicon.ico" type="image/x-icon">
</head>
<body>
    <nav class="navbar navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $config['url']; ?>">
                <?php if (!empty($config['podcast_image'])): ?>
                    <img src="<?php echo htmlspecialchars($config['podcast_image']); ?>"
                         alt="<?php echo htmlspecialchars($config['podcast_title']); ?>"
                         height="40" class="me-2">
                <?php endif; ?>
                <?php echo htmlspecialchars($config['podcast_title']); ?>
            </a>
        </div>
    </nav>
    <main class="container mt-4">
