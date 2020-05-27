<div class="col-md-6 mb-4">
  <div class="card h-100 shadow-sm">
    <div class="card-header bg-transparent">
      <div class="row">
        <div class="col-md-auto">
          <p class="h4"><?= the_title(); ?></p>
        </div>
        <div class="col">
          @php( $post_tags = get_the_tags() )
          @if( $post_tags )
          @foreach( $post_tags as $tag )
          <span class="badge badge-light">{{ $tag->name }}</span>
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
</div>