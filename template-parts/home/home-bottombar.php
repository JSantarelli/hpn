<div class="hpn-bottombar">
            <!-- TODO: Loopear sobre una sola card, y hacer un FOR de sass para los diferentes iconos y colores -->
            <!-- Cambiar ID's por los que correpondan del HPN -->
            <div class="card-01 azul-oscuro">
                <div class="hpn-card-bloque-texto">
                    <div class="hpn-card-titulo txt-blanco"><?php $my_id = 6544; $post_id_6544 = get_post($my_id); $titulo = $post_id_6544->post_title; ?><a href="<?php the_permalink($post_id_6544); ?>"><?php echo($titulo); ?></a></div>
                    <p class="hpn-card-texto txt-blanco"><?php $content = $post_id_6544->post_content; echo $content;?></p>
                </div>
            </div>
            <div class="card-02 azul">
                <div class="hpn-card-img magenta">
                    <div class="hpn-icon magenta mdi mdi-hospital mdi-48px"></div>
                </div>
                <div class="hpn-card-bloque-texto">
                    <div class="hpn-card-titulo txt-negro"><?php $my_id = 6541; $post_id_6541 = get_post($my_id); $titulo = $post_id_6541->post_title; ?><a href="<?php the_permalink($post_id_6541); ?>"><?php echo($titulo); ?></a></div>
                    <p class="hpn-card-texto txt-negro"><?php $content = $post_id_6541->post_content; echo $content;?></p>
                </div>
            </div>
            <div class="card-03 verde">
                <div class="hpn-card-img cyan">
                    <div class="hpn-icon cyan mdi mdi-school mdi-48px"></div>
                </div>
                <div class="hpn-card-bloque-texto">
                    <div class="hpn-card-titulo txt-negro"><?php $my_id = 6537; $post_id_6537 = get_post($my_id); $titulo = $post_id_6537->post_title; ?><a href="<?php the_permalink($post_id_6537); ?>"><?php echo($titulo); ?></a></div>
                    <p class="hpn-card-texto txt-negro"><?php $content = $post_id_6537->post_content; echo $content;?></p>
                </div>
            </div>
            <div class="card-04 rojo">
                <div class="hpn-card-img verde">
                    <div class="hpn-icon verde mdi mdi-heart-outline mdi-48px"></div>
                </div>
                <div class="hpn-card-bloque-texto">
                    <div class="hpn-card-titulo txt-negro"><?php $my_id = 6539; $post_id_6539 = get_post($my_id); $titulo = $post_id_6539->post_title; ?><a href="<?php the_permalink($post_id_6539); ?>"><?php echo($titulo); ?></a></div>
                    <p class="hpn-card-texto txt-negro"><?php $content = $post_id_6539->post_content; echo $content;?></p>
                </div>
            </div>
        </div>