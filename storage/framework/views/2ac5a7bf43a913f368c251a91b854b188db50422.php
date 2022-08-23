<div>
    <main id="main" class="main-site left-sidebar">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">Home</a></li>
                    <li class="item-link"><span>Order: Medical Equipments</span></li>
                </ul>
            </div>
            <div class="row">

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                    <div class="banner-shop">
                        <a href="/" class="banner-link">
                            <figure><img src="assets/images/gallery-02.jpg" alt=""></figure>
                        </a>
                    </div>

                    <div class="wrap-shop-control">

                        <h1 class="shop-title">All Products</h1>

                        <div class="wrap-right">

                            <div class="sort-item orderby ">
                                <select name="orderby" class="use-chosen" wire:model="sorting" >
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div>

                            <div class="sort-item product-per-page">
                                <select name="post-per-page" class="use-chosen" wire:model="pagesize">
                                   <option value="10" selected="selected">10 per page</option>
                                    <option value="20">20 per page</option>
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
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" title="<?php echo e($product->name); ?>">
                                            <figure><img src="<?php echo e(asset('assets/images/medicines')); ?>/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="<?php echo e(route('product.details',['slug'=>$product->slug])); ?>" class="product-name"><span>Product Name: <?php echo e($product->name); ?></span></a>
                                        <div class="wrap-price"><span class="product-price">Price: <?php echo e($product->regular_price); ?></span></div>
                                    
                                        <?php if($product->category_id == "3"): ?>
                                            <?php if($product->stock_status == "instock"): ?> 
                                                <div class="wrap-price"><span class="-">Available</span></div>
                                            <?php else: ?> 
                                                <div class="wrap-price"><span class="-">Not Available</span></div>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <div class="wrap-price"><span class="-"><?php echo e($product->stock_status); ?></span></div> 
                                        <?php endif; ?>

                                 
                                        <?php if($product->stock_status == "instock"): ?> 
                                            <a href="#" class="btn add-to-cart" wire:click.prevent="store(<?php echo e($product->id); ?>,'<?php echo e($product->name); ?>', <?php echo e($product->regular_price); ?>)">Add To Cart</a>
        
                                        <?php else: ?> 
                                            <?php if($product->category_id == "3"): ?>
                                                <a href="#" class="btn add-to-cart" wire:click.prevent="addToRequestedItemList (<?php echo e($product->id); ?>,'<?php echo e($product->name); ?>', <?php echo e($product->regular_price); ?>)">Request for Schedule </a>
                                            <?php else: ?> 
                                                <a href="#" class="btn add-to-cart" wire:click.prevent="addToRequestedItemList (<?php echo e($product->id); ?>,'<?php echo e($product->name); ?>', <?php echo e($product->regular_price); ?>)">Request Restock </a>
                                            <?php endif; ?>
                                        <?php endif; ?>

                                    <div class =" wish-btn">
                                        
                                        <a href = "#" wire:click.prevent="addToWishlist(<?php echo e($product->id); ?>,'<?php echo e($product->name); ?>', <?php echo e($product->regular_price); ?>)"> <i class ="fa fa-heart"></i></a>
                                        

                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                </div>

                <div class="wrap-pagination-info">
                    <?php echo e($products->links()); ?>

            
                </div>
            </div><!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">All Categories</h2>
                    <div class="widget-content">
                        <ul class="list-category">

                            
                        </ul>
                    </div>
                </div><!-- Categories widget-->

                <div class="widget mercado-widget filter-widget brand-widget">
                    <h2 class="widget-title">Brand</h2>
                    <div class="widget-content">
                        <ul class="list-style vertical-list list-limited" data-show="6">
                            <li class="list-item"><a class="filter-link active" href="#">Square</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Beximco</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Incepta</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Novartis</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Genvio</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Healthcare</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Popular</a></li>
                    </div>
                </div><!-- brand widget-->

                <div class="widget mercado-widget filter-widget price-filter">
                    <h2 class="widget-title">Price</h2>
                    <div class="widget-content">
                        <div id="slider-range"></div>
                        <p>
                            <label for="amount">Price:</label>
                            <input type="text" id="amount" readonly>
                            <button class="filter-submit">Filter</button>
                        </p>
                    </div>
                </div><!-- Price-->

                <div class="widget mercado-widget filter-widget">
                    <h2 class="widget-title">Size</h2>
                    <div class="widget-content">
                        <ul class="list-style inline-round ">
                            <li class="list-item"><a class="filter-link active" href="#">s</a></li>
                            <li class="list-item"><a class="filter-link " href="#">50mg</a></li>
                            <li class="list-item"><a class="filter-link " href="#">100mg</a></li>
                            <li class="list-item"><a class="filter-link " href="#">200mg</a></li>
                        </ul>
                    </div>
                </div><!-- Size -->
            </div><!--end sitebar-->
        </div><!--end row-->
    </div><!--end container-->
</main><?php /**PATH D:\11th Semester\CSE470\CSE470_AcubeMedicoStore\acube_medico_store\resources\views/livewire/order-component.blade.php ENDPATH**/ ?>