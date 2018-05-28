    <?php $repositorio = 6570; 
        $post_id_6570 = get_post($repositorio);
        $titulo = $post_id_6570->post_title;
        $content = $post_id_6570->post_content;
        $image = get_the_post_thumbnail($post_id_6570);
        ?>
        <div class="hpn-bloque-titulo margin-bottom">
            <h6 class="prefix celeste">Repositorio digital</h6>
            <h4 class="txt-blanco"><a href="<?php the_permalink($post_id_6570); ?>"><?php echo($titulo); ?></a></h4>
            <hr class="border blanco xs separate"></hr>
            <h5 class="txt-xxs txt-blanco"><?php echo($content); ?></h5>
            <div class="container-input-btn margin-top-25 sm">    
                <input type="search" class="rounded-left w-xl h-sm"></input>
                <button class="rounded-right magenta h-sm mdi mdi-file-find mdi-18px"></button>
            </div>
        </div>
        <div class="hpn-container-img">
            <img alt="guias" class="h-sm w-sm center" scr="<?php echo($image);?>
        </div>