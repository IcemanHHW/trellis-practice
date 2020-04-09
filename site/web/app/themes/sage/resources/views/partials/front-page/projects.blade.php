@php
$args = array(
'post_type' => 'post',
'posts_per_page' => 2,
);

$loop = new WP_Query( $args );
@endphp
<div class="container">
  <h2>Portfolio</h2>
  <p class="h5">M'n laatste projecten</p>
  <div class="card-deck mt-3">
    @while ( $loop->have_posts() )
    @php( $loop->the_post() )
      <div class="card shadow-sm">
        <div class="card-header bg-transparent">
          <div class="row">
            <div class="col-md-auto">
              <p class="h4"><?= the_title(); ?></p>
            </div>
            <div class="col">
              <?= $post_tags = get_the_tags(); ?>
              @if( $post_tags )
                  @foreach( $post_tags as $tag )
                   <span class="badge badge-light"><?= echo $tag->name; ?></span> 
                  @endforeach
              @endif
            </div>
          </div>
        </div>
        @if( has_post_thumbnail() )
          <img src="<?= the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?= the_title(); ?>">
         @endif
        <div class="card-body">
          <p class="card-text"><?= the_excerpt(); ?></p>
        </div>
        <div class="card-footer bg-transparent">
          <a href="<?php the_permalink(); ?>" class="card-link">Lees meer</a>
        </div>
      </div>
     @endwhile
    @php( wp_reset_postdata() )
  </div>
</div>