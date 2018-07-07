<div class="container">
    <h1><?php $this->getPageTitle(); ?></h1>
</div>
<section>
    <div class="container">
        <?php for ($i=0; $i<5; $i++):?>
        <div>
            <div class="box-header">
                <h2 class="underline"><a href="/faq/<?= $i ?>/show">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                <div class="float-btn">
                    <a class="btn btn-primary" href="faq/<?= $i ?>/edit">Editar</a>
                    <a class="btn btn-danger" href="faq/<?= $i ?>/delete">Apagar</a>
                </div>
            </div>
            <p class="txt-big">Pellentesque dictum facilisis odio, eu laoreet mauris ullamcorper nec. Donec a massa vel nisi eleifend viverra nec sed enim. Suspendisse non erat vitae nisl aliquam pulvinar ut non risus. Morbi pulvinar, ligula id interdum iaculis, lacus metus condimentum diam, auctor eleifend dolor erat quis ex.</p>
        </div>
        <?php endfor; ?>
    </div>
</section>
