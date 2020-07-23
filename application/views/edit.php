<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Entrega</h2>
        </div>
       
    </div>
</div>

<?php var_dump($entregas) ?>
<form method="post" action="<?php echo base_url('Central/update/'.$entregas[0]['IdEntrega']);?>">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha:</strong>
                <input type="text" name="FechaEntregada" class="form-control" value="<?php echo $entregas[0]['FechaEntrega'] ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IdIngenio:</strong>
                <input type="text" name="IdIngenio" class="form-control" value="<?php echo $entregas[0]['IdIngenio'] ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IdEquipo:</strong>
                <input type="text" name="IdEquipo" class="form-control" value="<?php echo $entregas[0]['IdEquipo'] ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Peso TM:</strong>
                <input type="text" name="PesoTM" class="form-control" value="<?php echo $entregas[0]['PesoTM'] ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>