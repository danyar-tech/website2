<?php
require_once 'includes/lang.php';

$product = isset($_GET['product']) ? $_GET['product'] : 'one';

// Define data for all planters
$planters_data = [
    'one' => [
        'titleKey' => 'planter_one',
        'images' => [
            'assets/images/planters/planteringskarl-one.jpg',
            'assets/images/planters/planteringskarl-one-2.jpg',
            'assets/images/planters/planteringskarl-one-3.jpg'
        ],
        'specs' => [
            'Art no' => '520015',
            'Weight' => '14.5 kg',
            'Capacity' => '320L',
            'Length' => '1180 mm',
            'Width' => '610 mm',
            'Height' => '500 mm',
            'Standard Colour*' => 'Anthracite Grey RAL 7016*',
            'Material' => 'Fiberglass composite',
            '*) Can be ordered in any RAL colour' => ''
        ]
    ],
    'grow' => [
        'titleKey' => 'planter_grow',
        'images' => [
            'assets/images/planters/planteringskarl-grow.jpg',
            'assets/images/planters/planteringskarl-grow-brun.jpg'
        ],
        'specs' => [
            'Art no' => '520017',
            'Volume' => '400L',
            'Height' => '400 mm',
            'Top diameter' => '1280 mm',
            'Bottom diameter' => '800 mm',
            'Weight' => '24 kg',
            'Material' => 'Fiberglass composite',
            'Standard colour' => 'Anthracite Grey RAL 7016'
        ]
    ],
    'edge' => [
        'titleKey' => 'planter_edge',
        'images' => [
            'assets/images/planters/planteringskarl-edge-01.jpg',
            'assets/images/planters/planteringskarl-edge-02.jpg',
            'assets/images/planters/planteringskarl-edge-03.jpg'
        ],
        'specs' => [
            'Art no' => '520016',
            'Volume' => '210L',
            'Height' => '520 mm',
            'Top diameter' => '850 mm',
            'Bottom diameter' => '600 mm',
            'Weight' => '13 kg',
            'Material' => 'Fiberglass composite',
            'Standard colour*' => 'Anthracite Grey RAL 7016*',
            '*) Available in any RAL colour' => ''
        ]
    ],
    'happy' => [
        'titleKey' => 'planter_happy',
        'images' => [
            'assets/images/planters/planter-happy-01.jpg',
            'assets/images/planters/planter-happy-02.jpg',
            'assets/images/planters/planter-happy-03.jpg',
            'assets/images/planters/planter-happy-04.jpg'
        ],
        'specs' => [
            [
                'variant_name' => 'Small',
                'Art no' => '520011',
                'Volume' => '100L',
                'Height' => '400 mm',
                'Top diameter' => '620 mm',
                'Bottom diameter' => '520 mm',
                'Weight' => '6 kg',
                'Material' => 'Fiberglass composite',
                'Standard colour*' => 'Anthracite Grey RAL 7016*',
                '*) Available in any RAL colour' => ''
            ],
            [
                'variant_name' => 'Medium',
                'Art no' => '520012',
                'Volume' => '190L',
                'Height' => '580 mm',
                'Top diameter' => '800 mm',
                'Bottom diameter' => '600 mm',
                'Weight' => '8 kg',
                'Material' => 'Fiberglass composite',
                'Standard colour*' => 'Anthracite Grey RAL 7016*',
                '*) Available in any RAL colour' => ''
            ],
            [
                'variant_name' => 'Large',
                'Art no' => '520013',
                'Volume' => '270L',
                'Height' => '620 mm',
                'Top diameter' => '900 mm',
                'Bottom diameter' => '700 mm',
                'Weight' => '11 kg',
                'Material' => 'Fiberglass composite',
                'Standard colour*' => 'Anthracite Grey RAL 7016*',
                '*) Available in any RAL colour' => ''
            ],
            [
                'variant_name' => 'X-Large',
                'Art no' => '520014',
                'Volume' => '425L',
                'Height' => '650 mm',
                'Top diameter' => '1060 mm',
                'Bottom diameter' => '860 mm',
                'Weight' => '15 kg',
                'Material' => 'Fiberglass composite',
                'Standard colour*' => 'Anthracite Grey RAL 7016*',
                '*) Available in any RAL colour' => ''
            ]
        ]
    ],
    'happy_low' => [
        'titleKey' => 'planter_happy_low',
        'images' => ['assets/images/planters/planteringskarl-happy-low.jpg'],
        'specs' => [
            [
                'variant_name' => 'Medium',
                'Art no' => '520020',
                'Weight' => '9 kg',
                'Height' => '200 mm',
                'Diameter' => '1200 mm',
                'Material' => 'Fiberglass composite',
                'Standard colour*' => 'Anthracite Grey RAL 7016*',
                '*) Available in any RAL colour' => ''
            ],
            [
                'variant_name' => 'Large',
                'Art no' => '520018',
                'Weight' => '20 kg',
                'Height' => '300 mm',
                'Diameter' => '1600 mm',
                'Material' => 'Fiberglass composite',
                'Standard colour*' => 'Anthracite Grey RAL 7016*',
                '*) Available in any RAL colour' => ''
            ],
            [
                'variant_name' => 'XL',
                'Art no' => '520021',
                'Weight' => '24 kg',
                'Height' => '450 mm',
                'Diameter' => '1700 mm',
                'Material' => 'Fiberglass composite',
                'Standard colour*' => 'Anthracite Grey RAL 7016*',
                '*) Available in any RAL colour' => ''
            ]
        ]
    ],
];

