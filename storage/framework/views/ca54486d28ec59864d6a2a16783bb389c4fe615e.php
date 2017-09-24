<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
	<div class="panel-heading" style="font-size: large;">
		সারাদেশব্যাপী বেসরকারি গ্রন্থাগারের তালিকা
		<a href="#" class="pull-right btn btn-info">সারাদেশের গ্রন্থাগারের তালিকা</a>
	</div>
	<div class="panel-body">
			<?php $__currentLoopData = $areas->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="row">
					<?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $division): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-3">
							<h3><a href="<?php echo e(route('division.show', [$division])); ?>"> <span class="text-muted">
								<?php echo e($division->tag); ?> বিভাগ</span> </a>
							</h3>
							<?php $__currentLoopData = $division->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<h5>
									<a href="<?php echo e(route('areas.show', [$district])); ?>">
										<?php echo e($district->tag); ?> জেলা (<?php echo e(entobn($district->applications->count())); ?>)
									</a>
								</h5>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<hr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.select2').select2();
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>