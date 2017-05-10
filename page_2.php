<?php include('header.php');?>
<?php $aqui = "En este lugar corresponde algo con PHP"?>
<div class="inner cover">
<h2 class="cover-heading"> Totales</h2>
<p class="lead"><?php echo $aqui;?></p>

<header>
<div id="top">
</div>
</header>

    <section>
      <?php
      $json = file_get_contents('http://pokeapi.co/api/v2/');
      $data = json_decode($json,true);?>
      <ol>
      <?php $fire = 0; $electro = 0;?>
      <?php for ($n = 0; $n < $all; $n++) {?>
      <?php if (substr_count($json_data['pokemon'][$n]['species'],'fire')) {?>
      <?php $fire++ ;?>
      <?php } ;?>
      <?php } ;?>
      </ol>

      <hr>
      <p>En este listado hay un registro de <?php echo ($data['pokemon']['count']);?> pokemon.</p>
      <p>De ellos, <?php echo $fire;?> morir.</p>

      <hr>
    </section>
  </div>




</div>
<?php include('footer.php');?>
