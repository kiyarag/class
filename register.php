<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>:: Registration ::</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">.table td, .table th{ font-size:14px; }</style>
  </head>
  <?php
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $message = $_POST["message"];
    $gender = "";
    if (isset($_POST["rdo"])) {
      $gender = $_POST["rdo"];
    }
    $gender = "";
    if (isset($_POST["rdo"])) {
      $gender = $_POST["rdo"];
    }
    $term = "";
    if (isset($_POST["remember"])) {
      $term = $_POST["check1"];
      $term = $_POST["check2"];
      $term = $_POST["check3"];
      $term = $_POST["check4"];
    }

  ?>
  <body class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><h4>Register Info</h4>
          <div class="table-part">
            <table class="table table-dark table-bordered">
              <thead>
              <thead><tr><th>Full Name</th><th>Email Address</th><th>Phone No.</th><th>Address</th><th>Gender</th><th>Message</th><th>Check Term</th></tr></thead>
              <tbody><tr>
                <td><?php echo $fname ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $phone ?></td>
                <td><?php echo $address ?></td>
                <td><?php echo $gender ?></td>
                <td><?php echo $message ?></td>
                <td><?php echo $term ?></td>
              </tr></tbody>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
