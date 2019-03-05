<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>:: Registration ::</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">.table td, .table th{ font-size:14px; }</style>
  </head>
  <body class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><h4>Loop Class</h4>
          <div class="table-part">
            <?php 
            for ($i=1; $i<10; $i++) {
              echo "<p>";
              echo $i;
              echo "</p>";
            }
            ?>

            <?php
              for ($x=1; $x < 5; $x++) {
                echo "<br>";
                echo $x;
              }
            ?>

            <?php
              /*for($x = A; $x < Z; $x++){
                echo "<p>";
                echo $x;
                echo "</p>";
              }*/
            ?>
          </div>
        </div>
      </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

