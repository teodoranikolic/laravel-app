<?php $__env->startSection('title', 'Contact Us'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Contact Us</h1>

    <?php if( ! session()->has('message')): ?>
        <form action="<?php echo e(route('contact.store')); ?>" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control">
                <div><?php echo e($errors->first('name')); ?></div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" value="<?php echo e(old('email')); ?>" class="form-control">
                <div><?php echo e($errors->first('email')); ?></div>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"
                          class="form-control"><?php echo e(old('message')); ?></textarea>
                <div><?php echo e($errors->first('message')); ?></div>
            </div>

            <?php echo csrf_field(); ?>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-app\resources\views/contact/create.blade.php ENDPATH**/ ?>