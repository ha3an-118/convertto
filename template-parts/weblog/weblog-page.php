<!-- ============= weblog post ================== -->
<div class="d-flex flex-column col-lg-4 ">

      <!-- ============ picture of post ========= -->
      <div class="">
            <?php the_post_thumbnail("portfolio-item",['class' => 'maskimg img-fluid']); ?>
      </div>
      <!-- =========== text of the post ========= -->
      <section class="text-center">
        <header>
          <a href="<?php the_permalink(); ?>" class="text-1 hover-text-3 h4 ">
            <?php the_title(); ?>
          </a>
        </header>
        <article class="pt-2">
            <?php the_excerpt(); ?>
        </article>
      </section>



</div>
<!-- ============== end weblog post ============= -->
