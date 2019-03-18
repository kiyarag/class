<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>:: Registration ::</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style type="text/css">.table td, .table th{ font-size:14px; }</style>
  </head>
  <body class="py-3">
    <div class="container">
        <form method="POST" value="" action="index.php">
            <div class="form-group"><label>Full Name</label><input type="text" class="form-control" name="name"></div>
            <div class="form-group"><label>Address</label><input type="text" class="form-control" name="address"></div>
            <div class="form-group"><label>Number</label><input type="text" class="form-control" name="number"></div>
            <input type="submit" name="submit" value="submit">
        </form>

    <table class="table dark-table">
        <thead>
            <th>S.N</th>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Number</th>
            <th></th>
        </thead>
        <tbody>
            <?php
            include("connection.php");
            $sql="select * from costumer_detail";
            $query=mysqli_query($sql);
            while($row=mysqli_fetch_assoc($query, $sql)){
            ?>
            <tr>
                <td></td>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['number']; ?></td>
                <td><a href="" class="btn btn-sm btn-success">Edit</a>/<a href="" class="btn btn-sm btn-success">update</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>