<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class = "d-flex justify-content-center mb-3">
<img src="logo.png" alt="" width="150" height="150" class="center-block">

</div>
<h3 class = "d-flex justify-content-center mb-3">Create an Account</h3>
<div class = "d-flex justify-content-center mb-3">

<form action="/save" method="POST">
    <?php echo csrf_field(); ?>
    
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p>Invalid Account</p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<div class="container">
  <div class="row">
    <div class="mb-3">
      <label for="LastName" class="form-label">Last Name</label>
      <input 
      type="text" 
      class="form-control" 
      name="lastName">
    </div>

    <div class="mb-3">
      <label for="firstName" class="form-label">First Name</label>
      <input 
      type="text" 
      class="form-control" 
      name="firstName">
    </div>
  </div>
</div>

<div class="container">
<div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input 
      type="text" 
      class="form-control" 
      name="email">
    </div>
    <div class="mb-3">
      <label for="contactNumber" class="form-label">Contact Number</label>
      <input 
      type="text" 
      class="form-control" 
      name="contactNumber">
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input 
      type="text" 
      class="form-control" 
      name="address">
    </div>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
</div>
  <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Product\cit183e-comittedproduct\resources\views/customer/addCustomerUser.blade.php ENDPATH**/ ?>