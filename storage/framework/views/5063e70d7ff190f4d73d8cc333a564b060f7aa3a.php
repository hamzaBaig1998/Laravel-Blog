


<?php $__env->startSection('content'); ?>
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
        <h1 class="text-center text-lg">Register</h1>
            <form action="<?php echo e(route('register')); ?>" method="post">
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" placeholder="Your Name" name="name" id="name" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" placeholder="Username" name="username" id="username" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" placeholder="Email" name="email" id="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" placeholder="Password" name="password" id="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" placeholder="Repeat Your Password" name="password_confirmation" id="password_confirmation" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\blog\resources\views/auth/register.blade.php ENDPATH**/ ?>