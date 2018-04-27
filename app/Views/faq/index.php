<section>
    <h1><?php $this->getPageTitle(); ?></h1>
    <div>
        <?php foreach ($this->view->faq as $faq):?>
            <a href="/faq/<?= $faq->id ?>/show"><h2><?= $faq->question ?></h2></a>
            <h3><?= $faq->content ?></h3>
        <?php endforeach; ?>
    </div>
</section>
