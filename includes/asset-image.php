<?php
declare(strict_types=1);

$assetImageName = $assetImageName ?? '';
$assetImageAlt = $assetImageAlt ?? '';
$assetImageWidth = $assetImageWidth ?? 1200;
$assetImageHeight = $assetImageHeight ?? 880;
$assetImageClass = $assetImageClass ?? '';
$assetImagePriority = $assetImagePriority ?? false;
$assetImageLoading = $assetImageLoading ?? 'lazy';
$assetImageDirectory = dirname(__DIR__) . '/assets/images/';
$assetImagePath = $assetImageDirectory . basename($assetImageName);
$assetImageExists = $assetImageName !== '' && is_file($assetImagePath);
$assetImageUrl = rtrim($siteRoot ?? '', '/') . '/assets/images/' . rawurlencode(basename($assetImageName));
?>
<?php if ($assetImageExists): ?>
  <img
    class="<?= htmlspecialchars($assetImageClass, ENT_QUOTES, 'UTF-8') ?>"
    src="<?= htmlspecialchars($assetImageUrl, ENT_QUOTES, 'UTF-8') ?>"
    alt="<?= htmlspecialchars($assetImageAlt, ENT_QUOTES, 'UTF-8') ?>"
    width="<?= (int) $assetImageWidth ?>"
    height="<?= (int) $assetImageHeight ?>"
    loading="<?= htmlspecialchars($assetImageLoading, ENT_QUOTES, 'UTF-8') ?>"<?= $assetImagePriority ? ' fetchpriority="high"' : '' ?>>
<?php else: ?>
  <div
    class="asset-image-placeholder <?= htmlspecialchars($assetImageClass, ENT_QUOTES, 'UTF-8') ?>"
    role="img"
    aria-label="<?= htmlspecialchars($assetImageAlt, ENT_QUOTES, 'UTF-8') ?>. Image file <?= htmlspecialchars($assetImageName, ENT_QUOTES, 'UTF-8') ?> not added yet."
    style="--asset-image-ratio: <?= round($assetImageWidth / max($assetImageHeight, 1), 4) ?>">
    <span class="material-symbols-outlined" aria-hidden="true">add_photo_alternate</span>
    <span class="asset-image-placeholder__title">Image not added yet</span>
    <span class="asset-image-placeholder__file"><?= htmlspecialchars($assetImageName, ENT_QUOTES, 'UTF-8') ?></span>
    <span class="asset-image-placeholder__size">Add to <code>assets/images/</code> · <?= (int) $assetImageWidth ?> × <?= (int) $assetImageHeight ?> px</span>
  </div>
<?php endif; ?>
