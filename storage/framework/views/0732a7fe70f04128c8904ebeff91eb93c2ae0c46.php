

<?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1 class="page-header">
        <div class="row">
            <div class="col-xs-10">
                Internship Company 
            </div>
            <div class="col-xs-2">
            <a href="<?php echo e(route('internshipcompany.trash')); ?>"><button class="btn"><i class="fa fa-trash" style="color:black;"> &nbsp; View Trash</i></button></a>
            </div>
        </div>
    </h1>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-main'); ?>
    <section class="content page-news">
        <div class="row">
            <div class="col-xs-12">
                <?php if(session('flash')): ?>
                    <?php echo $__env->make('partials.notif', ['flash' => session('flash')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endif; ?>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Company Description</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($single_company->company_name); ?></td>
                                <td><?php echo e($single_company->description); ?></td>
                                <td>
                                    <a
                                        href="<?php echo e(route('internshipcompany.view', $single_company->id)); ?>"
                                        class="btn btn-info">
                                        <i class="fa fa-eye"><br>View</i>
                                    </a>
                                </td>
                                <td>
                                    <a
                                        href="<?php echo e(route('internshipcompany.adminedit', $single_company->id)); ?>"
                                        class="btn btn-warning">
                                        <i class="fa fa-edit"><br>Edit</i>
                                    </a>
                                </td>
                                <td>
                                    <a
                                        href="<?php echo e(route('internshipcompany.delete', $single_company->id)); ?>"
                                        class="btn btn-danger" onclick="ConfirmDelete();">
                                        <i class="fa fa-trash"><br>Delete</i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12 text-center">
                <?php echo e($paginator->links()); ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<script>
    function ConfirmDelete() {
        var x = confirm("Are you sure you want to delete?");
        if (x){
            return true;
        }
        else{
            return false;
        }
    }
</script>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>