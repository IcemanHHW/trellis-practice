<article @php post_class() @endphp>
<div class="jumbotron jumbotron-fluid bg-primary text-white">
  <div class="container">
    <h1 class="display-3">{!! get_the_title() !!}</h1>
  </div>
</div>
  <div class="container">
    @if( has_post_thumbnail() )
      <img src="<?= the_post_thumbnail_url(); ?>" class="img-fluid mb-3" alt="<?= the_title(); ?>">
    @endif
    @php the_content() @endphp
  </div>
</article>