$default_data = [
    'titleKey' => 'urban_planter',
    'images' => ['https://picsum.photos/800/800?random=1'],
    'specs' => ['Art no' => 'N/A']
];

$current_product_data = $planters_data[$product] ?? $default_data;

$titleKey = $current_product_data['titleKey'];
$images = $current_product_data['images'];
$specs = $current_product_data['specs'];
?>
<!DOCTYPE html>
<html lang="<?=$lang?>" dir="<?=$dir?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$t[$titleKey]?> - PLACEHOLDER</title>
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
        .tech-table { width: 100%; border-collapse: collapse; table-layout: fixed; }
        .tech-table td { padding: 12px 0; font-size: 14px; border-bottom: 1px solid #f0f0f0; word-wrap: break-word; overflow-wrap: break-word; }
        .tech-table td:first-child { color: #666; width: 40%; }
        .tech-table td:last-child { font-weight: 500; }
        .smartTabs { display: flex; gap: 5px; margin-bottom: 20px; flex-wrap: wrap; border-bottom: 1px solid #e0e0e0; padding-bottom: 10px; }
        .smartTabs .tabContent { padding: 8px 15px; cursor: pointer; font-size: 13px; color: #999; border: 1px solid transparent; transition: all 0.3s; }
        .smartTabs .tabContent a { text-decoration: none; color: inherit; }
        .smartTabs .tabContent.active { color: #000; border-color: #000; }
        #smartTabContainer { width: 100%; max-width: 100%; overflow: hidden; }
        #smartTabContainer section { display: none; }
        #smartTabContainer section:first-child { display: block; }
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
        [dir="rtl"] .tech-table td:first-child { text-align: right; }
        @media (max-width: 1024px) { .product-section { grid-template-columns: 1fr; gap: 40px; } }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/menu.php'; ?>

    <main>
        <div class="breadcrumb">
            <a href="index.php?lang=<?=$lang?>"><?=$t['home']?></a> |
            <a href="products-planters.php?lang=<?=$lang?>"><?=$t['planters']?></a> |
            <span class="current"><?=$t[$titleKey]?></span>
        </div>

        <div class="product-section">
            <div class="image-slider">
                <div class="slider-container">
                    <?php foreach ($images as $i => $imgPath): ?>
                        <div class="slide<?php if ($i === 0) echo ' active'; ?>">
                            <img src="<?=$imgPath?>" alt="<?=$t[$titleKey]?> - <?=($i+1)?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="slider-nav prev">&#10094;</button>
                <button class="slider-nav next">&#10095;</button>
            </div>

            <div class="product-info">
                <p class="product-intro"><?=$t['planter_intro']?></p>
                <h1><?=$t[$titleKey]?></h1>
                <p class="product-subtitle"><?=$t['art_no_see_tech']?></p>
                <p class="product-description"><?=$t['planter_desc']?></p>
                <button class="inquiry-btn"><?=$t['inquiry']?></button>

                <div class="product-includes">
                    <h3><?=$t['planter_includes_title']?></h3>
                    <ul>
                        <li><?=$t['planter_inc_1']?></li>
                        <li><?=$t['planter_inc_2']?></li>
                        <li><?=$t['planter_inc_3']?></li>
                        <li><?=$t['planter_inc_4']?></li>
                        <li><?=$t['planter_inc_5']?></li>
                    </ul>
                </div>

                <div class="info-block">
                    <h3><?=$t['choosing_planter_size']?></h3>
                    <p><?=$t['choosing_planter_size_desc']?></p>
                </div>

                <div class="info-block">
                    <h3><?=$t['planter_installation']?></h3>
                    <p><?=$t['planter_installation_desc']?></p>
                </div>

                <div class="info-block">
                    <h3><?=$t['shipping']?></h3>
                    <p><?=$t['shipping_planter_desc']?></p>
                </div>
            </div>
        </div>

        <div class="toggle">
            <div class="toggleRows"><?=$t['technical_data']?><span class="icon-arrow-down"></span></div>
            <div class="hiddenRow">
                <?php if (isset($specs[0]) && is_array($specs[0])): ?>
                    <div class="smartTabs">
                        <?php foreach ($specs as $i => $s): ?>
                            <div class="tabContent<?php if ($i === 0) echo ' active'; ?>">
                                <a href="#"><?= isset($s['variant_name']) ? $s['variant_name'] : 'Variant '.($i+1) ?></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div id="smartTabContainer">
                        <?php foreach ($specs as $i => $s): ?>
                            <section style="display:<?= $i === 0 ? 'block' : 'none' ?>">
                                <table class="tech-table">
                                    <tbody>
                                        <?php foreach ($s as $key => $val): ?>
                                            <?php if ($key === 'variant_name') continue; ?>
                                            <tr><td><?= $key ?></td><td><?= $val ?></td></tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </section>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <table class="tech-table">
                        <tbody>
                            <?php foreach ($specs as $key => $val): ?>
                                <tr><td><?= $key ?></td><td><?= $val ?></td></tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>

            <div class="toggleRows"><?=$t['download']?><span class="icon-arrow-down"></span></div>
            <div class="hiddenRow">
                <table class="video download"><tbody><tr><td><span class="icon-file-pdf"></span></td><td><a href="#" target="_blank">Product Specification Sheet</a></td></tr><tr><td><span class="icon-file-pdf"></span></td><td><a href="#" target="_blank">Installation Guide</a></td></tr><tr><td><span class="icon-file-pdf"></span></td><td><a href="#" target="_blank">Catalogue</a></td></tr><tr><td><span class="icon-file-dwg"></span></td><td><a href="#" target="_blank">Technical Drawing</a></td></tr></tbody></table>
            </div>

            <div class="toggleRows"><?=$t['projects']?><span class="icon-arrow-down"></span></div>
            <div class="hiddenRow">
                <table class="video"><tbody><tr><td><img src="https://picsum.photos/100/100?random=81"></td><td><a href="#">Baghdad, Iraq</a></td></tr><tr><td><img src="https://picsum.photos/100/100?random=82"></td><td><a href="#">Erbil, Iraq</a></td></tr><tr><td><img src="https://picsum.photos/100/100?random=83"></td><td><a href="#">Sulaymaniyah, Iraq</a></td></tr></tbody></table>
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
