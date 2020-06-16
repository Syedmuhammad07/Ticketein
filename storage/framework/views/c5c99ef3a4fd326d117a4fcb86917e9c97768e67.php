<?php $__env->startSection('htmlheader_title'); ?>
	<?php echo e(trans('adminlte_lang::message.home')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>

		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->

				<!-- /.box -->

			</div>
		</div>
		<div class="row">
      <div class="col-md-8 text-left" style="text-align:left;margin-bottom:10px;">

      <h4><strong>Available Events</strong></h4>

      </div>
			<div class="col-md-4 text-right">
			<div class="input-group">
              <input type="text" name="student_id" class="form-control" placeholder="Events Tittle..."/>
            <span class="input-group-btn">
              <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
				</div>
    </div>
		<div class="row">
         <div class="col-md-12">
             <table class="table table-responsive  table-striped table-bordered table-hover">
                 <thead style="background-color:#d9edf7;">

                    <th>Tittle</th>
                    <th>Date</th>
                    <th>Time</th>
                    

                 </thead>
                 <tbody>
                   <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr >
							<td><?php echo e($event->name); ?></td>
							<td><?php echo e(date('M j, Y',strtotime($event->date))); ?></td>
							<td><?php echo e(date('h:i a',strtotime($event->time))); ?></td>
							<td><a href="#" class="btn btn-sm btn-primary btn-block">Reservation Details</a> </td>
						</tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php if(count($events) <=0): ?>
						<tr><td>No data</td><td></td><td></td></tr>
					<?php endif; ?>
                 </tbody>

             </table>
             <div class="text-center">
         </div>
         </div>

      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>