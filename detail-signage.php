<?php require_once 'includes/lang.php'; ?>
<!DOCTYPE html>
<html lang="<?=$lang?>" dir="<?=$dir?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNAGE STANDARD - PLACEHOLDER</title>
    <?php include 'includes/styles.php'; ?>
    <style>
        main { margin-top: 80px; padding: 40px 60px; max-width: 1400px; margin-left: auto; margin-right: auto; }
        .breadcrumb { margin-bottom: 40px; font-size: 12px; color: #999; letter-spacing: 1px; }
        .breadcrumb a { color: #999; text-decoration: none; margin-right: 10px; }
        .breadcrumb a:hover { color: #333; }
        .breadcrumb .current { color: #000; border: 1px solid #000; padding: 2px 8px; }
        .product-section { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 80px; align-items: start; }
        .image-slider { position: relative; background: #f5f5f5; width: 100%; max-width: 100%; }
        .slider-container { position: relative; width: 100%; overflow: hidden; }
        .slide { display: none; width: 100%; }
        .slide.active { display: block; }
        .slide img { width: 100%; height: auto; object-fit: contain; display: block; }
        .slider-nav { position: absolute; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.9); border: none; width: 50px; height: 50px; font-size: 24px; cursor: pointer; display: flex; align-items: center; justify-content: center; }
        .slider-nav:hover { background: white; }
        .slider-nav.prev { left: 20px; }
        .slider-nav.next { right: 20px; }
        .product-intro { font-style: italic; color: #999; font-size: 14px; margin-bottom: 30px; line-height: 1.8; }
        .product-info h1 { font-size: 42px; font-weight: 300; letter-spacing: 2px; margin-bottom: 10px; }
        .product-subtitle { font-size: 13px; color: #999; margin-bottom: 30px; }
        .product-description { font-size: 15px; line-height: 1.8; margin-bottom: 30px; font-style: italic; }
        .inquiry-btn { background: white; color: #000; padding: 12px 30px; border: 1px solid #000; font-size: 12px; letter-spacing: 2px; cursor: pointer; transition: all 0.3s; margin-bottom: 40px; display: inline-block; }
        .inquiry-btn:hover { background: #000; color: white; }
        .product-includes h3 { font-size: 14px; font-weight: 600; letter-spacing: 1.5px; margin-bottom: 15px; }
        .product-includes ul { list-style: disc; padding-left: 20px; margin-bottom: 40px; }
        .product-includes ul li { font-size: 15px; margin-bottom: 8px; }
        .info-block { margin-bottom: 30px; }
        .info-block h3 { font-size: 14px; font-weight: 600; letter-spacing: 1.5px; margin-bottom: 15px; }
        .info-block p { font-size: 15px; line-height: 1.8; }
        .info-block a { color: #000; text-decoration: underline; }

        /* Toggle Sections */
        .toggle { width: 100%; max-width: 100%; overflow: hidden; margin-bottom: 0; }
        .toggleRows { padding: 25px 0; display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-size: 14px; font-weight: 600; letter-spacing: 1.5px; border-bottom: 1px solid #e0e0e0; user-select: none; }
        .toggleRows:hover { opacity: 0.7; }
        .icon-arrow-down { display: inline-block; width: 0; height: 0; border-left: 6px solid transparent; border-right: 6px solid transparent; border-top: 6px solid #333; margin-left: 10px; transition: transform 0.3s ease; }
        .toggleRows.active .icon-arrow-down { transform: rotate(180deg); }
        .hiddenRow { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0; }
        .hiddenRow.active { max-height: 2000px; padding: 20px 0; }
        .smartTabs { display: flex; gap: 5px; margin-bottom: 20px; flex-wrap: wrap; border-bottom: 1px solid #e0e0e0; padding-bottom: 10px; }
        .smartTabs .tabContent { padding: 8px 15px; cursor: pointer; font-size: 13px; color: #999; border: 1px solid transparent; transition: all 0.3s; }
        .smartTabs .tabContent a { text-decoration: none; color: inherit; }
        .smartTabs .tabContent.active { color: #000; border-color: #000; }
        #smartTabContainer { width: 100%; max-width: 100%; overflow: hidden; }
        #smartTabContainer section { display: none; }
        #smartTabContainer section:first-child { display: block; }
        #smartTabContainer table { width: 100%; border-collapse: collapse; table-layout: fixed; }
        #smartTabContainer table td { padding: 12px 0; font-size: 14px; border-bottom: 1px solid #f0f0f0; word-wrap: break-word; overflow-wrap: break-word; }
        #smartTabContainer table td:first-child { color: #666; width: 40%; }
        #smartTabContainer table td:last-child { font-weight: 500; }
        .download table { width: 100%; }
        .download table td { padding: 10px 5px; font-size: 14px; vertical-align: middle; }
        .download table td:first-child { width: 30px; }
        .download table a { color: #000; text-decoration: none; }
        .download table a:hover { text-decoration: underline; }
        .icon-file-pdf::before { content: '📄'; font-size: 18px; }
        .icon-file-dwg::before { content: '📐'; font-size: 18px; }
        .video table { width: 100%; }
        .video table td { padding: 10px 5px; font-size: 14px; vertical-align: middle; }
        .video table td img { width: 60px; height: 60px; border-radius: 50%; object-fit: cover; }
        .video table a { color: #000; text-decoration: none; }
        .video table a:hover { text-decoration: underline; }

        /* RTL Overrides */
        [dir="rtl"] .product-section { direction: rtl; }
        [dir="rtl"] .product-info { text-align: right; }
        [dir="rtl"] .product-includes ul { padding-left: 0; padding-right: 20px; }
        [dir="rtl"] .info-block { text-align: right; }
        [dir="rtl"] .toggleRows { flex-direction: row-reverse; }
        [dir="rtl"] .icon-arrow-down { margin-left: 0; margin-right: 10px; }
        [dir="rtl"] #smartTabContainer table td:first-child { text-align: right; }
        @media (max-width: 1024px) { .product-section { grid-template-columns: 1fr; gap: 40px; } }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/menu.php'; ?>

    <main>
        <div class="breadcrumb">
            <a href="index.php?lang=<?=$lang?>"><?=$t['home']?></a> |
            <a href="products-signage.php?lang=<?=$lang?>"><?=$t['signage']?></a> |
            <span class="current"><?=$t['signage_standard']?></span>
        </div>

        <div class="product-section">
            <div class="image-slider">
                <div class="slider-container">
                    <div class="slide active">
                        <img src="https://picsum.photos/800/800?random=91" alt="Signage Standard">
                    </div>
                    <div class="slide">
                        <img src="https://picsum.photos/800/800?random=92" alt="Signage Standard">
                    </div>
                    <div class="slide">
                        <img src="https://picsum.photos/800/800?random=93" alt="Signage Standard">
                    </div>
                </div>
                <button class="slider-nav prev">&#10094;</button>
                <button class="slider-nav next">&#10095;</button>
            </div>

            <div class="product-info">
                <p class="product-intro"><?=$t['signage_intro']?></p>
                <h1><?=$t['signage_standard']?></h1>
                <p class="product-subtitle"><?=$t['art_no_see_tech']?></p>
                <p class="product-description"><?=$t['signage_desc']?></p>
                <button class="inquiry-btn"><?=$t['inquiry']?></button>

                <div class="product-includes">
                    <h3><?=$t['signage_includes_title']?></h3>
                    <ul>
                        <li><?=$t['signage_inc_1']?></li>
                        <li><?=$t['signage_inc_2']?></li>
                        <li><?=$t['signage_inc_3']?></li>
                        <li><?=$t['signage_inc_4']?></li>
                        <li><?=$t['signage_inc_5']?></li>
                    </ul>
                </div>

                <div class="info-block">
                    <h3><?=$t['choosing_sign_size']?></h3>
                    <p><?=$t['choosing_sign_size_desc']?></p>
                </div>

                <div class="info-block">
                    <h3><?=$t['signage_installation']?></h3>
                    <p><?=$t['signage_installation_desc']?></p>
                </div>

                <div class="info-block">
                    <h3><?=$t['shipping']?></h3>
                    <p><?=$t['shipping_signage_desc']?></p>
                </div>
            </div>
        </div>

        <div class="toggle">
            <div class="toggleRows"><?=$t['technical_data']?><span class="icon-arrow-down"></span></div>
            <div class="hiddenRow">
                <div class="smartTabs"><div class="tabContent active"><a href="#">Single Post</a></div><div class="tabContent"><a href="#">Double Post</a></div><div class="tabContent"><a href="#">Wall Mount</a></div></div><div id="smartTabContainer"><section><table><tbody><tr><td>Art no</td><td>SG-SP100 </td></tr><tr><td>Weight</td><td>12 kg </td></tr><tr><td>Material</td><td>Aluminum </td></tr><tr><td>Height</td><td>2500 mm </td></tr><tr><td>Sign width</td><td>600 mm </td></tr><tr><td>Sign height</td><td>400 mm </td></tr><tr><td>Post diameter</td><td>76 mm </td></tr><tr><td>Standard finish</td><td>Silver anodized </td></tr></tbody></table></section><section><table><tbody><tr><td>Art no</td><td>SG-DP200 </td></tr><tr><td>Weight</td><td>18 kg </td></tr><tr><td>Material</td><td>Aluminum </td></tr><tr><td>Height</td><td>2500 mm </td></tr><tr><td>Sign width</td><td>1200 mm </td></tr><tr><td>Sign height</td><td>400 mm </td></tr><tr><td>Post diameter</td><td>76 mm </td></tr><tr><td>Standard finish</td><td>Silver anodized </td></tr></tbody></table></section><section><table><tbody><tr><td>Art no</td><td>SG-WM300 </td></tr><tr><td>Weight</td><td>8 kg </td></tr><tr><td>Material</td><td>Aluminum </td></tr><tr><td>Sign width</td><td>600 mm </td></tr><tr><td>Sign height</td><td>400 mm </td></tr><tr><td>Projection</td><td>150 mm </td></tr><tr><td>Standard finish</td><td>Silver anodized </td></tr></tbody></table></section></div>
            </div>

            <div class="toggleRows"><?=$t['download']?><span class="icon-arrow-down"></span></div>
            <div class="hiddenRow">
                <table class="video download"><tbody><tr><td><span class="icon-file-pdf"></span></td><td><a href="#" target="_blank">Product Specification Sheet</a></td></tr><tr><td><span class="icon-file-pdf"></span></td><td><a href="#" target="_blank">Installation Guide</a></td></tr><tr><td><span class="icon-file-pdf"></span></td><td><a href="#" target="_blank">Catalogue</a></td></tr><tr><td><span class="icon-file-dwg"></span></td><td><a href="#" target="_blank">Technical Drawing</a></td></tr><tr><td><span class="icon-file-pdf"></span></td><td><a href="#" target="_blank">Branding Guidelines</a></td></tr></tbody></table>
            </div>

            <div class="toggleRows"><?=$t['projects']?><span class="icon-arrow-down"></span></div>
            <div class="hiddenRow">
                <table class="video"><tbody><tr><td><img src="https://picsum.photos/100/100?random=95"></td><td><a href="#">Baghdad, Iraq</a></td></tr><tr><td><img src="https://picsum.photos/100/100?random=96"></td><td><a href="#">Erbil, Iraq</a></td></tr><tr><td><img src="https://picsum.photos/100/100?random=97"></td><td><a href="#">Basra, Iraq</a></td></tr><tr><td><img src="https://picsum.photos/100/100?random=98"></td><td><a href="#">Sulaymaniyah, Iraq</a></td></tr></tbody></table>
            </div>
        </div>
    </main>

    
    <?php include 'includes/footer.php'; ?>

    <script>
        // Image Slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;
        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            currentSlide = (n + totalSlides) % totalSlides;
            slides[currentSlide].classList.add('active');
        }
        document.querySelector('.slider-nav.prev').addEventListener('click', () => showSlide(currentSlide - 1));
        document.querySelector('.slider-nav.next').addEventListener('click', () => showSlide(currentSlide + 1));

        // Toggle Sections
        document.querySelectorAll('.toggleRows').forEach(row => {
            row.addEventListener('click', function() {
                this.classList.toggle('active');
                const hiddenRow = this.nextElementSibling;
                if (hiddenRow && hiddenRow.classList.contains('hiddenRow')) {
                    hiddenRow.classList.toggle('active');
                }
            });
        });

        // Smart Tabs
        document.querySelectorAll('.smartTabs .tabContent').forEach((tab, index) => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelectorAll('.smartTabs .tabContent').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                const sections = document.querySelectorAll('#smartTabContainer section');
                sections.forEach(s => s.style.display = 'none');
                if (sections[index]) sections[index].style.display = 'block';
            });
        });
    </script>
</body>
</html>
