<?php
/**
 * The template for displaying all single posts of news
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package catolica
 */

get_header();

get_template_part('sections/nav', 'index'); ?>

?>

<main>

<section>

<h5 class="col-100 center">Notícias</h5>

<h1 class="col-100 center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur?</h1>

<h5 class="col-100 center">15 nov 2019</h5>

<div class="col-100 texto">

    <figure class="noticia-capa"><img src="assets/img/fotos/01.jpg"></figure>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, laboriosam modi molestiae, nesciunt alias eius nostrum reiciendis nam quae, magni quibusdam nemo! Hic cumque reprehenderit iusto nulla atque fuga eaque totam repellendus magnam odit consequatur voluptate, ad et, quisquam earum dolore corporis. Incidunt perferendis est itaque nemo similique optio tempore!</p>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quibusdam. Accusantium cupiditate explicabo ut tenetur expedita neque mollitia officia doloremque autem, veritatis ullam exercitationem, quo reprehenderit asperiores necessitatibus enim est distinctio id aliquid harum! Nulla vel deserunt officia vitae dolor dolore laudantium eos ad, quas consequatur. Non dolor labore cum illum vitae vel nam quas, odit pariatur illo voluptates suscipit.</p>

    <img src="assets/img/fotos/02.jpg">

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, laboriosam modi molestiae, nesciunt alias eius nostrum reiciendis nam quae, magni quibusdam nemo! Hic cumque reprehenderit iusto nulla atque fuga eaque totam repellendus magnam odit consequatur voluptate, ad et, quisquam earum dolore corporis. Incidunt perferendis est itaque nemo similique optio tempore!</p>
    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quibusdam. Accusantium cupiditate explicabo ut tenetur expedita neque mollitia officia doloremque autem, veritatis ullam exercitationem, quo reprehenderit asperiores necessitatibus enim est distinctio id aliquid harum! Nulla vel deserunt officia vitae dolor dolore laudantium eos ad, quas consequatur. Non dolor labore cum illum vitae vel nam quas, odit pariatur illo voluptates suscipit.</p>

</div>

<h1 class="col-100 center">Mais notícias</h1>
<article class="col-33">

        <div class="noticia-cartao">
            <figure><img src="assets/img/fotos/02.jpg" alt="Foto da notícia"></figure>
            <a href="#">
                <h2>Lorem ipsum dolor sit amet consectetur</h2>
                <small>15 NOV 2019</small>
                <small>Leia mais</small>
            </a>
        </div>

    </article>

    <article class="col-33">

        <div class="noticia-cartao">
            <figure><img src="assets/img/fotos/03.jpg" alt="Foto da notícia"></figure>
            <a href="#">
                <h2>Lorem ipsum dolor sit amet consectetur</h2>
                <small>15 NOV 2019</small>
                <small>Leia mais</small>
            </a>
        </div>

    </article>

    <article class="col-33">

        <div class="noticia-cartao">
            <figure><img src="assets/img/fotos/04.jpg" alt="Foto da notícia"></figure>
            <a href="#">
                <h2>Lorem ipsum dolor sit amet consectetur</h2>
                <small>15 NOV 2019</small>
                <small>Leia mais</small>
            </a>
        </div>

    </article>

</section>

</main>

<?php get_footer(); ?>
