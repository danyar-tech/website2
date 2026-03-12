<?php require_once 'includes/lang.php'; ?>
<!DOCTYPE html>
<html lang="<?=$lang?>" dir="<?=$dir?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLACEHOLDER - <?=$t['planters']?></title>
    <?php include 'includes/styles.php'; ?>
    <style>
        main { margin-top: 80px; padding: 40px 60px; max-width: 1400px; margin-left: auto; margin-right: auto; }
        .breadcrumb { margin-bottom: 40px; font-size: 12px; color: #999; letter-spacing: 1px; }
        .breadcrumb a { color: #999; text-decoration: none; margin-right: 10px; }
        .breadcrumb a:hover { color: #333; }
        .breadcrumb .current { color: #000; border: 1px solid #000; padding: 2px 8px; }
        .page-header { margin-bottom: 60px; }
        .page-header h1 { font-size: 42px; font-weight: 300; letter-spacing: 2px; margin-bottom: 30px; }
        .page-description { max-width: 600px; font-size: 16px; font-style: italic; line-height: 1.8; color: #333; }
        .products-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-bottom: 80px; }
        .product-item { text-align: center; transition: transform 0.3s; text-decoration: none; color: inherit; display: block; }
        .product-item:hover { transform: translateY(-5px); }
        .product-image { width: 100%; aspect-ratio: 1; background: #f5f5f5; margin-bottom: 20px; overflow: hidden; }
        .product-image img { width: 100%; height: 100%; object-fit: cover; }
        .product-title { font-size: 14px; font-weight: 600; letter-spacing: 1px; margin-bottom: 5px; }
        .product-category { font-size: 12px; color: #999; letter-spacing: 1px; }
        .info-sections { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 80px; }
        .info-section { margin-bottom: 40px; }
        .info-section h2 { font-size: 14px; font-weight: 600; letter-spacing: 1.5px; margin-bottom: 20px; }
        .info-section p { font-size: 15px; line-height: 1.8; color: #333; }
        .info-section a { color: #000; text-decoration: underline; }
        .accessories-section { margin-bottom: 80px; }
        .accessories-section h2 { font-size: 24px; font-weight: 300; letter-spacing: 2px; margin-bottom: 40px; }
        .accessories-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; }
        .accessory-item { text-align: center; }
        .accessory-image { width: 100%; aspect-ratio: 1; background: #f5f5f5; margin-bottom: 20px; overflow: hidden; border-radius: 8px; }
        .accessory-image img { width: 100%; height: 100%; object-fit: cover; }
        .accessory-item h3 { font-size: 14px; font-weight: 600; letter-spacing: 1px; margin-bottom: 10px; }
        .accessory-item p { font-size: 13px; line-height: 1.6; color: #666; }
        @media (max-width: 1024px) { .products-grid { grid-template-columns: repeat(2, 1fr); } .accessories-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 768px) { .products-grid { grid-template-columns: 1fr; } .info-sections { grid-template-columns: 1fr; } .accessories-grid { grid-template-columns: 1fr; } }
        [dir="rtl"] .page-header, [dir="rtl"] .page-description, [dir="rtl"] .info-section, [dir="rtl"] .accessories-section, [dir="rtl"] .accessory-item { text-align: right; }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/menu.php'; ?>

    <main>
        <div class="breadcrumb">
            <a href="index.php?lang=<?=$lang?>"><?=$t['home']?></a>
            <span>|</span>
            <span class="current"><?=$t['planters']?></span>
        </div>

        <div class="page-header">
            <h1><?=$t['planters']?></h1>
            <p class="page-description">
                <?=$t['planters_page_desc']?>
            </p>
        </div>

        <div class="products-grid">
            <a href="detail-planters.php?lang=<?=$lang?>&product=one" class="product-item">
                <div class="product-image">
                    <img src="assets/images/planters/planteringskarl-one.jpg" alt="<?=$t['planter_one']?>">
                </div>
                <div class="product-title"><?=$t['planter_one']?></div>
                <div class="product-category"><?=$t['planters']?></div>
            </a>

            <a href="detail-planters.php?lang=<?=$lang?>&product=grow" class="product-item">
                <div class="product-image">
                    <img src="assets/images/planters/planteringskarl-grow.jpg" alt="<?=$t['planter_grow']?>">
                </div>
                <div class="product-title"><?=$t['planter_grow']?></div>
                <div class="product-category"><?=$t['planters']?></div>
            </a>

            <a href="detail-planters.php?lang=<?=$lang?>&product=edge" class="product-item">
                <div class="product-image">
                    <img src="assets/images/planters/planteringskarl-edge-01.jpg" alt="<?=$t['planter_edge']?>">
                </div>
                <div class="product-title"><?=$t['planter_edge']?></div>
                <div class="product-category"><?=$t['planters']?></div>
            </a>

            <a href="detail-planters.php?lang=<?=$lang?>&product=happy" class="product-item">
                <div class="product-image">
                    <img src="assets/images/planters/planter-happy-01.jpg" alt="<?=$t['planter_happy']?>">
                </div>
                <div class="product-title"><?=$t['planter_happy']?></div>
                <div class="product-category"><?=$t['planters']?></div>
            </a>

            <a href="detail-planters.php?lang=<?=$lang?>&product=happy_low" class="product-item">
                <div class="product-image">
                    <img src="assets/images/planters/planteringskarl-happy-low.jpg" alt="<?=$t['planter_happy_low']?>">
                </div>
                <div class="product-title"><?=$t['planter_happy_low']?></div>
                <div class="product-category"><?=$t['planters']?></div>
            </a>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>
