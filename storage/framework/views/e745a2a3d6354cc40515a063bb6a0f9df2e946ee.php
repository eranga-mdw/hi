

<?php $__env->startSection('content'); ?>

<div class="form-group row">
	<div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>Add New Record</h3>
        </div>

        <div class="float-right">
            
        </div>
    </div>
</div>

<form action="<?php echo e(route('city.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Code:</strong>
                <input type="text" class="form-control" placeholder="enter city code" name="code">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" class="form-control" placeholder="enter city name" name="name">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="<?php echo e(route('city.index')); ?>">Back</a>
            </div>
        </div>
    </div>
</form>




<?php $__env->stopSection(); ?> 
<?php echo $__env->make('city.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_8.0.7\htdocs\crud\resources\views/city/create.blade.php ENDPATH**/ ?>