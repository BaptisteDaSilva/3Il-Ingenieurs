<?php
use Rodez_3IL_Ingenieurs\Modeles\Langue;
?>
<script type="text/javascript">

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#drapeauView').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#drapeau").change(function() {
  readURL(this);
});
</script>

<div id="panel_adminLangue" class="panel-body panel-langue">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="post" action="/Administration/supprimerLangue/">
                <div class="drapeaux">                              
                <?php foreach ($langues as &$langue) { ?>
                    <div class="drapeau">
                        <img src="<?= DRAPEAU . $langue->getNomDrapeau() ?>" alt="<?= $langue->getNom() ?>" />
                        <p>
                            <input type="checkbox" name="aSupp[]" value="<?= $langue->getId() ?>"> <?= $langue->getNom() ?></p>
                    </div>
                <?php } ?>        
                </div>
                <div>
                    <input type="submit" name="submitLangue" value="Supprimer" class="btn mon-btn">
                </div>
            </form>
            <div class="panel-heading">
                <h3 class="panel-title">Ajouter :</h3>
            </div>
            <form method="post" action="/Administration/ajouterLangue/" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input id="nom" type="text" class="form-control" name="nom" placeholder="Nom de la langue">
                </div>
                <div class="form-group">
                    <label for="drapeau">Drapeau :</label>
                    <img id="drapeauView" src="<?= DRAPEAU . Langue::$DEFAUT_DRAPEAU ?>" alt="Default image" class="drapeauView"/>
                    <input id="drapeau" type="file" class="form-control" name="drapeau" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="propertie">FIchier properties :</label>
                    <input id="propertie" type="file" class="form-control" name="propertie" accept=".json">
                </div>
                <input type="submit" name="submit" value="Ajouter" class="btn mon-btn">
            </form>
        </div>
    </div>
</div>