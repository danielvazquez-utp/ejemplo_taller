<div class="content-wrapper" style="min-height: 606px;">
    <section class="content">
        <div class="row">
        <?php
            if($clases!=false){
                foreach ($clases->result() as $clase){
                    ?>
                    
                    <section class="col-xs-12 col-md-4 col-lg-4">
                        <div class="small-box bg-success">
                            <div class="card card-success" >
                                <div class="card-header">
                                        <?= $clase->materia ?>
                                </div>
                                <div class="card-body">
                                    <div class="inner">
                                        <h3 class="text-center" style="color: #000000"><?= $clase->grado?>° <?=$clase->grupo?></h3>
                                    </div>
                                    
                                </div>
                                <div class="footer">
                                    <a href="<?=base_url('')?>" class="btn btn-success text-center" style="display:flex; aligne-items: center;">
                                    <i class="fas fa-qrcode"> </i>
                                    Generar código QR
                                </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php
                }
            }
        ?>
        </div>

    </section>
</div>