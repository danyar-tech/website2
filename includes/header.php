<header style="display: flex; align-items: center; justify-content: space-between; padding: 15px 20px;">
    <a href="index.php?lang=<?=$lang?>" class="logo" style="text-decoration: none; white-space: nowrap;">
        <?=$t['site_name']?>
    </a>

    <div class="flags-container">
        <div class="flag-wrapper">
            <img src="assets/images/Flag_of_Saudi_Arabia.gif" alt="Saudi Arabia" class="flag-img">
            <div class="flag-tooltip">Riyadh Office<br>+966 11 000 0000</div>
        </div>
        <div class="flag-wrapper">
            <img src="assets/images/Flag_of_the_United_Arab_Emirates.gif" alt="UAE" class="flag-img">
            <div class="flag-tooltip">Dubai Office<br>+971 4 000 0000</div>
        </div>
        <div class="flag-wrapper">
            <img src="assets/images/Flag_of_Bahrain.gif" alt="Bahrain" class="flag-img">
            <div class="flag-tooltip">Manama Office<br>+973 1700 0000</div>
        </div>
        <div class="flag-wrapper">
            <img src="assets/images/Flag_of_Oman.gif" alt="Oman" class="flag-img">
            <div class="flag-tooltip">Muscat Office<br>+968 2400 0000</div>
        </div>
        <div class="flag-wrapper">
            <img src="assets/images/Flag_of_Kuwait.gif" alt="Kuwait" class="flag-img">
            <div class="flag-tooltip">Kuwait City Office<br>+965 2200 0000</div>
        </div>
        <div class="flag-wrapper">
            <img src="assets/images/Flag_of_Iraq.gif" alt="Iraq" class="flag-img">
            <div class="flag-tooltip">Baghdad Office<br>+964 770 000 0000</div>
        </div>
    </div>

    <div class="header-right" style="display: flex; align-items: center; gap: 15px; white-space: nowrap;">
        <a href="?lang=<?=$t['other_lang_code']?>" class="language" style="text-decoration:none; color:#000;">
            <?=$t['other_lang']?>
        </a>
        <div class="menu-icon" id="menuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>