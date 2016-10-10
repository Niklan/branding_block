<?php if ($logo): ?>
  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"
     rel="home" id="logo">
    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
  </a>
<?php endif; ?>

<?php if ($site_name || $site_slogan): ?>
  <div id="name-and-slogan">
    <?php if ($site_name): ?>
      <h2 id="site-name">
        <a href="<?php print $front_page; ?>"
           title="<?php print t('Home'); ?>"
           rel="home"><span><?php print $site_name; ?></span></a>
      </h2>
    <?php endif; ?>

    <?php if ($site_slogan): ?>
      <div id="site-slogan"><?php print $site_slogan; ?></div>
    <?php endif; ?>
  </div>
<?php endif; ?>

