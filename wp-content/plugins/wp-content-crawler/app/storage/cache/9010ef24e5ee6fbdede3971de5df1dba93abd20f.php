<?php
$transMakeSureDecimalsMatch = _wpcc('Make sure decimal separators match with the ones you configured for WooCommerce.');
?>

<table class="wcc-settings">

    
    <?php echo $__env->make('form-items.combined.short-code-buttons-with-label', [
        'title'     => _wpcc('Short codes'),
        'info'      => _wpcc('Short codes that can be used in product URL and button text.'),
        'buttons'   => $buttonsMain,
        'class'     => 'wc-external-product',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('form-items.combined.input-with-label', [
        'name'          => \WPCCrawler\PostDetail\WooCommerce\WooCommerceSettings::WC_PRODUCT_URL,
        'title'         => _wpcc('Product URL'),
        'info'          => _wpcc("Set the product URL."),
        'placeholder'   => 'http://',
        'class'         => 'wc-external-product',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('form-items.combined.input-with-label', [
        'name'          => \WPCCrawler\PostDetail\WooCommerce\WooCommerceSettings::WC_BUTTON_TEXT,
        'title'         => _wpcc('Button Text'),
        'info'          => _wpcc("Set the button text."),
        'placeholder'   => _wpcc('Buy product'),
        'class'         => 'wc-external-product button-text',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('form-items.combined.multiple-selector-with-attribute', [
        'name'          => \WPCCrawler\PostDetail\WooCommerce\WooCommerceSettings::WC_REGULAR_PRICE_SELECTORS,
        'title'         => _wpcc('Regular Price Selectors'),
        'info'          => _wpcc('CSS selectors for regular price.') . ' ' . $transMakeSureDecimalsMatch .  ' ' . _wpcc_trans_multiple_selectors_first_match(),
        'optionsBox'    => true,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('form-items.combined.multiple-selector-with-attribute', [
        'name'          => \WPCCrawler\PostDetail\WooCommerce\WooCommerceSettings::WC_SALE_PRICE_SELECTORS,
        'title'         => _wpcc('Sale Price Selectors'),
        'info'          => _wpcc('CSS selectors for sale price.') . ' ' . $transMakeSureDecimalsMatch . ' ' . _wpcc_trans_multiple_selectors_first_match(),
        'optionsBox'    => true,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('form-items.combined.multiple-selector-with-attribute', [
        'name'          => \WPCCrawler\PostDetail\WooCommerce\WooCommerceSettings::WC_FILE_URL_SELECTORS,
        'title'         => _wpcc('Downloadable File URL Selectors'),
        'info'          => _wpcc('CSS selectors for downloadable files.') . ' ' . _wpcc_trans_multiple_selectors_all_matches(),
        'defaultAttr'   => 'src',
        'class'         => 'wc-download',
        'optionsBox'    => true,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('form-items.combined.input-with-label', [
        'name'  => \WPCCrawler\PostDetail\WooCommerce\WooCommerceSettings::WC_DOWNLOAD_LIMIT,
        'title' => _wpcc('Download Limit'),
        'info'  => _wpcc('Leave blank for unlimited re-downloads.'),
        'type'  => 'number',
        'class' => 'wc-download'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('form-items.combined.input-with-label', [
        'name'  => \WPCCrawler\PostDetail\WooCommerce\WooCommerceSettings::WC_DOWNLOAD_EXPIRY,
        'title' => _wpcc('Download Expiry'),
        'info'  => _wpcc('Enter the number of days before a download link expires, or leave blank.'),
        'type'  => 'number',
        'class' => 'wc-download'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</table>
<?php /**PATH C:\xamppp\htdocs\hoaiNinh\wp-content\plugins\wp-content-crawler\app\views/post-detail/woocommerce/site-settings/tab-general.blade.php ENDPATH**/ ?>