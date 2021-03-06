<?php
require_once TEMPLATES . 'enTete.php';
require_once TEMPLATES . 'menu.php';
?>
<div class="container">
    <?php if ($this->inscriptionOK) { ?>
    <div class="panel panel-default panel-success bigPanel">
        <div class="panel-heading">
            <h2 class="panel-title"><?= self::get('SInscrire', 'TitreOK') ?></h2>
        </div>
        <div class="panel-body">
            <?= self::get('SInscrire', 'TexteOK') ?>
        </div>
    </div>
    <?php } else { ?>
    <div class="panel panel-default panel-danger bigPanel">
        <div class="panel-heading">
            <h2 class="panel-title"><?= self::get('SInscrire', 'TitreKO') ?></h2>
        </div>
        <div class="panel-body">                    
            <?= self::get('SInscrire', 'TexteKO') ?>
        </div>
    </div>
    <?php } ?>
</div>
<?php
require_once TEMPLATES . 'pied.php';
?>