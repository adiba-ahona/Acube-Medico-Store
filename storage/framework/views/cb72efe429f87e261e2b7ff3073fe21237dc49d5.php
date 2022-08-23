<div class="wrap-icon-section minicart">
    <a href="/cart" class="link-direction">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
        <div class="left-info">
            <?php if(Cart::instance('cart')->count() > 0): ?>
                 <span class="index"><?php echo e(Cart::instance('cart')->count()); ?></span>
            <?php endif; ?>
            
               <span class="title">CART</span>
        </div>
    </a>
</div><?php /**PATH D:\11th Semester\CSE470\CSE470_AcubeMedicoStore\acube_medico_store\resources\views/livewire/cart-count-component.blade.php ENDPATH**/ ?>