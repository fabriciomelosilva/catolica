<?php
/**
 * The template for displaying all single posts of news
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package catolica
 */

get_template_part('sections/nav', 'getfields');

get_header();

get_template_part('sections/nav', 'index'); 
?>

<main>

    <section class="cursos-interna">

        <h5 class="col-100 center">Cursos</h5>

        <h1 class="col-100 center"><?php the_title(); ?></h1>

        <h5 class="col-100 center">Graduação</h5>

        <div class="col-100 texto">

            <figure class="cursos-capa"><img src="assets/img/fotos/05.jpg"></figure>

        </div>

        <article class="col-60 cursos-desc">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, officia quidem. Iste voluptatum provident quibusdam perferendis minima, aliquid assumenda nesciunt tempore maxime officiis iusto esse aliquam illo, obcaecati odio adipisci accusantium vero id dicta hic officia cupiditate in dignissimos! Consequuntur modi sunt dolorum mollitia veniam delectus exercitationem illum commodi dicta!</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, officia quidem. Iste voluptatum provident quibusdam perferendis minima, aliquid assumenda nesciunt tempore maxime officiis iusto esse aliquam illo, obcaecati odio adipisci accusantium vero id dicta hic officia cupiditate in dignissimos! Consequuntur modi sunt dolorum mollitia veniam delectus exercitationem illum commodi dicta!</p>

            <div class="col-25">
                <div class="col-100 cursos-dados">
                    <img src="assets/img/icone-coordenacao.png" alt="">
                    <h5>Coordenação</h5>
                    <p><?php echo $GLOBALS["curso_fields"]["coordenacao"]?></p>
                </div>
            </div>
            <div class="col-25">
                <div class="col-100 cursos-dados">
                    <img src="assets/img/icone-periodo.png" alt="">
                    <h5>Período</h5>
                    <p>Manhã e Noite</p>
                </div>
            </div>
            <div class="col-25">
                <div class="col-100 cursos-dados">
                    <img src="assets/img/icone-duracao.png" alt="">
                    <h5>Duração</h5>
                    <p>4 ou 6 anos</p>
                </div>
            </div>
            <div class="col-25">
                <div class="col-100 cursos-dados">
                    <img src="assets/img/icone-vagas.png" alt="">
                    <h5>Vagas</h5>
                    <p>120</p>
                </div>
            </div>

        </article>

        <article class="col-40 aside">

            <a href="#" class="btn-pri">Inscreva-se</a>
            <a href="#" class="btn-sec">Aluno online</a>

            <h1>Mais cursos</h1>

            <div class="cursos-accordion">
                <button class="accordion">Ciências humanas</button>
                <div class="panel">
                    <p><a href="cursos-interna.php">Bacharelado em Filosofia</a></p>
                    <p><a href="cursos-interna.php">Bacharelado em Sociologia</a></p>
                    <p><a href="cursos-interna.php">Bacharelado em Antropologia</a></p>
                </div>
            </div>

            <div class="cursos-accordion">
                <button class="accordion">Ciências humanas</button>
                <div class="panel">
                    <p><a href="cursos-interna.php">Bacharelado em Filosofia</a></p>
                    <p><a href="cursos-interna.php">Bacharelado em Sociologia</a></p>
                    <p><a href="cursos-interna.php">Bacharelado em Antropologia</a></p>
                </div>
            </div>

            <div class="cursos-accordion">
                <button class="accordion">Ciências humanas</button>
                <div class="panel">
                    <p><a href="cursos-interna.php">Bacharelado em Filosofia</a></p>
                    <p><a href="cursos-interna.php">Bacharelado em Sociologia</a></p>
                    <p><a href="cursos-interna.php">Bacharelado em Antropologia</a></p>
                </div>
            </div>

        </article>


    </section>

    </main>


<?php get_footer(); ?>
