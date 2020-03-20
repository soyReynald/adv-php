<?php
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_password'] = "";
$db['db_name'] = "login";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
?>
<?php
  session_start();
  // Get the values from form in login.php file
  $username = $_POST['user'];
  $password = $_POST['pass'];

  // To prevent mysql injection
  $username = mysqli_real_escape_string($connection, $username);
  $password = mysqli_real_escape_string($connection, $password);

  // Query the database to get result from selections
  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

  // connecting to server and selecting user by querying
  $select_user_query = mysqli_query($connection, $query);
  if(!$select_user_query){
    die("QUERY FAILED" . mysqli_error($connection));
  }
  $row = mysqli_fetch_array($select_user_query);
  if($row['username' == $username && $row['password'] == $password]){
    $_SESSION['USER'] = $row['username'];
    header("Location: welcome.php");
    // echo "Login success!! Welcome " . $row['username'];
  } else {
    echo "Failed to login!";
  }

?>