<html>
<head>
    <?php
    include_once "conn.php";
    include_once "plugin.php";
    ?>
</head>
<body>
<form id="form" method="post" action="insert.php" class="container">
    <label class="container"> enter your name</label>
    <input type="text" id="input_name" name="name" class="form-control"><br>
    <label class="container"> enter your email </label>
    <input type="email" id="input_email" name="email" class="form-control"><br>
    <input type="submit" class="btn btn-danger">
</form>
</body>
<table class="table">
    <thead>
    <th> name </th>
    <th> email</th>
    <th> edite </th>
    </thead>
    <tbody>
    <?php
    $sql ="SELECT * FROM information";
    $result =mysqli_query($conn,$sql);
  while ($r = $result->fetch_assoc()) {

      echo "<tr >";
//      echo "<td>". $r['id']."</td>";
      echo "<td >" . $r['name'] ." ".'<a class="btn btn-primary" href="updatename.php?id='.$r['id'].'" id = "edit_name'.$r['id'].'">edit name</a>'. "</td>";
      echo "<td>" . $r['email'] ." ".'<a  class ="btn btn-primary" href="updateemail.php?id='.$r['id'].'" id ="edit_email'.$r['id'].'"> edit email </a>'. "</td>";
      echo"<td>".'<a class="btn btn-primary" href="update.php?id='.$r['id'].'"> edit</a>'. "</td>";
      echo "</tr>";
  }
    $conn->close()
    ?>
    </tbody>
</table>
</html>