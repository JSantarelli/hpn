<div class="hpn-bloque-titulo margin-bottom">
    <h6 class="prefix magenta">Vias de contacto</h6>
    <h4 class="txt-negro">Preguntas frecuentes</h4>
    <hr class="border cyan xs separate"></hr>
    <h5 class="txt-xxs txt-negro">Bajada lateral a varias lineas. m cati soluta molestias iure facere dolorum adipisci eum? Sae</h5>
</div>
<div class="container-inputs separate">
    <!-- Accordion -->
    <?php $faqs = new WP_Query('category_name=faqs&posts_per_page=5');
    $i = 1;
    if ($faqs->have_posts()) : while ($faqs->have_posts()): $faqs->the_post();
    ?> 
    <div hpn-accordion class="tab">
        <input id="tab-<?=$i?>" type="checkbox" name="tabs">
        <label for="tab-<?=$i?>"><?php the_title(); ?></label>
        <div class="tab-content">
            <p><?php the_content(); ?></p>
        </div>
    </div>
    <?php $i++; endwhile; endif;
    wp_reset_query(); 
    ?>
</div>