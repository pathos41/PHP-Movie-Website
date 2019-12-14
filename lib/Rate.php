<?php 
  class Rate extends AbstractMovie{
    public function scoreMethod(){
      session_start();
      // Get the data from AJAX call
      $id = $_POST["m_id"];
      $score = $_POST["score"];      

      if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
      }else{
        $username = "Guest";
      }

      // Add the score to database
      $this->conn->insertScore($id, $username, $score);

      // Get the total number of scores for a specific movie
      $score_num = $this->conn->getNumberOfScores($id);
      $num_of_scores = $score_num["COUNT(*)"];

      // Get the total score for a specific movie
      $all_scores = $this->conn->getAllScores($id);
      $total_score = 0;
      foreach ($all_scores as $score) {
        $total_score += $score["score"];
      }

      // Get the average score for a specific movie
      $average_score = $total_score / $num_of_scores;

      // Post the number of scores and the average score to database
      $this->conn->postScoreNumToDB($num_of_scores, $id);
      $this->conn->postScoreToDB($average_score, $id);
    }
  }
?>