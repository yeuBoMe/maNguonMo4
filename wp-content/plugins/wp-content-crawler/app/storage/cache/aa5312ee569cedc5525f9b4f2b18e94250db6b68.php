

<tr <?php if(isset($id)): ?> id="<?php echo e($id); ?>" <?php endif; ?>
    <?php if(isset($class)): ?> class="<?php echo e($class); ?>" <?php endif; ?>
    aria-label="<?php echo e($name); ?>"
>
    <td>
        <?php echo $__env->make('form-items/label', [
            'for'   =>  $name,
            'title' =>  $title,
            'info'  =>  $info
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </td>
    <td>
        <?php echo $__env->make('form-items/category-select', [
            'name'          =>  $name,
            'categories'    =>  $categories,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </td>
</tr><?php /**PATH C:\xamppp\htdocs\hoaiNinh\wp-content\plugins\wp-content-crawler\app\views/form-items/combined/category-select-with-label.blade.php ENDPATH**/ ?>