<?php // Template Name: Galeria ?>


<?php $galeria = get_field_objects(); ?>

<div class="banner-home">

    <?php for($i = 1 ; $i <= sizeof($galeria) ; $i++) : ?>
        <div><img src="<?php the_field('slider_imagem_'.$i); ?>"></div>
    <?php endfor; ?>

</div>
