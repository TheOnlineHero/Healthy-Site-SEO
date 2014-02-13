<?php

final class HealthySiteSEOPage {
  public static function indexPage() {
    ?>
    <div class="wrap a-form">
      <h2>Healthy Site/SEO</h2>
      <?php
      if (isset($_GET["action"]) && $_GET["action"] == "updated") {
        echo("
          <div class='updated below-h2'>
            <p>Following changes just took place...</p>
            <p>jQuery Colorbox - Disabled red warning message that lets user know colorbox feature for all images is turned off.</p>
          </div>"
        );
      }
      ?>
      <div class="postbox " style="display: block; padding: 10px;">
        <p>Pretty simply form, just click Set Defaults.</p>
        <form action="" method="post">
            <p>
              <input type="hidden" name="plugin" value="healthy-site-seo"/>
              <input type="hidden" name="controller" value="HealthySiteSEO"/>
              <input type="submit" name="action" value="Set Defaults" />
            </p>
        </form>
        <p>You can disable the plugin after you complete the recommendations.</p>
      </div>
    </div>
    <?php
  }
}

?>