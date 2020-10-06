<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page->title()  ?></title>

    <?= css('assets/css/style.css') ?>
</head>
<body>

    <header>
        <a href="<?= $site->url() ?>" class="logo"><img src="<?=  $site->src() ?>" alt="image"></a>

        <nav class="menu">
            <?php foreach ($site->children()->listed() as $subpage): ?>
                <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
            <?php endforeach ?>
        </nav>
    </header>

    <h1><?= $page->title() ?></h1>