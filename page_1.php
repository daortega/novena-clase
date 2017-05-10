<?php include('header.php');?>
<?php $aqui = "En este lugar corresponde algo con p5.js"?>
<div class="inner cover">
<h2 class="cover-heading">Más sobre el tema</h2>
<p class="lead"><?php echo $aqui;?></p>

<header>
<div id="top">
</div>
</header>

    <section>
      <?php
    // basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
    $csv = array_map('str_getcsv', file('data/pokemon.csv'));
    // pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    // ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
    // lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
    for($a = 0; $a < $total = count($csv); $a++){?>

        <hr>
          <h3><?php echo($a+1);?>  <?php echo $csv[$a]['name'];?></h3>
          <h4> <?php echo $csv[$a]['name_jp'];?> </h4>
          <h5>Especie: <?php echo $csv[$a]['species'];?> </h5>
          <!--<h6>Agreguen aquí la información en Data</h6>-->
          <h5> Generación:<?php echo $csv[$a]['generation_id'];?></h5>
    <?php };?>
      <hr>

</div>
<?php include('footer.php');?>
