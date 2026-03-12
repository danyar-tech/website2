<footer>
    <div class="footer-content">
        <div class="footer-column">
            <h3>PLACEHOLDER</h3>
            <p>Baghdad, Iraq</p>
            <div class="contact-info">
                <p><a href="mailto:info@PLACEHOLDER">info@PLACEHOLDER</a></p>
                <p><a href="tel:+9647700000000">+964 770-000-0000</a></p>
            </div>
            <div class="social-icons">
                <a href="#" class="social-icon">in</a>
                <a href="#" class="social-icon">f</a>
                <a href="#" class="social-icon">@</a>
            </div>
        </div>

        <div class="footer-column">
            <h3><?=$t['flagpoles']?></h3>
            <ul>
                <li><a href="products-flagpoles.php?lang=<?=$lang?>"><?=$t['flagpoles']?></a></li>
                <li><a href="products-flagpoles.php?lang=<?=$lang?>"><?=$t['flagpole_accessories']?></a></li>
                <li><a href="products-flagpoles.php?lang=<?=$lang?>"><?=$t['flagpole_lighting']?></a></li>
                <li><a href="products-flagpoles.php?lang=<?=$lang?>"><?=$t['flags_pennants']?></a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3><?=$t['lighting_columns']?></h3>
            <ul>
                <li><a href="products-lighting-columns.php?lang=<?=$lang?>"><?=$t['lighting_columns']?></a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3><?=$t['street_furniture']?></h3>
            <ul>
                <li><a href="page-bike-stands.php?lang=<?=$lang?>"><?=$t['bike_stands']?></a></li>
                <li><a href="page-bollards.php?lang=<?=$lang?>"><?=$t['bollards']?></a></li>
                <li><a href="page-wastebins.php?lang=<?=$lang?>"><?=$t['wastebins']?></a></li>
                <li><a href="page-ashtrays.php?lang=<?=$lang?>"><?=$t['ashtrays']?></a></li>
                <li><a href="page-street-furniture.php?lang=<?=$lang?>"><?=$t['street_furniture']?></a></li>
                <li><a href="products-planters.php?lang=<?=$lang?>"><?=$t['planters']?></a></li>
                <li><a href="page-sand-containers.php?lang=<?=$lang?>"><?=$t['sand_containers']?></a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3><?=$t['about']?></h3>
            <ul>
                <li><a href="page-history.php?lang=<?=$lang?>"><?=$t['our_history']?></a></li>
                <li><a href="page-sustainability.php?lang=<?=$lang?>"><?=$t['sustainability']?></a></li>
                <li><a href="page-subcontracting.php?lang=<?=$lang?>"><?=$t['subcontracting']?></a></li>
                <li><a href="page-careers.php?lang=<?=$lang?>"><?=$t['join_team']?></a></li>
                <li><a href="page-environmental-policy.php?lang=<?=$lang?>"><?=$t['environmental_policy']?></a></li>
                <li><a href="page-quality-policy.php?lang=<?=$lang?>"><?=$t['quality_policy']?></a></li>
                <li><a href="page-terms.php?lang=<?=$lang?>"><?=$t['terms']?></a></li>
                <li><a href="page-contact.php?lang=<?=$lang?>"><?=$t['contact_us']?></a></li>
            </ul>
        </div>
    </div>
</footer>

<script>
// Menu toggle
const menuIcon = document.getElementById('menuToggle');
const menuOverlay = document.querySelector('.menu-overlay');
const menuClose = document.querySelector('.menu-close');

