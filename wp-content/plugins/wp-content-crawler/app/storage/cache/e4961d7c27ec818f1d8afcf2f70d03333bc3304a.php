

<div class="form-button-container <?php echo e(isset($class) ? $class : ''); ?>">
    <button class="button <?php echo e(isset($buttonClass) ? $buttonClass : 'button-primary'); ?> button-large" type="submit" id="<?php echo e(isset($id) ? $id : ''); ?>"
        <?php if(isset($buttonTitle) && $buttonTitle): ?>
            title="<?php echo e($buttonTitle); ?>" data-wpcc-toggle="wpcc-tooltip" data-placement="<?php echo e(isset($dataPlacement) && $dataPlacement ? $dataPlacement : 'right'); ?>"
        <?php endif; ?>
    >
        <?php if(isset($buttonText) && $buttonText): ?>
            <?php echo e($buttonText); ?>

        <?php else: ?>
            <?php echo e(_wpcc('Save Changes')); ?>

        <?php endif; ?>
    </button>
</div><?php /**PATH C:\xamppp\htdocs\hoaiNinh\wp-content\plugins\wp-content-crawler\app\views/form-items/partials/form-button-container.blade.php ENDPATH**/ ?>