<?php
$insert = false;
if (isset($_POST['name'])) {

  //SET CONNECTION VARIABLE 
  $server = 'localhost';
  $username = "root";
  $password = "";
  //CREATE CONNECTION WITH THE DATABASE
  $con = mysqli_connect($server, $username, $password);

  //CHECK IF CONNECTION SUCCESS OR NOT
  if (!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
  }
  // echo "connected successful to the database";
  //POST VARIABLE
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $age  = $_POST['age'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $sql = "INSERT INTO `appointment`.`appoint` ( `name`, `address`, `phone`, `age`, `email`, `gender`, `datetime`) VALUES ( '$name', '$address', '$phone', '$age', '$email', '$gender', current_timestamp());";
  // echo $sql;

  //EXECUTED THE QUERY
  if ($con->query($sql) == true) {
    // echo "Successfully inserted data";
    $insert = true;
  } else {
    echo "ERROR :$sql <br> $con->error";
  };

  //CLOSED THE SERVER
  $con->close();
}
?>

<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      width: 300px;
      padding: 16px;
      background-color: white;
      border: 1px solid black;
      margin: 0 auto;
      /* margin-top: 100px; */
      border-radius: 5px;
    }

    h2 {
      text-align: center;
    }

    input[type=text],
    input[type=email],
    input[type=number],
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    h3 {
      color: green;
      text-align: center;
    }
  </style>
</head>

<body>

  <h2>Appointment Form</h2>

  <div class="container">
    <form action="firstProject.php" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>

      <label for="address">Address</label>
      <input type="text" id="address" name="address" required>

      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phone" required>

      <label for="age">Age</label>
      <input type="number" id="age" name="age" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="gender">Gender</label>
      <select id="gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>

      <input type="submit" value="Submit">
    </form>

    <!-- FOR AFTER SUBMITTING GIVING THE MESSAGE  -->
    <?php
    if ($insert == true) {
      echo "<h3 id='message'>You have Successfully Submitted the form</h3>";
    }
    ?>
  </div>

  <script>
    setTimeout(function() {
      document.getElementById('message').style.display = 'none';
    }, 2000);
  </script>

</body>

</html>