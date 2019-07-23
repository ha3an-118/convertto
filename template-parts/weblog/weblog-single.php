<div class="col-12">

  <!-- ================ post media ============== -->

      
      <?php the_post_thumbnail("ha-singlepage",['class' => 'img-fluid d-flex mx-auto ']); ?>

  <!-- =============== post context ============= -->
  <section class="text-right pt-4">
    <header class="h4 p-3">
      <?php the_title(); ?>
    </header>
    <article class="p-4">
          <?php the_content(); ?>
    </article>
  </section>

</div>
