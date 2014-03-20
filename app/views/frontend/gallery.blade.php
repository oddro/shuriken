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
          <h2 class="title" id="shop">Gallery Product</h2>
          <div class="divider"></div>
          @foreach ($product as $key => $value)
            <div class="col-sm-4">
              <div class="oddro-services custom-shape">
                {{ $value->img() }}
                <h3>{{ $value->name }}</h3>
                <p><a href="#detail-{{ $value->id }}" class="fancybox">buy</a></p>
              </div> <!-- /.service -->
            </div>
            <div id="detail-{{ $value->id }}" style="display:none">
              <h2>Buy this item</h2>
              <hr>
              <form accept-charset="UTF-8" action="/marketplace/992-samoyed-sticker/purchase" method="post">
                <div class="content">
                  <h4>{{ $value->name }} {{ $value->size->name }}</h4>
                  <table id="variant-quantities" class="radio">
                    <tbody>
                      @foreach ($value->price as $price)
                      <tr class="checked" data-quantity="{{ $price->qty }}">
                        <td class="quantity">
                          <label class="checked" for="quantity_10">
                            <input checked="checked" id="quantity_50" name="quantity" value="{{ $price->qty }}" type="radio">
                            10
                          </label>
                        </td>
                        <td class="price">
                          <span>Rp {{ $price->price }}</span>
                        </td>
                        <td class="savings"> 
                          {{ $price->disc }}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <button class="blue medium" name="button" type="submit">Add to cart</button>
              </form>
            </div>
          @endforeach
          <div class="clearfix"></div>
        {{ $product->links(); }}
        <br><br><br>
          <div class="clearfix"></div>
        </div>
      </div>
@stop 