<?php require_once 'includes/lang.php'; ?>
<?php
// Determine which product (original, black, iss) to show
$product = isset($_GET['product']) ? $_GET['product'] : 'original';
if ($product === 'black') {
    $titleKey = 'flagpoles_black_edition';
    $images = [
        'assets/images/flagpoles/flaggstang-original-black.jpg',
        'assets/images/flagpoles/flaggstang-original-black-edition-1.jpg',
        'assets/images/flagpoles/flaggstang-original-black-edition-3.jpg',
    ];
    $specs = [
        [
            "size_meters" => 6,
            "art_no" => "100600-S",
            "weight_kg" => 25,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 115,
            "fiberglass_thickness_mm" => 3.5,
            "shaft_thickness_mm" => 4,
            "shaft_length_mm" => 380,
            "shaft_diameter_mm" => 102,
            "height_base_to_cleat_mm" => 1400,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 350,
            "hole_depth_mm" => 900,
            "emissions_co2_kg" => 1.05,
            "emissions_no_g" => 14,
            "emissions_so2_g" => 0.06,
            "emissions_styrene_g" => 157,
            "emissions_acetone_g" => 185,
            "rise_wind_load_test_kmh" => 306
        ],
        [
            "size_meters" => 8,
            "art_no" => "100800-S",
            "weight_kg" => 28,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 115,
            "fiberglass_thickness_mm" => 3.5,
            "shaft_thickness_mm" => 4,
            "shaft_length_mm" => 380,
            "shaft_diameter_mm" => 102,
            "height_base_to_cleat_mm" => 1400,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 350,
            "hole_depth_mm" => 900,
            "emissions_co2_kg" => 1.37,
            "emissions_no_g" => 18,
            "emissions_so2_g" => 0.08,
            "emissions_styrene_g" => 206,
            "emissions_acetone_g" => 242,
            "rise_wind_load_test_kmh" => 216
        ],
        [
            "size_meters" => 9,
            "art_no" => "100900-S",
            "weight_kg" => 30,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 115,
            "fiberglass_thickness_mm" => 3.5,
            "shaft_thickness_mm" => 4,
            "shaft_length_mm" => 380,
            "shaft_diameter_mm" => 102,
            "height_base_to_cleat_mm" => 1400,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 400,
            "hole_depth_mm" => 1000,
            "emissions_co2_kg" => 1.56,
            "emissions_no_g" => 21,
            "emissions_so2_g" => 0.09,
            "emissions_styrene_g" => 234,
            "emissions_acetone_g" => 276,
            "rise_wind_load_test_kmh" => 183.6
        ],
        [
            "size_meters" => 10,
            "art_no" => "101000-S",
            "weight_kg" => 41,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 135,
            "fiberglass_thickness_mm" => 4,
            "shaft_thickness_mm" => 5,
            "shaft_length_mm" => 480,
            "shaft_diameter_mm" => 121,
            "height_base_to_cleat_mm" => 1400,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 450,
            "hole_depth_mm" => 1200,
            "emissions_co2_kg" => 2.28,
            "emissions_no_g" => 30,
            "emissions_so2_g" => 0.13,
            "emissions_styrene_g" => 342,
            "emissions_acetone_g" => 402,
            "rise_wind_load_test_kmh" => 237.6
        ],
        [
            "size_meters" => 12,
            "art_no" => "101200-S",
            "weight_kg" => 44,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 135,
            "fiberglass_thickness_mm" => 4,
            "shaft_thickness_mm" => 5,
            "shaft_length_mm" => 480,
            "shaft_diameter_mm" => 121,
            "height_base_to_cleat_mm" => 1400,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 450,
            "hole_depth_mm" => 1200,
            "emissions_co2_kg" => 2.76,
            "emissions_no_g" => 37,
            "emissions_so2_g" => 0.16,
            "emissions_styrene_g" => 412,
            "emissions_acetone_g" => 485,
            "rise_wind_load_test_kmh" => 187.2
        ],
    ];
} elseif ($product === 'iss') {
    $titleKey = 'flagpoles_iss_exclusive';
    $images = [
        'assets/images/flagpoles/flaggstang-iss-exklusiv.jpg',
        'assets/images/flagpoles/flaggstang-iss-exklusiv-2.jpg',
        'assets/images/flagpoles/flaggstang-iss-exklusiv-zoom.jpg',
    ];
    $specs = [
        [
            "size_meters" => 6,
            "art_no" => "100620",
            "weight_kg" => 27,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 115,
            "fiberglass_thickness_mm" => 3.5,
            "shaft_thickness_mm" => 4,
            "shaft_length_mm" => 380,
            "shaft_diameter_mm" => 102,
            "height_base_to_iss_winch_mm" => 900,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 350,
            "hole_depth_mm" => 900,
            "emissions_co2_kg" => 1.05,
            "emissions_no_g" => 14,
            "emissions_so2_g" => 0.06,
            "emissions_styrene_g" => 157,
            "emissions_acetone_g" => 185,
            "rise_wind_load_test_kmh" => 306
        ],
        [
            "size_meters" => 8,
            "art_no" => "100820",
            "weight_kg" => 30,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 115,
            "fiberglass_thickness_mm" => 3.5,
            "shaft_thickness_mm" => 4,
            "shaft_length_mm" => 380,
            "shaft_diameter_mm" => 102,
            "height_base_to_iss_winch_mm" => 900,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 350,
            "hole_depth_mm" => 900,
            "emissions_co2_kg" => 1.37,
            "emissions_no_g" => 18,
            "emissions_so2_g" => 0.08,
            "emissions_styrene_g" => 206,
            "emissions_acetone_g" => 242,
            "rise_wind_load_test_kmh" => 216
        ],
        [
            "size_meters" => 9,
            "art_no" => "100920",
            "weight_kg" => 32,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 115,
            "fiberglass_thickness_mm" => 3.5,
            "shaft_thickness_mm" => 4,
            "shaft_length_mm" => 380,
            "shaft_diameter_mm" => 102,
            "height_base_to_iss_winch_mm" => 900,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 400,
            "hole_depth_mm" => 1000,
            "emissions_co2_kg" => 1.56,
            "emissions_no_g" => 21,
            "emissions_so2_g" => 0.09,
            "emissions_styrene_g" => 234,
            "emissions_acetone_g" => 276,
            "rise_wind_load_test_kmh" => 183.6
        ],
        [
            "size_meters" => 10,
            "art_no" => "101020",
            "weight_kg" => 43,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 135,
            "fiberglass_thickness_mm" => 4,
            "shaft_thickness_mm" => 5,
            "shaft_length_mm" => 480,
            "shaft_diameter_mm" => 121,
            "height_base_to_iss_winch_mm" => 900,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 450,
            "hole_depth_mm" => 1200,
            "emissions_co2_kg" => 2.28,
            "emissions_no_g" => 30,
            "emissions_so2_g" => 0.13,
            "emissions_styrene_g" => 342,
            "emissions_acetone_g" => 402,
            "rise_wind_load_test_kmh" => 237.6
        ],
        [
            "size_meters" => 12,
            "art_no" => "101220",
            "weight_kg" => 47,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 135,
            "fiberglass_thickness_mm" => 4,
            "shaft_thickness_mm" => 5,
            "shaft_length_mm" => 480,
            "shaft_diameter_mm" => 121,
            "height_base_to_iss_winch_mm" => 900,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 450,
            "hole_depth_mm" => 1200,
            "emissions_co2_kg" => 2.76,
            "emissions_no_g" => 37,
            "emissions_so2_g" => 0.16,
            "emissions_styrene_g" => 412,
            "emissions_acetone_g" => 485,
            "rise_wind_load_test_kmh" => 187.2
        ],
        [
            "size_meters" => 14,
            "art_no" => "101420",
            "weight_kg" => 101,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 175,
            "fiberglass_thickness_mm" => 5,
            "shaft_thickness_mm" => 5,
            "shaft_length_mm" => 720,
            "shaft_diameter_mm" => 160,
            "height_base_to_iss_winch_mm" => 900,
            "base_plate_cc_measurement_mm" => 228,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 1000,
            "hole_diameter_mm" => 750,
            "hole_depth_mm" => 1500,
            "emissions_co2_kg" => 5.51,
            "emissions_no_g" => 73,
            "emissions_so2_g" => 0.32,
            "emissions_styrene_g" => 825,
            "emissions_acetone_g" => 971,
            "rise_wind_load_test_kmh" => 208.8
        ],
        [
            "size_meters" => 16,
            "art_no" => "101620",
            "weight_kg" => 109,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 175,
            "fiberglass_thickness_mm" => 5,
            "shaft_thickness_mm" => 5,
            "shaft_length_mm" => 720,
            "shaft_diameter_mm" => 160,
            "height_base_to_iss_winch_mm" => 900,
            "base_plate_cc_measurement_mm" => 228,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 1000,
            "hole_diameter_mm" => 750,
            "hole_depth_mm" => 1800,
            "emissions_co2_kg" => 5.81,
            "emissions_no_g" => 77,
            "emissions_so2_g" => 0.34,
            "emissions_styrene_g" => 870,
            "emissions_acetone_g" => 1023,
            "rise_wind_load_test_kmh" => 194.4
        ],
        [
            "size_meters" => 18,
            "art_no" => "101820",
            "weight_kg" => 118,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 175,
            "fiberglass_thickness_mm" => 5,
            "shaft_thickness_mm" => 5,
            "shaft_length_mm" => 720,
            "shaft_diameter_mm" => 160,
            "height_base_to_iss_winch_mm" => 900,
            "base_plate_cc_measurement_mm" => 228,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 1000,
            "hole_diameter_mm" => 750,
            "hole_depth_mm" => 1800,
            "emissions_co2_kg" => 6.54,
            "emissions_no_g" => 87,
            "emissions_so2_g" => 0.38,
            "emissions_styrene_g" => 979,
            "emissions_acetone_g" => 1152,
            "rise_wind_load_test_kmh" => 180
        ]
    ];
} else {
    $titleKey = 'flagpoles_original';
    $images = [
        'assets/images/flagpoles/flaggstang-original-01.jpg',
        'assets/images/flagpoles/flaggstang-original-2.jpg',
        'assets/images/flagpoles/flaggstang-original-zoom.jpg',
    ];
    // technical specifications for original flagpoles
    $specs = [
        [
            "size_meters" => 6,
            "art_no" => "100600",
            "weight_kg" => 25,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 115,
            "fiberglass_thickness_mm" => 3.5,
            "shaft_thickness_mm" => 4,
            "shaft_length_mm" => 380,
            "shaft_diameter_mm" => 102,
            "height_base_to_cleat_mm" => 1400,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 350,
            "hole_depth_mm" => 900,
            "emissions_co2_kg" => 1.05,
            "emissions_no_g" => 14,
            "emissions_so2_g" => 0.06,
            "emissions_styrene_g" => 157,
            "emissions_acetone_g" => 185,
            "rise_wind_load_test_kmh" => 306
        ],
        [
            "size_meters" => 8,
            "art_no" => "100800",
            "weight_kg" => 28,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 115,
            "fiberglass_thickness_mm" => 3.5,
            "shaft_thickness_mm" => 4,
            "shaft_length_mm" => 380,
            "shaft_diameter_mm" => 102,
            "height_base_to_cleat_mm" => 1400,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 350,
            "hole_depth_mm" => 900,
            "emissions_co2_kg" => 1.37,
            "emissions_no_g" => 18,
            "emissions_so2_g" => 0.08,
            "emissions_styrene_g" => 206,
            "emissions_acetone_g" => 242,
            "rise_wind_load_test_kmh" => 216
        ],
        [
            "size_meters" => 9,
            "art_no" => "100900",
            "weight_kg" => 30,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 115,
            "fiberglass_thickness_mm" => 3.5,
            "shaft_thickness_mm" => 4,
            "shaft_length_mm" => 380,
            "shaft_diameter_mm" => 102,
            "height_base_to_cleat_mm" => 1400,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 400,
            "hole_depth_mm" => 1000,
            "emissions_co2_kg" => 1.56,
            "emissions_no_g" => 21,
            "emissions_so2_g" => 0.09,
            "emissions_styrene_g" => 234,
            "emissions_acetone_g" => 276,
            "rise_wind_load_test_kmh" => 183.6
        ],
        [
            "size_meters" => 10,
            "art_no" => "101000",
            "weight_kg" => 41,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 135,
            "fiberglass_thickness_mm" => 4,
            "shaft_thickness_mm" => 5,
            "shaft_length_mm" => 480,
            "shaft_diameter_mm" => 121,
            "height_base_to_cleat_mm" => 1400,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 450,
            "hole_depth_mm" => 1200,
            "emissions_co2_kg" => 2.28,
            "emissions_no_g" => 30,
            "emissions_so2_g" => 0.13,
            "emissions_styrene_g" => 342,
            "emissions_acetone_g" => 402,
            "rise_wind_load_test_kmh" => 237.6
        ],
        [
            "size_meters" => 12,
            "art_no" => "101200",
            "weight_kg" => 44,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 135,
            "fiberglass_thickness_mm" => 4,
            "shaft_thickness_mm" => 5,
            "shaft_length_mm" => 480,
            "shaft_diameter_mm" => 121,
            "height_base_to_cleat_mm" => 1400,
            "base_plate_cc_measurement_mm" => 166,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 560,
            "hole_diameter_mm" => 450,
            "hole_depth_mm" => 1200,
            "emissions_co2_kg" => 2.76,
            "emissions_no_g" => 37,
            "emissions_so2_g" => 0.16,
            "emissions_styrene_g" => 412,
            "emissions_acetone_g" => 485,
            "rise_wind_load_test_kmh" => 187.2
        ],
        [
            "size_meters" => 14,
            "art_no" => "101400",
            "weight_kg" => 98,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 175,
            "fiberglass_thickness_mm" => 5,
            "shaft_thickness_mm" => 5,
            "shaft_length_mm" => 720,
            "shaft_diameter_mm" => 160,
            "height_base_to_cleat_mm" => 1400,
            "base_plate_cc_measurement_mm" => 228,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 1000,
            "hole_diameter_mm" => 750,
            "hole_depth_mm" => 1500,
            "emissions_co2_kg" => 5.51,
            "emissions_no_g" => 73,
            "emissions_so2_g" => 0.32,
            "emissions_styrene_g" => 825,
            "emissions_acetone_g" => 971,
            "rise_wind_load_test_kmh" => 208.8
        ],
        [
            "size_meters" => 16,
            "art_no" => "101600",
            "weight_kg" => 105,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 175,
            "fiberglass_thickness_mm" => 5,
            "shaft_thickness_mm" => 5,
            "shaft_length_mm" => 720,
            "shaft_diameter_mm" => 160,
            "height_base_to_cleat_mm" => 1400,
            "base_plate_cc_measurement_mm" => 228,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 1000,
            "hole_diameter_mm" => 750,
            "hole_depth_mm" => 1800,
            "emissions_co2_kg" => 5.81,
            "emissions_no_g" => 77,
            "emissions_so2_g" => 0.34,
            "emissions_styrene_g" => 870,
            "emissions_acetone_g" => 1023,
            "rise_wind_load_test_kmh" => 194.4
        ],
        [
            "size_meters" => 18,
            "art_no" => "101800",
            "weight_kg" => 115,
            "top_diameter_mm" => 65,
            "bottom_diameter_mm" => 175,
            "fiberglass_thickness_mm" => 5,
            "shaft_thickness_mm" => 5,
            "shaft_length_mm" => 720,
            "shaft_diameter_mm" => 160,
            "height_base_to_cleat_mm" => 1400,
            "base_plate_cc_measurement_mm" => 228,
            "thread_rod_diameter_mm" => 20,
            "thread_rod_length_mm" => 1000,
            "hole_diameter_mm" => 750,
            "hole_depth_mm" => 1800,
            "emissions_co2_kg" => 6.54,
            "emissions_no_g" => 87,
            "emissions_so2_g" => 0.38,
            "emissions_styrene_g" => 979,
            "emissions_acetone_g" => 1152,
            "rise_wind_load_test_kmh" => 180
        ]
    ];
}
?>
<!DOCTYPE html>
<html lang="<?=$lang?>" dir="<?=$dir?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$t[$titleKey]?> - <?=$t['site_name']?></title>
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
            <a href="products-flagpoles.php?lang=<?=$lang?>"><?=$t['flagpoles']?></a> |
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
                <p class="product-intro"><?=$t['flagpole_intro']?></p>
                <h1><?=$t[$titleKey]?></h1>
                <p class="product-subtitle"><?=$t['art_no_see_tech']?></p>
                <p class="product-description"><?=$t['flagpole_desc']?></p>
                <button class="inquiry-btn"><?=$t['inquiry']?></button>

                <div class="product-includes">
                    <h3><?=$t['flagpole_includes_title']?></h3>
                    <ul>
                        <li><?=$t['flagpole_inc_1']?></li>
                        <li><?=$t['flagpole_inc_2']?></li>
                        <li><?=$t['flagpole_inc_3']?></li>
                        <li><?=$t['flagpole_inc_4']?></li>
                        <li><?=$t['flagpole_inc_5']?></li>
                        <li><?=$t['flagpole_inc_6']?></li>
                    </ul>
                </div>

                <div class="info-block">
                    <h3><?=$t['choosing_flagpole_length']?></h3>
                    <p><?=$t['choosing_flagpole_length_desc']?></p>
                </div>

                <div class="info-block">
                    <h3><?=$t['flagpole_installation']?></h3>
                    <p><?=$t['flagpole_installation_desc']?> <a href="#"><?=$t['read_more_install']?></a></p>
                </div>

                <div class="info-block">
                    <h3><?=$t['shipping']?></h3>
                    <p><?=$t['shipping_flagpole_desc']?></p>
                </div>
            </div>
        </div>

        <div class="toggle">
            <div class="toggleRows"><?=$t['technical_data']?><span class="icon-arrow-down"></span></div>
            <div class="hiddenRow">
                <?php if (isset($specs) && is_array($specs) && count($specs) > 0): ?>
                    <div class="smartTabs">
                        <?php foreach ($specs as $i => $s): ?>
                            <div class="tabContent<?php if ($i === 0) echo ' active'; ?>"><a href="#"><?= $s['size_meters'] ?>m</a></div>
                        <?php endforeach; ?>
                    </div>
                    <div id="smartTabContainer">
                        <?php foreach ($specs as $i => $s): ?>
                            <section style="display:<?= $i === 0 ? 'block' : 'none' ?>">
                                <table>
                                    <tbody>
                                        <?php foreach ($s as $key => $val): ?>
                                            <?php if ($key === 'size_meters') continue; ?>
                                            <tr>
                                                <td><?= ucwords(str_replace('_', ' ', $key)) ?></td>
                                                <td><?= $val ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </section>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p><?=$t['no_results']??'Technical data not available.'?></p>
                <?php endif; ?>
            </div>

            <div class="toggleRows"><?=$t['download']?><span class="icon-arrow-down"></span></div>
            <div class="hiddenRow">
                <table class="video download"><tbody><tr><td><span class="icon-file-pdf"></span></td><td><a href="#" target="_blank">Installation Manual 5-12 m</a></td></tr><tr><td><span class="icon-file-pdf"></span></td><td><a href="#" target="_blank">Installation Manual 14-18 m</a></td></tr><tr><td><span class="icon-file-pdf"></span></td><td><a href="#" target="_blank">Warranty and Care</a></td></tr><tr><td><span class="icon-file-pdf"></span></td><td><a href="#" target="_blank">Catalogue</a></td></tr><tr><td><span class="icon-file-pdf"></span></td><td><a href="#" target="_blank">Construction Declaration</a></td></tr><tr><td><span class="icon-file-pdf"></span></td><td><a href="#" target="_blank">Technical Drawing</a></td></tr><tr><td><span class="icon-file-dwg"></span></td><td><a href="#" target="_blank">DWG files</a></td></tr></tbody></table>
            </div>

            <div class="toggleRows"><?=$t['projects']?><span class="icon-arrow-down"></span></div>
            <div class="hiddenRow">
                <table class="video"><tbody><tr><td><img src="https://picsum.photos/100/100?random=31"></td><td><a href="#">Baghdad, Iraq</a></td></tr><tr><td><img src="https://picsum.photos/100/100?random=32"></td><td><a href="#">Erbil, Iraq</a></td></tr><tr><td><img src="https://picsum.photos/100/100?random=33"></td><td><a href="#">Basra, Iraq</a></td></tr><tr><td><img src="https://picsum.photos/100/100?random=34"></td><td><a href="#">Sulaymaniyah, Iraq</a></td></tr></tbody></table>
            </div>
        </div>
    </main>

    <?php include 'includes/newsletter.php'; ?>
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
