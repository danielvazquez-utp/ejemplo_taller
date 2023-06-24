<div class="content-wrapper">
    <?php
      if($clases!=false){
        foreach ($clases->result() as $clase){
            ?>
            <div class="card card-success" style="width: 15rem; padding: 10px;">
                <div class="card-header">
                        <?= $clase->materia ?>
                </div>
                <div class="card-body">
                    <h3 class="text-center"><?= $clase->grado?>° <?=$clase->grupo?></h3>
                </div>
                <div class="footer">
                    <a href="<?=base_url('')?>" class="btn btn-success text-center" style="display:flex; aligne-items: center;">
                    <i class="fas fa-qrcode"> </i>
                    Generar código QR
                </a>
                </div>
            </div>
            <?php
        }
      }
    ?>
</div>