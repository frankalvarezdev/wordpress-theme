<!DOCTYPE html>
<html lang="es">
<head>
    <?= get_header() ?>
    <title>Prueba</title>
</head>
<body>
    <?php require_once __DIR__ . '/components/navbar.php'; ?>
    <main id="swup" class="transition-fade">
        <div class="container has-top-margin">
            <?php if (have_posts()) : ?>
                <div class="postcards gap">
                    <?php while (have_posts()) : the_post(); ?>

                        <a href="<?php the_permalink() ?>" class="item has-transition postcard">
                            <div class="postcard-image">
                                <?=getImage(get_the_post_thumbnail_url())?>
                            </div>
                            <div class="postcard-data">
                                <h2 class='postcard-title'><?php the_title(); ?></h2>
    
                                <span class='text-opacity:1 postcard-time'>
                                    <?=icon('schedule')?> <?=fromNow(get_the_date('Y-m-d H:i:s')); ?>
                                </span>
                            </div>
                        </a>
                        
                    <?php endwhile; ?>
                </div>

            <?php else : ?>
                <p><?php esc_html_e('No se encontraron articulos'); ?></p>
            <?php endif; ?>
        </div>
    </main>
    <?php wp_footer(); ?>
    <?= get_footer() ?>
</body>
</html>