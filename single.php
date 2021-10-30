<!DOCTYPE html>
<html lang="es">
<head>
    <?= get_header() ?>
    <title><?php the_title() ?></title>
</head>
<body>
    <?php require_once __DIR__ . '/components/navbar.php'; ?>
    <main id="swup" class="transition-fade">
        hola xd
    </main>
    <?php wp_footer(); ?>
    <?= get_footer() ?>
</body>
</html>