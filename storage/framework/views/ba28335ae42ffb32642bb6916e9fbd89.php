<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

<?php if(Session::has('success')): ?>
  <div > <P><?php echo e(session::get('success')); ?></P> </div>
<?php endif; ?>



<div class="overflow-hidden rounded-lg border border-gray-200  shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 table table-dark table-hover">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Last Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">First Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">email</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Address</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
      <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="hover:bg-gray-50">
          <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
            
            <div class="text-sm">
              
              <div class="font-medium text-gray-700"><?php echo e($customer->lastName); ?></div>
              </div>
          </th>
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700"><?php echo e($customer->firstName); ?></div>
              </div>
          </td>
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700"><?php echo e($customer->email); ?></div>
              </div>
          </td>
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700"><?php echo e($customer->address); ?></div>
              </div>
          </td>
  
  
          <td class="px-6 py-4">
          <button type="button" class="btn btn-dark" ><a href="delete/<?php echo e($customer->id); ?>" style="text-decoration: none">Delete</a></button>
          
          </td>
          <td class="px-6 py-4">
          <button type="button" class="btn btn-dark"><a href="editUser/<?php echo e($customer->id); ?>" style="text-decoration: none">Edit</a></button>
          </td>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tr>
      </tbody>
     
     </table>
  </div>


  <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Product\cit183e-comittedproduct\resources\views/customer/index.blade.php ENDPATH**/ ?>