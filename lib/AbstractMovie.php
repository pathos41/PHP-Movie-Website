<?php 
  abstract class AbstractMovie{
    protected $conn;
    protected $twig;
    protected $cid; 
    protected $all_movies;
    protected $movies;
    protected $number_of_movies;
    protected $new_category;
    protected $main_render_params;
    protected $single_render_params;

    // Default fallback method if the url is not correct
    public function indexMethod(){
      echo "This is a movie's index";
    }
    
    // Get the database connection and twig from input
    public function __construct($conn, $twig){
      $this->conn = $conn;
      $this->twig = $twig;
    }

    // Initialize general data
    public function init(){
      $categories = $this->conn->getCategories();
      $num = $this->conn->getNumberOfMovies();
      $new_category = ["All"];
      foreach($categories as $category){
        $new_category[] = $category["name"];
      }

      $this->all_movies = $this->conn->getAllMovies();
      $this->number_of_movies = $num["COUNT(*)"];
      $this->new_category = $new_category;
    }

    // Get the array for rendering the main page template
    public function getMainRenderParam($cid, $login_status, $username){
      $this->main_render_params = [
        'all_movies' => $this->all_movies,
        'movies' => $this->movies,
        'categories' => $this->new_category,
        'num' => $this->number_of_movies,
        'cid' => $cid,
        'login_status' => $login_status,
        'username' => $username
      ];
    }

    // Get the array for rendering the single page template
    public function getSingleRenderParam($login_status, $username){
      $this->single_render_params = [
        'movie' => $this->movie,
        'categories' => $this->new_category,
        'comments' => $this->comments,
        'login_status' => $login_status,
        'username' => $username
      ];
    }

    // Get all the movies
    public function getAllMovies(){
      session_start();
      $this->init();
      $this->movies = $this->all_movies;
    }

    // Get all the ranked movies
    public function getAllMoviesRanking(){
      session_start();
      $this->init();
      $this->movies = $this->conn->getAllRankedMovies();
    }

    public function getAllMoviesNewest(){
      session_start();
      $this->init();
      $this->movies = $this->conn->getNewestMovies();
    }

    // Get all the movies that satisfy the search criteria
    public function getAllMoviesSearch($name){
      session_start();
      $this->init();
      $this->movies = $this->conn->getMovieByName($name);
    }

    // Get all the movies of a selected genre
    public function getMoviesByGenre($cid){
      session_start();
      // Get all the movies if the cid is 0, which is the "All" tab
      $this->init();
      if($cid == 0){
        $this->movies = $this->conn->getAllMovies();
      }else{
        $this->movies = $this->conn->getMovieByCategoryId($cid);
      }
    }

    // Get a single movie and its comments using its id
    public function getSingleMovie($id){
      $this->init();
      $this->movie = $this->conn->getMovieById($id);
      $this->comments = $this->conn->getCommentById($id);
    }

    // Use twig template engine to render the main page
    public function mainPageTwigRender(){
      try{
        echo $this->twig->render('index.html.twig', $this->main_render_params);
      }catch(Exception $e){
        echo $e->getMessage();
      }
    }

    // Render the page according to the specific parameters
    public function mainPageRenderLogic($cid){
      if(isset($_SESSION["username"])){
        $this->getMainRenderParam($cid, true, $_SESSION["username"]);
        $this->mainPageTwigRender();
      }else{
        $this->getMainRenderParam($cid, false, "");
        $this->mainPageTwigRender();
      }
    }

    // Render the main page, set genre to be "All"
    public function renderMainPage(){
      $this->mainPageRenderLogic(0);
    }

    // Render the main page on selected genre
    public function renderMainGenre($cid){
      $this->mainPageRenderLogic($cid);
    }

    // Use twig template engine to render the single page
    public function singlePageTwigRender(){
      try{
        echo $this->twig->render('movie.html.twig', $this->single_render_params);
      }catch(Exception $e){
        echo $e->getMessage();
      }
    }

    // Render the single page according to the login status
    public function renderSinglePage(){
      if(isset($_SESSION["username"])){
        $this->getSingleRenderParam(true, $_SESSION["username"]);
        $this->singlePageTwigRender();
      }else{
        $this->getSingleRenderParam(false, "");
        $this->singlePageTwigRender();
      }
    }

    // Render the login page
    public function renderLoginPage(){
      try{
        echo $this->twig->render(
          'login.html.twig', [
          'login_status' => isset($_SESSION["username"])
        ]);
      }catch(Exception $e){
        echo $e->getMessage();
      }
    }

    // Render the sign up page
    public function renderSignupPage($signup_status){
      try{
        echo $this->twig->render(
          'signup.html.twig', [
          'signup_status' => $signup_status
        ]);
      }catch(Exception $e){
        echo $e->getMessage();
      }
    }
  }
?>