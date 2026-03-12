<header style="display: flex; align-items: center; justify-content: space-between; padding: 15px 20px;">
    <a href="index.php?lang=<?=$lang?>" class="logo" style="text-decoration: none; white-space: nowrap;">
        <?=$t['site_name']?>
    </a>

    <div class="flags-container">
        <img src="assets/images/Flag_of_Saudi_Arabia.gif" alt="Saudi Arabia" class="flag-img">
        <img src="assets/images/Flag_of_the_United_Arab_Emirates.gif" alt="UAE" class="flag-img">
        <img src="assets/images/Flag_of_Bahrain.gif" alt="Bahrain" class="flag-img">
        <img src="assets/images/Flag_of_Oman.gif" alt="Oman" class="flag-img">
        <img src="assets/images/Flag_of_Kuwait.gif" alt="Kuwait" class="flag-img">
        <img src="assets/images/Flag_of_Iraq.gif" alt="Iraq" class="flag-img">
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