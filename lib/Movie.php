<?php 
  class Movie extends AbstractMovie{
    public function getMethod($id){
      session_start();
      // $_SESSION["movie_id"] = $id;
      // Get the single movie data by its id
      $this->getSingleMovie($id);
      // Render the single movie page
      $this->renderSinglePage();
    }
  }
?>