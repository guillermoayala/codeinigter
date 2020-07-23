<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Peliculas</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
</head>
<body>

<div class="container mt-5">
  
    <div class="row">
      
       <div class="col-lg-12">
       <h1>Lista de entregas</h1>
       <a href="<?php echo base_url('/index.php/Entregas/create') ?>" class="btn btn-primary mt-5">Nueva entrega</a>
            <div class="row mt-3">
                 <table class="table table-striped " id="entregas">
       <thead>
          <tr>
             <th class="fecha">Id</th>
             <th>Fecha de Entrega</th>
             <!-- <th>Hora</th> -->
             <th>Ingenio</th>
             <th>Equipo</th>
             <th>Peso TM</th>
             <th>Acciones</th>

          </tr>
       </thead>
       <tbody>
          <?php if($entregas): ?>
          <?php foreach($entregas as $entregas): 
          ?>
          <tr>
            <td><?php echo $entregas['IdEntrega']; ?></td>
             <td><?php echo $entregas['FechaEntrega']; ?></td>
             <td><?php echo $entregas['Ingenio']; ?></td>
             <td><?php echo $entregas['Equipo']; ?></td>
             <td><?php echo $entregas['PesoTM']; ?></td>
             <td>
              <a href="<?php echo base_url('index.php/Entregas/edit/'.$entregas['IdEntrega']);?>" class="btn btn-sm btn-success">Editar</a>
              <a href="<?php echo base_url('index.php/Entregas/delete/'.$entregas['IdEntrega']);?>" class="btn btn-sm btn-danger">Eliminar</a>
              </td>
             
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
       </tbody>
     </table>
                   </div>
                </div>
          
    </div>
   
  
  
</div>
 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>
</html>

 

 <script type="text/javascript">

var contenido = document.querySelector('#hora')



function Hora(){
   var entregas = [<?php echo '"'.implode('","', $entregas).'"' ?>];
   console.log(entregas);


for(var i=0;i<arrayJS.length;i++)
 {
   console.log(arrayJS);
 }
 

}



    async function getEntregas() {
    const response = await fetch('http://localhost:82/cn/index.php/Entregas/test')
    const data = await response.json();
    console.log(data);
    MostrarEnTabla(data)
    //tabla(data)    

  }
  async function MostrarEnTabla(data) {
    contenido.innerHTML = ''
    const { results } = data;
    console.log("MostrarEnTabla -> results", results)
 

  }
  async function Click() {
   
 fetch('index.php/Entregas/test')
 .then(response => response.json())
 .catch(error => console.error('Error:', error))
 .then(response => console.log('Success:', JSON.stringify(response)));
  }
  async function getEntregas() {
    const response = await fetch('../Entregas/test')
    const data = await response.json();
    console.log(data);
   
    //tabla(data)    

  }
  
 
  
 </script>
 
