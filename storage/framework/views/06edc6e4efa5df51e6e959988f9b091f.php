<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Create an Account</h3>
<form action="/store" method="POST">
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
      <label for="name" class="form-label">Name</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      name="name">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input 
      type="email" 
      class="form-control" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" 
      class="form-control" 
      id="exampleInputPassword1"
      name="password">
    </div>

    <div class="mb-3">
      <label for="confirmpassword" class="form-label">Confirm Password</label>
      <input type="password" 
      class="form-control" 
      id="exampleInputPassword1"
      name="password_confirmation">
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <h6><a href=<?php echo e("/login"); ?>>Already have an account? Sign in here.</a></h6>
  <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Product\cit183e-comittedproduct\resources\views/user/register.blade.php ENDPATH**/ ?>