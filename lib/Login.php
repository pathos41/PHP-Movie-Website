<?php 
  class Login extends AbstractMovie{
    public function processMethod(){
      session_start();
      // When username and password are posted
      if(isset($_POST["username"]) && isset($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $matchingPassword = $this->conn->getLoginPassword($username);

        // Check if the username is correct, and if it is, if the password is a match as well
        if($matchingPassword && $matchingPassword["password"] == $password){
          // Store the username in current session
          $_SESSION["username"] = $username;
          // Jump back to the main page
          header("Location: /movie");
        }else{
          $this->renderLoginPageWhenNotLoggedIn();
        }
      }else{
        // When there's nothing posted
        $this->renderLoginPageWhenNotLoggedIn();
      }
    }

    // Render the login page when user is not logged in
    public function renderLoginPageWhenNotLoggedIn(){
      $this->renderLoginPage();
    }

    // Log out logic
    public function logoutMethod(){
      session_start();
      // Destroy the session and the info stored inside
      session_destroy();
      // Head back to main page
      header('Location: /movie');
    }

    // Render the sign up page when user hasn't signed up yet
    public function signupMethod(){
      $signup_status = false;
      $this->renderSignupPage($signup_status);
    }

    // Render the sign up page when user already signed up
    public function signupToDBMethod(){
      session_start();
      $username = $_POST["username"];
      $password = $_POST["password"];
      // Transfer the username and password to store in database
      $this->conn->signupToDB($username, $password);
      // Rerender the sign up page showing successfully signed up
      $signup_status = true;
      $this->renderSignupPage($signup_status);
    }
  }
?>