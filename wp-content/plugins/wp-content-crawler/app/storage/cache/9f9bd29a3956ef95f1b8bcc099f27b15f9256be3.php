

<?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionValue => $optionName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($optionValue); ?>" <?php if(\WPCCrawler\Utils::isOptionSelected($optionValue, $selected)): ?> selected="selected" <?php endif; ?>><?php echo e($optionName); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /Users/rocketgroup/Sites/PROJECTS - RKW/tgdd2.rkw/wp-content/plugins/wp-content-crawler/app/views/form-items/partials/select-options.blade.php ENDPATH**/ ?>