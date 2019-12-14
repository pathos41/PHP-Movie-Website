<?php 
  class Search extends AbstractMovie{
    public function searchMethod($name){
      // Get the search results
      $this->getAllMoviesSearch($name);
      // Render the main page
      $this->renderMainPage();
    }
  }
?>