function openMenu() {
    menuOverlay.classList.add('active');
    menuIcon.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeMenu() {
    menuOverlay.classList.remove('active');
    menuIcon.classList.remove('active');
    document.body.style.overflow = 'auto';
}

if (menuIcon) {
    menuIcon.addEventListener('click', function () {
        if (menuOverlay.classList.contains('active')) {
            closeMenu();
        } else {
            openMenu();
        }
    });
}

if (menuClose) {
    menuClose.addEventListener('click', function () {
        closeMenu();
    });
}

// Close menu when clicking outside
if (menuOverlay) {
    menuOverlay.addEventListener('click', function (e) {
        if (e.target === menuOverlay) {
            closeMenu();
        }
    });
}

// Newsletter form handling
const submitBtn = document.querySelector('.submit-btn');
if (submitBtn) {
    submitBtn.addEventListener('click', function (e) {
        e.preventDefault();
        const email = document.querySelector('.email-input input').value;
        const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

        if (!email) {
            alert(<?=json_encode($t['alert_email'])?>);
            return;
        }

        if (checkboxes.length === 0) {
            alert(<?=json_encode($t['alert_checkbox'])?>);
            return;
        }

        alert(<?=json_encode($t['alert_thanks'])?>);
    });
}

// Search functionality
const searchProducts = <?=json_encode([
    ['name_en' => 'Flagpoles Original', 'name_ar' => 'أعمدة الأعلام الأصلية', 'category_en' => 'Flagpoles', 'category_ar' => 'أعمدة الأعلام', 'url' => 'detail-flagpoles.php', 'artno' => '100600'],
    ['name_en' => 'Lighting Column 3-6M', 'name_ar' => 'عمود إنارة 3-6 متر', 'category_en' => 'Lighting Columns', 'category_ar' => 'أعمدة الإنارة', 'url' => 'detail-lighting-columns.php', 'artno' => '300350'],
    ['name_en' => 'Urban Planter', 'name_ar' => 'أحواض زراعة حضرية', 'category_en' => 'Planters', 'category_ar' => 'أحواض الزراعة', 'url' => 'detail-planters.php', 'artno' => 'PL-100'],
    ['name_en' => 'Signage Standard', 'name_ar' => 'اللافتات القياسية', 'category_en' => 'Signage', 'category_ar' => 'اللافتات', 'url' => 'detail-signage.php', 'artno' => 'SG-SP100'],
    ['name_en' => 'Flagpoles', 'name_ar' => 'أعمدة الأعلام', 'category_en' => 'Products', 'category_ar' => 'المنتجات', 'url' => 'products-flagpoles.php', 'artno' => ''],
    ['name_en' => 'Lighting Columns', 'name_ar' => 'أعمدة الإنارة', 'category_en' => 'Products', 'category_ar' => 'المنتجات', 'url' => 'products-lighting-columns.php', 'artno' => ''],
    ['name_en' => 'Planters', 'name_ar' => 'أحواض الزراعة', 'category_en' => 'Products', 'category_ar' => 'المنتجات', 'url' => 'products-planters.php', 'artno' => ''],
    ['name_en' => 'Signage', 'name_ar' => 'اللافتات', 'category_en' => 'Products', 'category_ar' => 'المنتجات', 'url' => 'products-signage.php', 'artno' => ''],
])?>;

const currentLang = <?=json_encode($lang)?>;
const noResultsText = <?=json_encode($t['no_results'])?>;

const searchInput = document.getElementById('menuSearchInput');
const searchResultsDiv = document.getElementById('searchResults');

if (searchInput && searchResultsDiv) {
    searchInput.addEventListener('input', function() {
        const query = this.value.trim().toLowerCase();
        if (query.length < 1) {
            searchResultsDiv.classList.remove('active');
            searchResultsDiv.innerHTML = '';
            return;
        }

        const results = searchProducts.filter(function(p) {
            return p.name_en.toLowerCase().indexOf(query) !== -1 ||
                   p.name_ar.indexOf(query) !== -1 ||
                   p.category_en.toLowerCase().indexOf(query) !== -1 ||
                   p.category_ar.indexOf(query) !== -1 ||
                   p.artno.toLowerCase().indexOf(query) !== -1;
        });

        if (results.length > 0) {
            searchResultsDiv.innerHTML = results.map(function(p) {
                var name = currentLang === 'ar' ? p.name_ar : p.name_en;
                var cat = currentLang === 'ar' ? p.category_ar : p.category_en;
                return '<a href="' + p.url + '?lang=' + currentLang + '" class="search-result-item">' +
                       '<div>' + name + '</div>' +
                       '<div class="result-category">' + cat + '</div>' +
                       '</a>';
            }).join('');
        } else {
            searchResultsDiv.innerHTML = '<div class="search-no-results">' + noResultsText + '</div>';
        }
        searchResultsDiv.classList.add('active');
    });
}
</script>
