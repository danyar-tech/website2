<section class="newsletter">
    <h2><?=$t['subscribe']?></h2>
    <p><?=$t['subscribe_desc']?></p>

    <div class="checkbox-group">
        <div class="checkbox-item">
            <input type="checkbox" id="flagpoles" name="category">
            <label for="flagpoles"><?=$t['flagpoles']?></label>
        </div>
        <div class="checkbox-item">
            <input type="checkbox" id="lighting" name="category">
            <label for="lighting"><?=$t['lighting_columns']?></label>
        </div>
        <div class="checkbox-item">
            <input type="checkbox" id="furniture" name="category">
            <label for="furniture"><?=$t['street_furniture']?></label>
        </div>
    </div>

    <div class="email-input">
        <input type="email" placeholder="<?=$t['email_placeholder']?>">
    </div>

    <button class="submit-btn"><?=$t['submit']?></button>
</section>
