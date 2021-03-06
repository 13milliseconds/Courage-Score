@php global $post @endphp

<section id="top">
  <h1>{!! App::title() !!}</h1>
  @php the_content() @endphp
</section>

@if($data['allStars'])

<section id="photos">
  <div class="photos-wrap">
    @foreach($data['allStars'] as $post)
      <div class="photo">
        <a href="#{{ $post->post_name }}">
        {!! get_the_post_thumbnail($post->ID, 'thumbnail') !!}
        </a>
      </div>
    @endforeach
  </div>
</section>

  <section id="legislators">
    <div class="row">
      @foreach($data['allStars'] as $post)
      @php setup_postdata( $post ) @endphp

      <div class="col-md-6">
        @include('partials.rep-block')
      </div>
      
      @php wp_reset_postdata() @endphp
      @endforeach
    </div>
  </section>
@endif