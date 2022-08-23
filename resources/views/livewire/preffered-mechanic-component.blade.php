<main id="main" class="main-site">

    <div class="container">

    <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Doctor's List</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            
        @if (Cart::instance('preferedmechaniclist')->count()> 0)

            <div class="wrap-iten-in-cart">
                <h3 class="box-title">Preferred Doctors </h3>
                <ul class="products-cart">											    
                    @foreach(Cart ::instance('preferedmechaniclist')->content() as $items)
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{ ('assets/images/products') }}/{{$items->model->image}}" alt="{{$items->model->name}}"></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="{{route('product.details',['slug'=>$items->model->slug])}}">{{$items->model->name}}</a>
                            <p class="price">{{$items->model->description}}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        @else
            <div>
                <img src="{{ asset('assets/images/img-1.jpg') }}" alt="" class="img-slide">
                <img src="{{ asset('assets/images/img-2.jpg') }}" alt="" class="img-slide">
                <img src="{{ asset('assets/images/img-3.jpg') }}" alt="" class="img-slide"><br>
                <h2>Dr. Samia from Evercare: Sun-Tues</h2><br>
                <h2>Dr. Robin from Square: Mon- Wed</h2><br>
                <h2>Dr. Rose from United: Fri/ by appointment</h2>

            </div>
        @endif
    </div><!--end main content area-->
</div><!--end container-->
</main>