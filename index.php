<?php include 'includes/lang.php'; ?>
<!DOCTYPE html>
<html lang="<?=$lang?>" dir="<?=$dir?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLACEHOLDER - Premium Products</title>
    <?php include 'includes/styles.php'; ?>
    <style>
        .hero {
            position: relative;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding-bottom: 40px;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .hero .scroll-indicator {
            position: relative;
            z-index: 2;
            width: 50px;
            height: 50px;
            border: 2px solid rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(6px);
        }

        .hero .scroll-indicator::after {
            content: '';
            width: 10px;
            height: 10px;
            border-right: 2px solid rgba(255, 255, 255, 0.95);
            border-bottom: 2px solid rgba(255, 255, 255, 0.95);
            transform: rotate(45deg);
            margin-top: -4px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0;
        }

        .product-card {
            position: relative;
            height: 50vh;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease, z-index 0s;
            text-decoration: none;
            color: inherit;
            display: block;
            z-index: 1;
        }

        .product-card:hover {
            transform: scale(1.05);
            z-index: 10;
        }

        .product-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-card-title {
            position: absolute;
            bottom: 30px;
            left: 30px;
            color: white;
            font-size: 28px;
            font-weight: 300;
            letter-spacing: 2px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: 1fr;
            }

            .product-card {
                height: 40vh;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/menu.php'; ?>

    <!-- Hero Section (video) -->
    <section class="hero">
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="assets/video/3690089-hd_1920_1080_24fps (1).mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    
        <div class="hero-bottom-actions">
            <a href="products-flagpoles.php?lang=<?=$lang?>" class="hero-action-btn">
                <img src="https://picsum.photos/800/600?random=1" alt="Flagpoles">
                <span class="btn-title"><?=$t['flagpoles']?></span>
            </a>
            
            <a href="products-signage.php?lang=<?=$lang?>" class="hero-action-btn">
                <img src="https://picsum.photos/800/600?random=4" alt="Signage">
                <span class="btn-title"><?=$t['signage']?></span>
            </a>
    
        </div>
    
        <div class="scroll-indicator"></div>
    </section>

    <!-- Product Grid -->
    <section class="product-grid">
        <a href="products-flagpoles.php?lang=<?=$lang?>" class="product-card">
            <img src="assets/images/flagpoles/intro-flagpoles-5.jpg" alt="Flagpoles">
            <div class="product-card-title"><?=$t['flagpoles']?></div>
        </a>

        <a href="products-planters.php?lang=<?=$lang?>" class="product-card">
            <img src="assets/images/planters/intro-planters.jpg" alt="Planters">
            <div class="product-card-title"><?=$t['planters']?></div>
        </a>

        <a href="products-signage.php?lang=<?=$lang?>" class="product-card">
            <img src="https://picsum.photos/800/600?random=4" alt="Signage">
            <div class="product-card-title"><?=$t['signage']?></div>
        </a>
    </section>

    <?php include 'includes/newsletter.php'; ?>
    <?php include 'includes/footer.php'; ?>

    <script>
        const scrollIndicator = document.querySelector('.scroll-indicator');
        if (scrollIndicator) {
            scrollIndicator.addEventListener('click', function () {
                window.scrollTo({ top: window.innerHeight, behavior: 'smooth' });
            });
        }
    </script>
</body>

</html>
