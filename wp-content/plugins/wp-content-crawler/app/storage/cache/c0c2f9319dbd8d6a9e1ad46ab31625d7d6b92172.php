<div class="input-group category-taxonomy <?php echo e(isset($remove) ? 'remove' : ''); ?> <?php echo e(isset($class) ? $class : ''); ?>"
     <?php if(isset($dataKey)): ?> data-key="<?php echo e($dataKey); ?>" <?php endif; ?>>

    <div class="input-container">
        <?php echo $__env->make('form-items.input-with-inner-key', [
            'innerKey'      => \WPCCrawler\Objects\Settings\Enums\SettingInnerKey::TAXONOMY,
            'placeholder'   => _wpcc("Taxonomy...")
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('form-items.input-with-inner-key', [
            'innerKey'      => \WPCCrawler\Objects\Settings\Enums\SettingInnerKey::DESCRIPTION,
            'placeholder'   => _wpcc("Name/description...")
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php if(isset($remove) && $remove): ?>
        <?php echo $__env->make('form-items/remove-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</div><?php /**PATH C:\xamppp\htdocs\hoaiNinh\wp-content\plugins\wp-content-crawler\app\views/form-items/custom-post-category-taxonomy.blade.php ENDPATH**/ ?>