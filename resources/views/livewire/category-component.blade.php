<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Home</a></li>
                <li class="item-link"><a href="/shop" class="link">Product Categories</a></li>
                <li class="item-link"><span>{{$category_name}}</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="banner-shop">
                    <a href="/" class="banner-link">
                        {{-- <figure><img src="assets/images/shop-banner.jpeg" alt=""></figure> --}}
                    </a>
                </div>

                <div class="wrap-shop-control">

                    <h1 class="shop-title">{{$category_name}}</h1>

                    <div class="wrap-right">

                        <div class="sort-item orderby ">
                            <select name="orderby" class="use-chosen" wire:model="sorting">
                                <option value="default" selected="selected">Default sorting</option>
                                <option value="price-asc">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div>

                        <div class="sort-item product-per-page">
                            <select name="post-per-page" class="use-chosen" wire:model="pagesize">
                                <option value="12" selected="selected">12 per page</option>
                            </select>
                        </div>

                        <div class="change-display-mode">
                            <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                            <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                        </div>

                    </div>

                </div><!--end wrap shop control-->

                <div class="row">

                    <ul class="product-list grid-products equal-container">
                     @foreach($products as $product)

                        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
                                        <figure><img src="{{asset('assets/images/products/')}}/{{$product->image}}" alt="{{$product->name}}"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="{{route('product.details',['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">{{$product->regular_price}}</span></div>
                                    
                                    @if ($product->category_id == "3")
                                      
                                        @if  ($product->stock_status == "instock") 
                                           <div class="wrap-price"><span class="-">Available</span></div>
                                        @else 
                                           <div class="wrap-price"><span class="-">Not Available</span></div>
                                        @endif
                                    @else
                                         
                                        
                                        
                                        <div class="wrap-price"><span class="-">{{$product->stock_status}}</span></div> 
                                    @endif

                                    
                                    @if  ($product->stock_status == "instock") 
                                        <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}', {{$product->regular_price}})">Add To Cart</a>
                                    @else 
                                    @if ($product->category_id == "3")
                                            <a href="#" class="btn add-to-cart" wire:click.prevent="addToRequestedItemList ({{$product->id}},'{{$product->name}}', {{$product->regular_price}})">Request for Schedule </a>
                                        @else 
                                        <a href="#" class="btn add-to-cart" wire:click.prevent="addToRequestedItemList ({{$product->id}},'{{$product->name}}', {{$product->regular_price}})">Request Restock </a>
                                        @endif
                                  
                                    @endif
                                    </div>
                            </div>
                        </li>
                        @endforeach
                        
                    </ul>

                </div>

                <div class="wrap-pagination-info">
                    {{$products->links()}}
                    
                </div>
            </div><!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">All Categories</h2>
                    <div class="widget-content">
                        <ul class="list-category">

                            @foreach ($categories as $category)
                            <li class="category-item has-child-cate">
                                <a href="{{route('product.category',['category_slug'=>$category->slug])}}" class="cate-link">{{$category->name}}</a>
                            
                                
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                

            </div><!--end sitebar-->

        </div><!--end row-->

    </div><!--end container-->

</main>