<?php 
  class Ranking extends AbstractMovie{
    public function hotMethod(){
      // Get all the movie data
      $this->getAllMoviesRanking();
      // Use the movie data to render the main page
      $this->renderMainPage();
    }

    public function newMethod(){
      // Get all the movie data
      $this->getAllMoviesNewest();
      // Use the movie data to render the main page
      $this->renderMainPage();
    }
  }
?>