<!DOCTYPE html>
<html>
<head>
    <title>Weather Information</title>
</head>
<body>

	
	<?php $__currentLoopData = $beerData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div>
			<?php echo e(var_dump($data['name'])); ?>

		</div>
		
	
	
	
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    Current Weather in <?php echo e(var_dump($beerData[0])); ?>



</body>
</html><?php /**PATH D:\server\Laravel\rest-api-crud\resources\views/beer.blade.php ENDPATH**/ ?>