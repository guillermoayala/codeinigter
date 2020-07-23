

<!DOCTYPE html>
<html>
<head>
  <title>Agregar</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
 
</head>
<body>

 <div class="container">
    <br>
 
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
 
    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo base_url('/index.php/Central/store');?>" name="post_form" id="post_form" method="post" accept-charset="utf-8">
 
        
          <div class="form-group">
            <label for="FechaEntrega">Fecha de Entrega</label>
            <input class="form-control" type="datetime-local" value="2020-03-19T13:45:00" id="FechaEntrega" name="FechaEntrega">

          </div> 
 
          
          <div class="form-group">
            <label for="Id">Ingenio</label>
            <select class="form-control" name="IdIngenio" id="IdIngenio">
                 <?php foreach($ingenios as $i) : ?>
                      <option value="<?= $i['IdIngenio'] ?>"><?= $i['Nombre'] ?></option>
             <?php endforeach; ?>
           </select>        
          </div>

          <div class="form-group">
            <label for="Id">Equipo</label>
            <select class="form-control" name="IdEquipo" id="IdEquipo">
                 <?php foreach($equipos as $i) : ?>
                      <option value="<?= $i['IdEquipo'] ?>"><?= $i['Nombre'] ?></option>
             <?php endforeach; ?>
           </select>        
          </div>
          
          <div class="form-group">
            <label for="Id">Peso TM</label>
            <input type="text" name="PesoTM" class="form-control" id="PesoTM" placeholder="00.000" maxlength="6">
          </div>

         
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
          
        </form>
      </div>
 
    </div>
  
</div>

<script type="text/javascript">
function NumCheck(e, field)
{
key = e.keyCode ? e.keyCode : e.which
// backspace 
if (key == 8) return true
// 0-9 
if (key > 47 && key < 58) {
	if (field.value == "") return true
	regexp = /.[0-9]{2}$/
	return !(regexp.test(field.value))
} // . 
if (key == 46) {
	if (field.value == "") return false
	regexp = /^[0-9]+$/
	return regexp.test(field.value)
} // other key 
return false
}


function ValidateMoney(_id) {
    var amount = document.getElementById(_id).value;
    var patron = /^(\d+|\d+.\d{2})$/;
    if (!patron.test(amount)) {
        window.alert('cantidad ingresada incorrectamente');
        document.getElementById('amount').focus();
        return false;
    } else {
        return true;
    }
}
</script>

</body>
</html>