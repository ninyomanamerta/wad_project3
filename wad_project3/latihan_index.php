<?php
    $conn = mysqli_connect("127.0.0.1", "root", " ", "wad_project5", "3306");

    $result = mysqli_query($conn, "SELECT * FROM students");
    //var_dump($result)
    $data = mysqli_fetch_object($result);
    //var_dump($data->name); //hanya untuk fetch object

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>wad_project3</title>
  </head>
  <body>
    <h1>Ini adalah halaman index</h1>


    <table class="table" >
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">ALAMAT</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $data -> id ?></th>
      <td><?php echo $data -> nim ?></td>
      <td><?php echo $data -> name ?></td>
      <td><?php echo $data -> addres ?></td>
    </tr>
    <?php while ($data = mysqli_fetch_object($result)) { ?>
    <tr>
      <th scope="row"><?php echo $data -> id ?></th>
      <td><?php echo $data -> nim ?></td>
      <td><?php echo $data -> name ?></td>
      <td><?php echo $data -> addres ?></td>
    </tr>
    <?php }?>
    
    </br></br>

    

  </tbody>
</table>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>