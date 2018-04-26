<section>
    <h2><?php $this->getPageTitle(); ?></h2>
</section>
<section>
    <?php foreach ($this->view->faq as $faq):?>
        <h2><?= $faq->question ?></h2>
        <h3><?= $faq->content ?></h3>
    <?php endforeach; ?>
</section>
