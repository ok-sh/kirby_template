<?php snippet('header') ?>

      <a href="<?=$page->image()->url()?>">
          <?=$page->image()->resize(640)?>
      </a>
      <p>
            <?= $page->text()?>
      </p>

<?php snippet('footer') ?>