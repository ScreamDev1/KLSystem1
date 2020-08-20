<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package klsystem2
 */

get_header();
?>
	<main id="primary" class="site-main">
		<section class="error-404 not-found">
            <div class="container">
                <div class="img-404">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/404.png" alt="">
                </div>
                <div class="text-404">
                    <span class="features__item__header">404 — страница не найдена</span><br>
                    <span class="features__item__desc">Такой страницы нет, она была удалена или переименована.</span>
                </div>

                <a href="/" class="request">На главную</a>
            </div>
		</section><!-- .error-404 -->
	</main><!-- #main -->
<?php
get_footer();
