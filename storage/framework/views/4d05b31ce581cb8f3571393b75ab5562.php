<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class = "d-flex justify-content-center mb-4">
<img src="logo.png" alt="" width="150" height="150" class="center-block">
</div>

<h3 class="d-flex align-items-center justify-content-center mb-5"> Login Page</h3>
<div class="d-flex justify-content-center">
<form action="/login/process" method="POST">
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

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label h5">Email address</label>
      <input 
      type="email" 
      class="form-control" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="email">
      <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label h5">Password</label>
      <input type="password" 
      class="form-control" 
      id="exampleInputPassword1"
      name="password">
    </div>
   

    <button type="submit" class="btn btn-primary mb-3">Submit</button>
    <h6><a href=<?php echo e("/register"); ?>>New User? Sign up here.</a></h6>
  </form>

</div>

  
<?php /**PATH C:\Product\cit183e-comittedproduct\resources\views/user/login.blade.php ENDPATH**/ ?>