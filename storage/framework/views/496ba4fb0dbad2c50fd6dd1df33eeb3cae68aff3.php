<h1> HELLO From demo page</h1>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($value['name']); ?><br>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
