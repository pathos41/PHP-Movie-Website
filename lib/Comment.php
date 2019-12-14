<?php 
  class Comment extends AbstractMovie{
    public function submitMethod(){
      session_start();
      $content = $_POST["content"];
      $id = $_POST["mid"];

      if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
      }else{
        $username = "Guest";
      }

      // Add the comment to database
      $this->conn->insertComment($id, $username, $content);
    }
  }
?>