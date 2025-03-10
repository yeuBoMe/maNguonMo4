<?php

/** @var int $postId */
$isSiteSetting = isset($postId) && $postId;
$data = $isSiteSetting ? get_post_meta($postId, '_wpcc_site_query_params', true) : $_GET;
$keyUrlHash = WPCCrawler\Environment::keyUrlHash();

?>

<input type="hidden" name="<?php echo e($keyUrlHash); ?>" <?php if($data && isset($data[$keyUrlHash]) && $data[$keyUrlHash]): ?> value="<?php echo e($data[$keyUrlHash]); ?>" <?php endif; ?>>

<?php

// Delete the post meta after we are done with it. By this way, we will avoid unwanted tab activations. For example,
// the user won't be seeing a tab activation when he/she opens the site setting by clicking a site link in site list.
// By doing this, we ensure that the tab activation will be done only after the settings are updated.
if($isSiteSetting && $data) delete_post_meta($postId, '_wpcc_site_query_params');

?><?php /**PATH C:\xamppp\htdocs\hoaiNinh\wp-content\plugins\wp-content-crawler\app\views/partials/input-url-hash.blade.php ENDPATH**/ ?>