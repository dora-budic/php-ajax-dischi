<?php
  include 'dati.php';
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Dischi</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./master.css">
  </head>
  <body>
    <header>
      <div>
        <h1>Music albums</h1>
        <select name="genre">
          <option value="">All</option>
          <?php
            for ($i=0; $i < count($genres); $i++) { ?>
              <option value="<?= $genres[$i] ?>"><?= $genres[$i] ?></option>
          <?php } ?>
        </select>
        <select name="sort">
          <option value="sort">Sort by</option>
          <option value="min-year">Year < </option>
          <option value="max-year">Year > </option>
        </select>
      </div>
    </header>

    <main>
      <div id="albums">
        <?php
        for ($i=0; $i < count($albums); $i++) { ?>
          <div class="card-container">
            <div class="card">
              <div class="cover" style="background-image:url('<?= $albums[$i]['poster'] ?>')">
              </div>
              <div class="info">
                <div class="album-info">
                  <h3><?= $albums[$i]['title'] ?></h3>
                  <h4 class="m-5"><?= $albums[$i]['author'] ?></h4>
                  <span class="m-5"><?= $albums[$i]['year'] ?></span>
                  <span><?= $albums[$i]['genre'] ?></span>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </main>
  </body>
</html>
