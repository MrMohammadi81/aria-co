<?php
use App\Config;
$config = Config::URL;
?>
<html dir="ltr" lang="en">

<head>
    <?php echo $__env->yieldContent('head'); ?>
</head>

<body id="app-container" class="rtl rounded menu-default">

    <?php echo $__env->yieldContent('header'); ?>
    <?php echo $__env->yieldContent('menu'); ?>
    <?php echo $__env->yieldContent('content'); ?>

    
    <?php echo $__env->yieldContent('script'); ?>
    

</body>

</html>
<?php /**PATH C:\xampp\htdocs\FrameWork\App\Views/layout/master.blade.php ENDPATH**/ ?>