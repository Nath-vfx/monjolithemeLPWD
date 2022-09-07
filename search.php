<?php get_header(); ?>
<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    //The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>Recherche pour: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Aucun résultat</h2>
        <div class="alert alert-info">
          <p>Désolé, les critères de recherches n'ont rien trouvé, réitéré votre recherche avec d'autres mots clés</p>
        </div>
<?php } ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>