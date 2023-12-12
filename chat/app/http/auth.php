<?php  
session_start();

if(isset($_POST['email']) &&
   isset($_POST['password'])){
   include '../db.conn.php';
   
   # get data from POST request and store them in var
   $password = $_POST['password'];
   $email = $_POST['email'];
   
   #simple form Validation
   if(empty($email)){
      # error message
      $em = "email is required";

      # redirect to 'index.php' and passing error message
      header("Location: ../../index.php?error=$em");
   }else if(empty($password)){
      # error message
      $em = "Password is required";

      # redirect to 'index.php' and passing error message
      header("Location: ../../index.php?error=$em");
   }else {
      $sql  = "SELECT * FROM 
               users WHERE email=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$email]);

      # if the email is exist
      if($stmt->rowCount() === 1){
        # fetching user data
        $user = $stmt->fetch();

        # if both email's are strictly equal
        if ($user['email'] === $email) {
           
           # verifying the encrypted password
          if ($password == $user['password']) {

            # successfully logged in
            # creating the SESSION
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['user_id'] = $user['user_id'];

            # redirect to 'home.php'
            header("Location: ../../home.php");

          }else {
            # error message
            $em = "Incorect email or password";
           
            # redirect to 'index.php' and passing error message
            header("Location: ../../index.php?error=$em  dddf");
          }
        }else {
          # error message
          $em = "Incorect email or password";
      
          # redirect to 'index.php' and passing error message
          header("Location: ../../index.php?error=$em fddd");
        }
      }
   }
}else {
  header("Location: ../../index.php");
  exit;
}