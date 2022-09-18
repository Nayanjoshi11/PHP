<?php
  include('./db_config.php');
  $sql="select * from user";
  $result=$conn->query($sql);


  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="containter p-3">
      <h3>TODO appplication</h3>
    <form action ="save-todo.php" method="post">
      <input type="text" class="form-control" name="todo" id="" placeholder="wrtie text" >
      <button type="submit" class="btn btn-primary mt-2">Add todo</button>
</form>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
          while($row=$result->fetch_assoc()){?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><button class="btn btn-danger">Delete</button></td>
          </tr>
          <?php
          }
          ?>



      <th scope="row">1</th>
      <td>Mark</td>
      <td><button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td><button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>RABI</td>
      <td><button type="button" class="btn btn-danger">Delete</button></td>
    </tr>

  </tbody>

  <?php
    while($row = $result->fetch_assoc()){?>
    <tr>
      <td scope= "row"><?php echo $row['id']?></th>
      <td><?php echo $row['name']?></td>
      <td><button class="btn btn-danger">Delete</button></td>
    </tr>
    <?php
    }?>

</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

    <!--loop code starts<?php
    $testArray = array('1','2','3');
    foreach($testArray as $value){?>
      <li><?php echo $value?></li>
    
    <?php }?>-->
