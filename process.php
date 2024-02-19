<?php 
include ('config.php');
 
if(isset($_POST['submit'])) {
    $fname =  $_POST['fname'];
    $mname =  $_POST['mname'];
    $lname =  $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql ="SELECT * from user where fname = '$fname'";
    $result = mysqli_query($con, $sql);
    $count_user = mysqli_num_rows($result);

    $sql ="SELECT * from user where username = '$username'";
    $result = mysqli_query($con, $sql);
    $count_username = mysqli_num_rows($result);
    
    if($count_username > 0) {
        echo '<script>
              window.location.href = "index.php";
              alert("Username already exists!!");
              </script>';
    } else {
        $sql = "INSERT INTO user (fname, mname, lname, username, password, role) 
                VALUES ('$fname', '$mname', '$lname', '$username', '$password', '$role')";
        if(mysqli_query($con, $sql)) {
            echo '<script>
                  window.location.href = "index.php";
                  alert("User created successfully!!");
                  </script>';
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}


    



  //  $login_query = "SELECT
  //  user.user_id,
    //user.fname,
  //  user.mname,
   // user.lname,
  //  user.username,
  //  user.password,
  //  user.role,
  //  user.date_created
    
//FROM
 //   user
//WHERE
   // user.username = '$username', AND
   // user.password = '$password', AND
  //  role = '$role';
    
//LIMIT 1";

//$login_query_run = mysqli_query($con, $login_query);

//if(isset($_REQUEST['username'])) {
//$username = stripslashes($_REQUEST['username']);
//$username = mysqli_real_escape_string ($con, $username);
//$username = stripslashes($_REQUEST['password']);
//$username = mysqli_real_escape_string ($con, $password);
//}
//$login_query_run = mysqli_query($con, $login_query);
//if ($login_query_run) {
 //  if (mysqli_num_rows($login_query_run) > 0) {
  //      $data = mysqli_fetch_assoc($login_query_run);
  //  }
//}

?>
