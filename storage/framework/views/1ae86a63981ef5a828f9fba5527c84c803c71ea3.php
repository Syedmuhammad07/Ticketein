<?php $__env->startSection('main-content'); ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <h1>Create New event</h1>

            <?php echo Form::open(['route' => 'createevent.store']); ?>


            <?php echo e(Form::label('name', 'Name of Event:')); ?>

            <?php echo e(Form::text('name', null, ['class' => 'form-control','placeholder'=>'type event name','required'])); ?>


            <?php echo e(Form::label('description', 'Description:')); ?>

            <?php echo e(Form::text('description', null, ['class' => 'form-control','placeholder'=>'type event description','required'])); ?>


            <?php echo e(Form::label('date', 'Date:')); ?>

            <?php echo e(Form::date('date', null, ['class' => 'form-control','placeholder'=>'enter date of event','required'])); ?>


			<?php echo e(Form::label('time', 'Time:')); ?>

			<?php echo e(Form::Time('time', null, ['class' => 'form-control','placeholder'=>'enter time of event','required'])); ?>

			
			<?php echo e(Form::label('tickets', 'No. of tickets:')); ?>

            <?php echo e(Form::number('tickets', null, ['class' => 'form-control','placeholder'=>'type total number of tickets','required'])); ?>


			<?php echo e(Form::submit('Create Event', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 20px;'))); ?>

            <?php echo Form::close(); ?>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>