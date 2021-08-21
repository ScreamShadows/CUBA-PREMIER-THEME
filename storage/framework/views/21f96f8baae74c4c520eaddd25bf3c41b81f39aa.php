<?php $__env->startSection('title', 'Pricing'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Pricing</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Ecommerce</li>
<li class="breadcrumb-item active">Pricing</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Become member</h5>
            </div>
            <div class="card-body row">
               <div class="col-md-4 col-sm-6">
                  <div class="pricingtable">
                     <div class="pricingtable-header">
                        <h3 class="title">Standard</h3>
                     </div>
                     <div class="price-value"><span class="currency">$</span><span class="amount">10</span><span class="duration">/mo</span></div>
                     <ul class="pricing-content">
                        <li>50GB Disk Space</li>
                        <li>50 Email Accounts</li>
                        <li>Maintenance</li>
                        <li>15 Subdomains</li>
                     </ul>
                     <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign Up</a></div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="pricingtable">
                     <div class="pricingtable-header">
                        <h3 class="title">Premium</h3>
                     </div>
                     <div class="price-value"><span class="currency">$</span><span class="amount">20</span><span class="duration">/mo</span></div>
                     <ul class="pricing-content">
                        <li>10% on all product</li>
                        <li>50 Email Accounts</li>
                        <li>Maintenance</li>
                        <li>15 Subdomains</li>
                     </ul>
                     <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign Up</a></div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="pricingtable">
                     <div class="pricingtable-header">
                        <h3 class="title">Auther pack</h3>
                     </div>
                     <div class="price-value"><span class="currency">$</span><span class="amount">50</span><span class="duration">/mo</span></div>
                     <ul class="pricing-content">
                        <li>Upload 50 product</li>
                        <li>50 Email Accounts</li>
                        <li>Maintenance</li>
                        <li>15 Subdomains</li>
                     </ul>
                     <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign Up</a></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header">
               <h5>Simple Pricing Card</h5>
            </div>
            <div class="card-body row pricing-content">
               <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
                  <div class="card text-center pricing-simple">
                     <div class="card-body">
                        <h3>Standard</h3>
                        <h1>$15</h1>
                        <h6 class="mb-0">Lorum Ipsum</h6>
                     </div>
                     <a class="btn btn-lg btn-primary btn-block" href="#">
                        <h5 class="mb-0">Purchase</h5>
                     </a>
                  </div>
               </div>
               <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
                  <div class="card text-center pricing-simple">
                     <div class="card-body">
                        <h3>Business</h3>
                        <h1>$25</h1>
                        <h6 class="mb-0">Lorum Ipsum</h6>
                     </div>
                     <a class="btn btn-lg btn-primary btn-block" href="#">
                        <h5 class="mb-0">Purchase</h5>
                     </a>
                  </div>
               </div>
               <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
                  <div class="card text-center pricing-simple">
                     <div class="card-body">
                        <h3>Premium</h3>
                        <h1>$35</h1>
                        <h6 class="mb-0">Lorum Ipsum</h6>
                     </div>
                     <a class="btn btn-lg btn-primary btn-block" href="#">
                        <h5 class="mb-0">Purchase</h5>
                     </a>
                  </div>
               </div>
               <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
                  <div class="card text-center pricing-simple">
                     <div class="card-body">
                        <h3>Extra</h3>
                        <h1>$45</h1>
                        <h6 class="mb-0">Lorum Ipsum</h6>
                     </div>
                     <a class="btn btn-lg btn-primary btn-block" href="#">
                        <h5 class="mb-0">Purchase</h5>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\INUSUAL SOFT\laravel\laravel\theme\resources\views/apps/pricing.blade.php ENDPATH**/ ?>