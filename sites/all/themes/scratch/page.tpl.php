<div class="container">

  <div id="wrapper">



    <article class="center">
      <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php print render($messages); ?>
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

      <?php print render($page['content']); ?>
    </article>

    <?php if ($page['sidebar_left']): ?>
      <aside class="sidebar_left">
        <?php print render($page['sidebar_left']); ?>
      </aside>
    <?php endif; ?>

    <?php if ($page['sidebar_right']): ?>
      <aside class="sidebar_right">
        <?php print render($page['sidebar_right']); ?>
      </aside>
    <?php endif; ?>



  </div> <!-- end wrapper -->


  <footer class="footer">
    <?php if ($page['footer']): ?>
      <?php print render($page['footer']); ?>
    <?php endif; ?>
  </footer>

</div> <!-- end container -->
