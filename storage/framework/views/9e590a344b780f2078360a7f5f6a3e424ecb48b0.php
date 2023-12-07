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
      <?php echo $__env->make('includes.main.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="main-panel">
          <?php echo $__env->make('includes.main.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <div class="main-content">
            <section class="section">
              <div class="section-header">
                <h1><?php echo $__env->yieldContent('header-title'); ?></h1>
                <div class="section-header-breadcrumb">

                  <?php echo $__env->yieldContent('breadcrumbs'); ?>
                  
                </div>
              </div>
          
              <div class="section-body">
                <?php if(View::hasSection('section-title')): ?>
                  <h2 class="section-title"><?php echo $__env->yieldContent('section-title'); ?></h2>
                <?php endif; ?>

                <?php if(View::hasSection('section-lead')): ?>
                  <p class="section-lead">
                      <?php echo $__env->yieldContent('section-lead'); ?>
                  </p>
                <?php endif; ?>
          
                <?php echo $__env->yieldContent('content'); ?>
                
              </div>
            </section>
          </div>    

          <?php echo $__env->make('includes.main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    </div>
  </div>
</body>

<?php echo $__env->yieldPushContent('before-script'); ?>
<?php echo $__env->make('includes.main.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldPushContent('after-script'); ?>

</html><?php /**PATH C:\Audrey hotel\rooming\resources\views/layouts/main.blade.php ENDPATH**/ ?>