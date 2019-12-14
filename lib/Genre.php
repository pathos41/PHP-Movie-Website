<?php 
  class Genre extends AbstractMovie{
    public function getMethod($cid){
      // Get movies by genre
      $this->getMoviesByGenre($cid);
      // Render the main page
      $this->renderMainGenre($cid);
    }
  }
?>