<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="card">
        <div class="card-header">
            <h3>Edit Profile</h3>
        </div>

        <div class="card-body">

            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <?php if(session('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('admin.profile.update')); ?>" method="POST"  enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="mb-3">
                    <label>Name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="<?php echo e(old('name', $admin->name)); ?>"
                    >
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="<?php echo e(old('email', $admin->email)); ?>"
                    >
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div class="mb-3">
                        <label>Profile Image</label>

                        <?php if($admin->profile_image): ?>
                            <div class="mb-2">
                                <img src="<?php echo e(asset('public/uploads/profile_image/' . $admin->profile_image)); ?>"
                                                 width="100"
                                                 height="60"
                                                 style="object-fit:cover; border-radius:5px;">
                            </div>

                        <?php endif; ?>

                        <input type="file"
                            name="profile_image"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>New Password</label>
                        <input type="password"
                            name="password"
                            class="form-control">
                        <small class="text-muted">
                            Leave blank if you don't want to change the password.
                        </small>
                    </div>

                    <div class="mb-3">
                        <label>Confirm Password</label>
                        <input type="password"
                            name="password_confirmation"
                            class="form-control">
                    </div>

                <button type="submit" class="btn btn-primary">
                    Update Profile
                </button>

            </form>

        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u439698974/domains/vrindataxiservice.com/public_html/vrinda-taxi/resources/views/admin/profile/edit.blade.php ENDPATH**/ ?>