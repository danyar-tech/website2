<div class="menu-overlay">
    <button class="menu-close" onclick="closeMenu();">✕</button>
    <div class="menu-content">
        <div class="menu-search">
            <input type="text" id="menuSearchInput" placeholder="<?=$t['search_placeholder']?>" autocomplete="off">
            <div id="searchResults" class="search-results"></div>
        </div>

        <div class="menu-grid">
            <div class="menu-column">
                <div class="menu-section">
                    <h3><?=$t['flagpoles']?></h3>
                    <ul>
                        <li><a href="products-flagpoles.php?lang=<?=$lang?>"><?=$t['flagpoles']?></a></li>
                        <li><a href="products-flagpoles.php?lang=<?=$lang?>"><?=$t['flagpole_accessories']?></a></li>
                        <li><a href="products-flagpoles.php?lang=<?=$lang?>"><?=$t['flagpole_lighting']?></a></li>
                        <li><a href="products-flagpoles.php?lang=<?=$lang?>"><?=$t['flags_pennants']?></a></li>
                    </ul>
                </div>

                <div class="menu-section">
                    <h3><?=$t['lighting_columns']?></h3>
                    <ul>
                        <li><a href="products-lighting-columns.php?lang=<?=$lang?>"><?=$t['lighting_columns']?></a></li>
                    </ul>
                </div>

                <div class="menu-section">
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
            </div>

            <div class="menu-column">
                <div class="menu-section">
                    <h3><?=$t['signage']?></h3>
                    <ul>
                        <li><a href="products-signage.php?lang=<?=$lang?>"><?=$t['signage']?></a></li>
                    </ul>
                </div>

                <div class="menu-section">
                    <h3><?=$t['inspiration']?></h3>
                    <ul>
                        <li><a href="page-projects.php?lang=<?=$lang?>"><?=$t['projects']?></a></li>
                    </ul>
                </div>

                <div class="menu-section">
                    <h3><?=$t['about']?></h3>
                    <ul>
                        <li><a href="page-history.php?lang=<?=$lang?>"><?=$t['story']?></a></li>
                        <li><a href="page-sustainability.php?lang=<?=$lang?>"><?=$t['sustainability']?></a></li>
                        <li><a href="page-subcontracting.php?lang=<?=$lang?>"><?=$t['subcontracting']?></a></li>
                        <li><a href="page-careers.php?lang=<?=$lang?>"><?=$t['join_team']?></a></li>
                        <li><a href="page-environmental-policy.php?lang=<?=$lang?>"><?=$t['environmental_policy']?></a></li>
                        <li><a href="page-quality-policy.php?lang=<?=$lang?>"><?=$t['quality_policy']?></a></li>
                        <li><a href="page-contact.php?lang=<?=$lang?>"><?=$t['contact_us']?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
