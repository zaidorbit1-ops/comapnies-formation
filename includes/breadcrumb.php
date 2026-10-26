<?php
$breadcrumbItems = $breadcrumbs ?? [];
?>
<section class="page-hero" aria-labelledby="page-hero-title">
  <div class="page-hero__inner max-w-7xl mx-auto px-6 lg:px-12">
    <nav class="page-breadcrumb" aria-label="Breadcrumb">
      <ol>
        <?php foreach ($breadcrumbItems as $index => $breadcrumb): ?>
          <?php $isCurrent = $index === array_key_last($breadcrumbItems); ?>
          <li>
            <?php if (!$isCurrent): ?>
              <a href="<?= htmlspecialchars($breadcrumb['url'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($breadcrumb['label'], ENT_QUOTES, 'UTF-8') ?></a>
              <span class="material-symbols-outlined" aria-hidden="true">chevron_right</span>
            <?php else: ?>
              <span aria-current="page"><?= htmlspecialchars($breadcrumb['label'], ENT_QUOTES, 'UTF-8') ?></span>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ol>
    </nav>
    <span class="page-hero__eyebrow">Companies Formation · Ireland</span>
    <h1 id="page-hero-title"><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></h1>
    <p><?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?></p>
  </div>
</section>
