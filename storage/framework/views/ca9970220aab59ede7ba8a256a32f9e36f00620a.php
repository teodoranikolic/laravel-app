<?php $__env->startSection('title', 'Customer List'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-12">
            <h1>Customer List</h1>
        </div>
    </div>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Customer::class)): ?>
        <div class="row">
            <div class="col-12">
                <p><a href="<?php echo e(route('customers.create')); ?>">Add New Customer</a></p>
            </div>
        </div>
    <?php endif; ?>

    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-2">
                <?php echo e($customer->id); ?>

            </div>
            <div class="col-4">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', $customer)): ?>
                    <a href="<?php echo e(route('customers.show', ['customer' => $customer])); ?>">
                        <?php echo e($customer->name); ?>

                    </a>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('view', $customer)): ?>
                    <?php echo e($customer->name); ?>

                <?php endif; ?>
            </div>
            <div class="col-4"><?php echo e($customer->company->name); ?></div>
            <div class="col-2"><?php echo e($customer->active); ?></div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="row">
        <div class="col-12 d-flex justify-content-center pt-4">
            <?php echo e($customers->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-app\resources\views/customers/index.blade.php ENDPATH**/ ?>