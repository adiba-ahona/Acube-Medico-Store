<main id="main" class="main-site">

    <div class="container">

    <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Doctor's List</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            
        <?php if(Cart::instance('preferedmechaniclist')->count()> 0): ?>

            <div class="wrap-iten-in-cart">
                <h3 class="box-title">Preferred Doctors </h3>
                <ul class="products-cart">											    
                    <?php $__currentLoopData = Cart ::instance('preferedmechaniclist')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="<?php echo e(('assets/images/products')); ?>/<?php echo e($items->model->image); ?>" alt="<?php echo e($items->model->name); ?>"></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="<?php echo e(route('product.details',['slug'=>$items->model->slug])); ?>"><?php echo e($items->model->name); ?></a>
                            <p class="price"><?php echo e($items->model->description); ?></p>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php else: ?>
            <div>
                <img src="<?php echo e(asset('assets/images/img-1.jpg')); ?>" alt="" class="img-slide">
                <img src="<?php echo e(asset('assets/images/img-2.jpg')); ?>" alt="" class="img-slide">
                <img src="<?php echo e(asset('assets/images/img-3.jpg')); ?>" alt="" class="img-slide"><br>
                <h2>Dr. Samia from Evercare: Sun-Tues</h2><br>
                <h2>Dr. Robin from Square: Mon- Wed</h2><br>
                <h2>Dr. Rose from United: Fri/ by appointment</h2>

            </div>
        <?php endif; ?>
    </div><!--end main content area-->
</div><!--end container-->
</main><?php /**PATH D:\11th Semester\CSE470\CSE470_AcubeMedicoStore\acube_medico_store\resources\views/livewire/preffered-mechanic-component.blade.php ENDPATH**/ ?>