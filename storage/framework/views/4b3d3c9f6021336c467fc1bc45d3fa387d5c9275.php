<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    
  <title><?php echo $__env->yieldContent('title'); ?></title>

  <?php echo $__env->yieldPushContent('before-style'); ?>
  <?php echo $__env->make('includes.main.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldPushContent('after-style'); ?>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
  </div>
</body>

<?php echo $__env->yieldPushContent('before-script'); ?>
<?php echo $__env->make('includes.main.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldPushContent('after-script'); ?>

</html><?php /**PATH C:\Audrey hotel\rooming\resources\views/layouts/app.blade.php ENDPATH**/ ?>