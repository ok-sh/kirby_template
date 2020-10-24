<?php snippet('header') ?>
    <ul class="catering">
        <?php foreach ($page->children()->listed() as $element): ?>
        <li>
            <a href="<?= $element->url() ?>">
                <?= $element->image()->crop(480) ?>
                <?= $element->title() ?>
            </a>
        </li>   
        <?php endforeach ?>
    </ul>

<?php snippet('footer') ?>