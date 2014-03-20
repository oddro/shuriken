@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
Contact us ::
@parent
@stop

{{-- Page content --}}
@section('content')
      <div class="jumbotron heading">
        <div class="container netra-landing">
          <div class="left-side">
            <h1>Print Sticker Made Easy</h1>
            <p class="headline_tagline">No Big data, no syncing, no waiting. Just the easiest way to send files—both big and small—from A to B. Simple, secure, and fast.</p>
            <a href="#shop" class="btn btn-outline-inverse btn-lg">Shop Now!</a>
            <a href="getting-started#download" class="btn btn-outline-inverse btn-lg">Get Free Sticker</a>
          </div>
          <div class="right-side">
          </div>
        </div><!-- /.container -->
      </div>

      <div class="container netra-landing">
        <div class="row common">
          <h2 class="title" id="shop">Produk Kami</h2>
          <div class="divider"></div>
          @foreach ($productCategory as $key => $value)
            <div class="col-sm-4">
              <div class="oddro-services custom-shape">
                {{ $value->img() }}
                <h3>{{ $value->name }}</h3>
                <p>{{ $value->description }}</p>
              </div> <!-- /.service -->
            </div>
          @endforeach
        </div>

      </div>
@stop 