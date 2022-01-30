<!DOCTYPE html>
<html lang="en" style=>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body style="background-image: url(https://i.redd.it/7aadu9ocfvx51.jpg);">
    <center>
        <h1 style="color:aquamarine;">CAPTURA DE NOTAS</h1>
    </center>
<center>
<?php
if(isset($_GET['btncalcular'])){
    $E1=$_GET['E1'];
    $E2=$_GET['E2'];
    $E3=$_GET['E3'];
    $E4=$_GET['E4'];
    $E5=$_GET['E5'];
    $E1G=$_GET['E1']*0.20;
    $E2G=$_GET['E2']*0.20;
    $E3G=$_GET['E3']*0.20;
    $E4G=$_GET['E4']*0.20;
    $E5G=$_GET['E5']*0.20;
    $ET=$E1G+$E2G+$E3G+$E4G+$E5G;
}

?>
<div class="container">
  <div class="row">
    <div class="col">
     
    </div>
    <div class="col-8">
    <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">Evaluacion</th>
            <th scope="col">Nota</th>
            <th scope="col">Porcentaje</th>
            <th scope="col">Puntos Ganados</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">E1</th>
            <td><?php echo "<div>$E1</div>";?></td>
            <td>20%</td>
            <td><?php echo "<div>$E1G</div>";?></td>
          </tr>
          <tr>
            <th scope="row">E2</th>
            <td><?php echo "<div>$E2</div>";?></td>
            <td>20%</td>
            <td><?php echo "<div>$E2G</div>";?></td>
          </tr>
          <tr>
            <th scope="row">E3</th>
            <td><?php echo "<div>$E3</div>";?></td>
            <td>20%</td>
            <td><?php echo "<div>$E3G</div>";?></td>
          </tr>
          <tr>
            <th scope="row">E4</th>
            <td><?php echo "<div>$E4</div>";?></td>
            <td>20%</td>
            <td><?php echo "<div>$E4G</div>";?></td>
          </tr>
          <tr>
            <th scope="row">E5</th>
            <td><?php echo "<div>$E5</div>";?></td>
            <td>20%</td>
            <td><?php echo "<div>$E5G</div>";?></td>
            
          </tr>
          <tr>
            <th scope="row" colspan="3">NOTA FINAL</th>
            <td><?php echo"<div>$ET</div>";?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col">
    
    </div>
  </div>
</div>
    
</center>

