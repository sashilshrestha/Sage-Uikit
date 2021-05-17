@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  <div class="uk-child-width-1-2@m uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
            <h3 class="uk-card-title">Left</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
            <h3 class="uk-card-title">Right</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
</div>
  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
