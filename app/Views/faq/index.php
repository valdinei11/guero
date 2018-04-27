<section>
    <h1><?php $this->getPageTitle(); ?></h1>
    <div>
        <?php foreach ($this->view->faq as $faq):?>
            <div class="float-btn">
                <a class="btn btn-primary" href="faq/<?= $faq->id ?>/edit">Editar</a>
                <a class="btn btn-danger" href="faq/<?= $faq->id ?>/delete">Apagar</a>
            </div>
            <h2 class="underline"><a href="/faq/<?= $faq->id ?>/show"><?= $faq->question ?></a></h2>
            <h3><?= $faq->content ?></h3>
        <?php endforeach; ?>
    </div>
</section>
