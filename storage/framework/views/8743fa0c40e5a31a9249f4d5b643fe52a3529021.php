<main id="main" class="main-site">

    <div class="container">

    <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Wishlist</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            
        <?php if(Cart::instance('wishlist')->count()> 0): ?>

            <div class="wrap-iten-in-cart">
                <h3 class="box-title">Products </h3>
                <ul class="products-cart">											    
                    <?php $__currentLoopData = Cart ::instance('wishlist')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="<?php echo e(('assets/images/products')); ?>/<?php echo e($item->model->image); ?>" alt="<?php echo e($item->model->name); ?>"></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="<?php echo e(route('product.details',['slug'=>$item->model->slug])); ?>"><?php echo e($item->model->name); ?></a>
                        </div>
                                 
                        <div class="price-field produtc-price">
                            <p class="price"><?php echo e($item->model->regular_price); ?></p>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php else: ?>
            <h3> No item in the list for now. Come again later. </h3>
        <?php endif; ?>
    </div><!--end main content area-->
</div><!--end container-->

</main><?php /**PATH D:\11th Semester\CSE470\CSE470_AcubeMedicoStore\acube_medico_store\resources\views/livewire/wishlist-component.blade.php ENDPATH**/ ?>