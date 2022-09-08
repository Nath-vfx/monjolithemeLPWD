<?php get_header(); ?>
<?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
       <article class="aliment">
           <?php the_post_thumbnail( 'large' ); ?>
           <h1 class="title">
           <?php the_title(); ?>
           </h1>
           <ul>
            <li> Glucide : <?php the_field("glucide") ?></li>
            <li> Lipide : <?php the_field("lipide") ?></li>
            <li> Protéine : <?php the_field("proteine") ?></li>
           </ul>
           <div class="content">
               <?php the_content(); ?>
           </div>
       </article>
   <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>