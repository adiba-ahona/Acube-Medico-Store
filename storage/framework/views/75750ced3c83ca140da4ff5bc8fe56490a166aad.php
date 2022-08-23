<div>
	<style>
		nav svg{
			height:20px;
		}
		nav.hidden{
			display: block !important; 

		}
	</style>
	<div class = "container" style ="padding: 30px 0;">
		<div class = "row">
			<div class = "col-md-12">
				<div class = "panel panel-default">
					<div class = "panel-heading">
						All Orders

				    </div>
				    <div class = "panel-body">
				    	<table class =  "table table-striped">
				    		<thead>
				    			<tr>
				    				<th>OrderId</th>
				    				<th>Subtotal</th>
				    				<th>Discount</th>
				    				<th>Total</th>
				    				<th>First Name</th>
				    				<th>Last Name</th>
				    				<th>Mobile</th>
				    				<th>Email</th>
				    				<th>Status</th>
									<th>Action</th>
				    			</tr>
				    		</thead>
				    		<tbody>
				    			<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    			    <tr>
				    			    	<td><?php echo e($order->id); ?></td>
				    			    	<td><?php echo e($order->subtotal); ?></td>
				    			    	<td><?php echo e($order->discount); ?></td>
				    			    	<td><?php echo e($order->total); ?></td>
				    			    	<td><?php echo e($order->firstname); ?></td>
				    			    	<td><?php echo e($order->lastname); ?></td>
				    			    	<td><?php echo e($order->mobile); ?></td>
				    			    	<td><?php echo e($order->email); ?></td>
				    			    	<td><?php echo e($order->status); ?></td>
										<td><a href = "<?php echo e(route('user.orderdetails',['order_id'=>$order->id])); ?>" class = "btn btn-info btn-sm"> Details </td>
                                        
				    			    </tr>
				    			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				    		</tbody>
				    	</table>
				    	<?php echo e($orders->links()); ?>

					
					

					
				    </div>
                </div>
			</div>
			
		</div>
	</div>
</div><?php /**PATH D:\11th Semester\CSE470\CSE470_AcubeMedicoStore\acube_medico_store\resources\views/livewire/user/user-orders-component.blade.php ENDPATH**/ ?>