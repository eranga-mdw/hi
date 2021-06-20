

<?php $__env->startSection('content'); ?>

<div class="form-group row">
	<div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>Edit Record</h3>
        </div>

        <div class="float-right">
            
        </div>
    </div>
</div>

<form action="<?php echo e(route('city.update',$city->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Code:</strong>
                <input type="text" class="form-control" value="<?php echo e($city->code); ?>" placeholder="enter city code" name="code">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" class="form-control" value="<?php echo e($city->name); ?>" placeholder="enter city name" name="name">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                <a class="btn btn-primary" href="<?php echo e(route('city.index')); ?>">Back</a>
            </div>
        </div>
    </div>
</form>




<?php $__env->stopSection(); ?> 
<?php echo $__env->make('city.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_8.0.7\htdocs\crud\resources\views/city/edit.blade.php ENDPATH**/ ?>