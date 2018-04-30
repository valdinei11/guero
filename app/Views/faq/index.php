<div class="container">
    <h1><?php $this->getPageTitle(); ?></h1>
</div>
<section>
    <div class="container">
        <?php foreach ($this->view->faq as $faq):?>
        <div>
            <div class="box-header">
                <h2 class="underline"><a href="/faq/<?= $faq->id ?>/show"><?= $faq->question ?></a></h2>
                <div class="float-btn">
                    <a class="btn btn-primary" href="faq/<?= $faq->id ?>/edit">Editar</a>
                    <a class="btn btn-danger" href="faq/<?= $faq->id ?>/delete">Apagar</a>
                </div>
            </div>
            <p class="txt-big"><?= $faq->content ?></h3>
        </div>
        <?php endforeach; ?>
    </div>
</section>
