<main id="main" class="main-site">

    <div class="container">

    <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Requested Item(s)</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            
        @if (Cart::instance('requesteditemlist')->count()> 0)

            <div class="wrap-iten-in-cart">
                <h3 class="box-title">Requested Item(s)</h3>
                <ul class="products-cart">											    
                    @foreach(Cart ::instance('requesteditemlist')->content() as $item)
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{ ('assets/images/medicines') }}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
                        

                        @if ($item->model->category_id == "3")
                            
                                <p class="description">{{$item->model->description}}</p>
                           
                        @else 
                            
                                <p class="price">{{$item->model->regular_price}}</p>
                            </div>
                        @endif

                    </li>
                    @endforeach
                </ul>
            </div>
        @else
            <p> No item in the cart </p>
        @endif
    </div><!--end main content area-->
</div><!--end container-->

</main>
