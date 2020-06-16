<?php $__env->startSection('htmlheader_title'); ?>
    Log in
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body class="hold-transition login-page" style="background-image: url('<?php echo e(asset('assets/img/bg/slider.png')); ?>');">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <a href="<?php echo e(url('/home')); ?>" style="color:white"><b>Log in</b></a>
            </div><!-- /.login-logo -->

        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <strong>Whoops!</strong> <?php echo e(trans('adminlte_lang::message.someproblems')); ?><br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="login-box-body">
        <p class="login-box-msg"> <?php echo e(trans('adminlte_lang::message.siginsession')); ?> </p>

        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('login')); ?>">
  <?php echo e(csrf_field()); ?>


  <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

      <div class="col-md-12 form-group has-feedback" style="margin-left: -5px;">
          <input id="email" type="email" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.email')); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          <?php if($errors->has('email')): ?>
              <span class="help-block">
      <strong><?php echo e($errors->first('email')); ?></strong>
  </span>
          <?php endif; ?>

      </div>
  </div>

  <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">

      <div class="col-md-12 form-group has-feedback" style="margin-left: -5px;">
          <input id="password" type="password" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.password')); ?>" name="password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <?php if($errors->has('password')): ?>
              <span class="help-block">
      <strong><?php echo e($errors->first('password')); ?></strong>
  </span>
          <?php endif; ?>
      </div>
  </div>

  

  <div class="form-group">
      <div class="col-md-8 col-md-offset-2">
          <button type="submit" class="btn btn-primary" style="background-color:#f50136;width:100%">
              Login
          </button>
      </div>
  </div>
</form>



        
        <center><a href="<?php echo e(url('/register')); ?>" class="text-center"><?php echo e(trans('adminlte_lang::message.registermember')); ?></a></center>

    </div>

    </div>
    </div>
    <?php echo $__env->make('adminlte::layouts.partials.scripts_auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>