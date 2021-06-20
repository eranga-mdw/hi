

<?php $__env->startSection('content'); ?>

<div class="form-group row">
	<div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>CRUD App</h3>
        </div>

        <div class="float-right">
            <a class="btn btn-success" href="<?php echo e(route('city.create')); ?>">Create</a>
        </div>
    </div>
</div>

<?php if($msg = Session::get('add')): ?>
	<div class="alert alert-success">
		<p><?php echo e($msg); ?></p>
	</div>
<?php endif; ?>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Code</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($data->id); ?></td>
        <td><?php echo e($data->code); ?></td>
        <td><?php echo e($data->name); ?></td>
        <td>
            <form action="<?php echo e(route('city.destroy', $data->id)); ?>" method="POST">
                <a class="btn btn-primary" href="<?php echo e(route('city.edit', $data->id)); ?>">Edit</a>
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>



<?php $__env->stopSection(); ?> 
<?php echo $__env->make('city.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_8.0.7\htdocs\crud\resources\views/city/index.blade.php ENDPATH**/ ?>