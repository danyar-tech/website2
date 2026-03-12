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
            <h3><?=$t['planters']?></h3>
            <ul>
                <li><a href="products-planters.php?lang=<?=$lang?>"><?=$t['planters']?></a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3><?=$t['about']?></h3>
            <ul>
                <li><a href="page-history.php?lang=<?=$lang?>"><?=$t['our_history']?></a></li>
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

// Flag tooltips (mobile click toggle)
document.querySelectorAll('.flag-wrapper').forEach(function(wrapper) {
    wrapper.addEventListener('click', function(e) {
        var isTouch = !window.matchMedia('(hover: hover)').matches;
        if (isTouch) {
            e.stopPropagation();
            var wasActive = this.classList.contains('active');
            document.querySelectorAll('.flag-wrapper.active').forEach(function(w) {
                w.classList.remove('active');
            });
            if (!wasActive) {
                this.classList.add('active');
            }
        }
    });
});
document.addEventListener('click', function() {
    document.querySelectorAll('.flag-wrapper.active').forEach(function(w) {
        w.classList.remove('active');
    });
});

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
