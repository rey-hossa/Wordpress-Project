<?php get_header(); ?>

<?php
    $immagine = get_field("immagine");
    $titolo = get_field("titolo");
    $descrizione = get_field("descrizione");

    $caratteristica1 = get_field("caratteristica1");
    $caratteristica2 = get_field("caratteristica2");
    $caratteristica3 = get_field("caratteristica3");


    $immagine_prodotto1 = get_field("immagine-prodotto1");
    $titolo_prodotto1 = get_field("titolo-prodotto1");
    $descrizione_prodotto1 = get_field("descrizione-prodotto1");

    $immagine_prodotto2 = get_field("immagine-prodotto2");
    $titolo_prodotto2 = get_field("titolo-prodotto2");
    $descrizione_prodotto2 = get_field("descrizione-prodotto2");

    $immagine_prodotto3 = get_field("immagine-prodotto3");
    $titolo_prodotto3 = get_field("titolo-prodotto3");
    $descrizione_prodotto3 = get_field("descrizione-prodotto3");

?>


<!-- ---------------- Header ---------------- -->

<div id="carouselExampleCaptions" class="carousel slide header" data-bs-ride="false">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="velina"></div>
      <img src="<?php echo $immagine; ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $titolo; ?></h5>
        <p><?php echo $descrizione; ?></p>
      </div>
    </div>
  </div>

</div>


<!-- ---------------- Caratteristiche ---------------- -->

<div class="container caratteristiche">
  <div class="row">
    <div class="col-4">
      <img src="<?php echo $caratteristica1; ?>" alt="">
    </div>
    <div class="col-4">
      <img src="<?php echo $caratteristica2; ?>" alt="">
    </div>
    <div class="col-4">
      <img src="<?php echo $caratteristica3; ?>" alt="">
    </div>
  </div>
</div>


<!-- ---------------- Prodotti ---------------- -->

<div class="container prodotti">

  <div class="row prodotto">
    <div class="col-sm-12 col-md-6">
      <img src="<?php echo $immagine_prodotto1; ?>" alt="">
    </div>
    <div class="col-sm-12 col-md-6 desc-prodotto">
      <h2><?php echo $titolo_prodotto1 ?></h2>
      <p><?php echo $descrizione_prodotto1 ?></p>
    </div>
  </div>

  <div class="row prodotto">
    <div class="col-sm-12 col-md-6 desc-prodotto">
      <h2><?php echo $titolo_prodotto2 ?></h2>
      <p><?php echo $descrizione_prodotto2 ?></p>
    </div>
    <div class="col-sm-12 col-md-6">
      <img src="<?php echo $immagine_prodotto2; ?>" alt="">
    </div>
  </div>

  <div class="row prodotto">
    <div class="col-sm-12 col-md-6">
      <img src="<?php echo $immagine_prodotto3; ?>" alt="">
    </div>
    <div class="col-sm-12 col-md-6 desc-prodotto">
      <h2><?php echo $titolo_prodotto3 ?></h2>
      <p><?php echo $descrizione_prodotto3 ?></p>
    </div>
  </div>

</div>


<?php get_footer(); ?>
