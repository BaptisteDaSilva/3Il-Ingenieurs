<?php
require_once TEMPLATES . 'enTete.php';
require_once TEMPLATES . 'menu.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default bigPanel">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= self::get('Apprentissage', 'Titre') ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if (self::isAdminConnect()) { ?>
                            <form method="post" action="/Administration/modifierTexte/Apprentissage/Texte">
                                <div class="form-group">
                                    <textarea class='autoExpand' id="textareaNew" name="new" class="form-control" onchange="this.form.submit();"><?= self::get('Apprentissage', 'Texte') ?></textarea>
                                </div>
                            </form>
                            <?php } else { ?>
                            <div class="modif-texte">
                                <?= self::get('Apprentissage', 'Texte') ?>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<?php
require_once TEMPLATES . 'pied.php';
?>