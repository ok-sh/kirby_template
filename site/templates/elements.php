<?php snippet('header') ?>
    <ul class="cards">
        <?php foreach ($page->children()->listed() as $element): ?>
        <li>
            <a href="<?= $element->url() ?>">
                <?= $element->image()->crop(480) ?>
                <h4>
                    <?= $element->title() ?>
                </h4>
            </a>
        </li>   
        <?php endforeach ?>
    </ul>

<?php snippet('footer') ?>