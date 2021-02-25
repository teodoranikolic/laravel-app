<?php $__env->startComponent('mail::message'); ?>

# Thank you for your message

<strong>Name</strong> <?php echo e($data['name']); ?>

<strong>Email</strong> <?php echo e($data['email']); ?>


<strong>Message</strong>

<?php echo e($data['message']); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\laravel-app\resources\views/emails/contact/contact-form.blade.php ENDPATH**/ ?>