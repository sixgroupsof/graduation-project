<?php $__env->startSection('link'); ?>
<!-- <link href="<?php echo e(asset('css/perfectInformation.css')); ?>" rel="stylesheet"> -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">  -->
<div class="container">
    <div class="row">
        <h2 style="color: #555;" class="col-md-12">个人信息</h2>
        <div class="row col-md-12">
            <div style="background-color: #39E;width: 350px;height:3px;margin-left:16px;"></div>
        </div>
        
        <form name="PerfectInformation" method="POST" action="<?php echo e(route('perfectInformation')); ?>" enctype="multipart/form-data" class="col-md-4" style="margin-top:10px;">
            <!-- 419错误 -->
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label>个人描述：</label>
                <textarea name="user[description]" class="form-control" value="<?php echo e(old('description')?old('description'):$user->description); ?> " rows="10"><?php echo e($user->description); ?></textarea>
            </div>
            <div class="form-group">
                <img style="width:80px;height:80px;" src="~../../../<?php echo e($user->imgUrl); ?>" alt="">
                <button style="margin-top:12%;" type="button" class="btn btn-primary btn-sm">预览</button>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">图片上传：</label>
                <input name="imgUrl" type="file" id="exampleInputFile">
            </div>

            <div class="divcenter">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </form>
    </div>
    
  
</div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>