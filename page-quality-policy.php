<?php require_once 'includes/lang.php'; ?>
<!DOCTYPE html>
<html lang="<?=$lang?>" dir="<?=$dir?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quality Policy - PLACEHOLDER</title>
    <?php include 'includes/styles.php'; ?>
    <style>
        main { margin-top: 80px; padding: 60px; max-width: 1000px; margin-left: auto; margin-right: auto; }
        .page-header h1 { font-size: 36px; font-weight: 300; letter-spacing: 2px; margin-bottom: 30px; }
        .page-content { font-size: 15px; line-height: 1.8; color: #333; }
        .page-content p { margin-bottom: 20px; }
        .back-link { display: inline-block; margin-top: 40px; color: #000; text-decoration: none; font-size: 14px; letter-spacing: 1px; border-bottom: 1px solid #000; padding-bottom: 2px; }
        .back-link:hover { opacity: 0.6; }
        [dir="rtl"] .page-header, [dir="rtl"] .page-content { text-align: right; }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/menu.php'; ?>
    <main>
        <div class="page-header">
            <h1><?=$t['quality_policy']?></h1>
        </div>
        <div class="page-content">
            <p><?=$t['page_coming_soon']?></p>
        </div>
        <a href="index.php?lang=<?=$lang?>" class="back-link"><?=$t['back_to_home']?></a>
    </main>
    
    <?php include 'includes/footer.php'; ?>
</body>
</html>
