<?php 
ini_set('max_execution_time', '300');
$json = json_decode(file_get_contents("train_simple.json"));
$categ = array_keys((array)$json[0]);
?>
<!DOCTYPE html>
<html>
  <head>
      <!-- En-tête de la page -->
      <meta charset="utf-8" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link href="styles.css" rel="stylesheet">
      <script src="script.js" ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Underdogs - Machine Learning</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-Underdogs-v1.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo">
                <img src="assets/images/logo.png" alt="">
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li class="scroll-to-section"><a href="maquette.php">All info</a></li>
                <li class="scroll-to-section"><div class="border-first-button"><a href="index.php">Retour</a></div></li> 
              </ul>        
              <a class='menu-trigger'>
                  <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <body class="large-screen">
        <div class="wrap">
          <div class="table-wrapper">
            <table class="table-responsive card-list-table">
              <thead>
                <tr>
                  <?php
                    for ($i = 0; $i < sizeof($categ); $i++){ ?>
                      <th> <?php echo $categ[$i] ?></th>
                    <?php }
                  ?>
                </tr>
              </thead>
              <tbody>
                <?php
                    for ($y = 0; $y < sizeof($json); $y++){ ?>
                      <tr>
                        <?php
                          for ($i = 0; $i < sizeof($categ); $i++){ ?>
                            <td data-title="Column #<?php echo $i ?>"><?php echo array_column($json, $categ[$i])[$y] ?></td>
                          <?php }
                        ?>
                      </tr>
                    <?php }
                  ?>
              </tbody>
            </table>
          </div>
        </div>
      </body>
</html>