

<?php $__env->startSection('template_title'); ?>
    <?php echo e(__('installer_messages.environment.classic.templateTitle')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <i class="fa fa-code fa-fw" aria-hidden="true"></i> <?php echo e(__('installer_messages.environment.classic.title')); ?>

<?php $__env->stopSection(); ?>
<style>
    
    .tk-notify {
        border-radius: 4px;
        padding: 16px 20px;
        align-items: center;
        justify-content: space-between;
        box-shadow: inset 0px -1px 0px #eeeeee;
        flex-wrap: nowrap;
    }
    .tk-notify .tk-btnholder {
        flex: none;
    }
    .tk-notify_title {
        align-items: center;
        flex-wrap: nowrap;
    }
    .tk-notify + .tk-notify {
        box-shadow: inset 0px -1px 0px #EEEEEE, inset 0px -1px 0px #EEEEEE;
    }

    .tk-notify-content {
        margin-left: 0;
    }
    .tk-notify-content p {
        margin: 0;
        line-height: 22px;
        color: #B15157;
        font-size: 14px;
        font-weight: 400;
        text-align: center;
    }

    .tk-notify-alert {
        background: #FDF1F0;
    }

 </style>   

<?php $__env->startSection('container'); ?>

    <form method="post" action="<?php echo e(route('LaravelInstaller::environmentSaveClassic')); ?>">
        <?php echo csrf_field(); ?>

        <textarea class="textarea" name="envConfig"><?php echo e($envConfig); ?></textarea>
        <div class="buttons buttons--right">
            <button class="button button--light" type="submit">
            	<i class="fa fa-floppy-o fa-fw" aria-hidden="true"></i>
             	<?php echo __('installer_messages.environment.classic.save'); ?>

            </button>
        </div>
    </form>

    <?php if( ! isset($environment['errors'])): ?>
        <div class="tk-notify tk-notify-alert">
            <div class="tk-notify_title">
                <div class="tk-notify-content">
                    <p><?php echo __('installer_messages.environment.classic.save_install'); ?></p>
                </div>
            </div>
        </div>
        <div class="buttons-container">
            <a class="button float-left" href="<?php echo e(route('LaravelInstaller::environmentWizard')); ?>">
                <i class="fa fa-sliders fa-fw" aria-hidden="true"></i>
                <?php echo __('installer_messages.environment.classic.back'); ?>

            </a>
            <a class="button float-right" href="<?php echo e(route('LaravelInstaller::database')); ?>">
                <i class="fa fa-check fa-fw" aria-hidden="true"></i>
                <?php echo __('installer_messages.environment.classic.install'); ?>

                <i class="fa fa-angle-double-right fa-fw" aria-hidden="true"></i>
            </a>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.installer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/vendor/installer/environment-classic.blade.php ENDPATH**/ ?>