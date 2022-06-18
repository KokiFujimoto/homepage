<?php $__env->startSection('title', 'ホーム｜HAIR SALON SHIGEMATSU'); ?>

<?php $__env->startSection('content'); ?>

<main>
    <form action="<?php echo e(route('send')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" value="<?php echo e($inputs['name']); ?>">
        <input type="email" name="email" value="<?php echo e($inputs['email']); ?>">
        <input type="text" name="title" value="<?php echo e($inputs['title']); ?>">
        <textarea name="body" cols="30" rows="10"><?php echo e($inputs['body']); ?></textarea>
        <button type="submit">送信</button>
    </form>
</main>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/fujimotokouki/laravel/HairSalonShigematsu/homepage/resources/views/contact/confirm.blade.php ENDPATH**/ ?>