<?php 
ini_set('max_execution_time', '300');
$json = json_decode(file_get_contents("train.json"));
$categ = array_keys((array)$json[0]);
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>Maquette</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="styles.css" rel="stylesheet">
        <script src="script.js" ></script>
    </head>

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