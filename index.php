<?php 
  require_once './vendor/autoload.php';
  require_once './lib/DBConnection.php';
  require_once './lib/AbstractMovie.php';

  use Twig\Extra\CssInliner\CssInlinerExtension;

  $db_conn = new DBConnection();
  $loader = new \Twig\Loader\FilesystemLoader('./templates');
  $twig = new \Twig\Environment($loader
  //   , [
  //     'cache' => './compilation_cache',
  // ]
  );

  // Use twig inline css
  $twig->addExtension(new CssInlinerExtension());

  /**
   * Single entrance routing
   */
  // Check if there is a query string
  // $a = file_exists("./lib/movie.php");
  // var_dump($a);die;
  if(array_key_exists("url", $_GET)){
    $url = $_GET["url"];
    $p_array = explode("/", $url);
    
    // Check if the class file exists
    if(!file_exists("./lib/".$p_array[0].".php")){
      echo "Wrong route, Please enter the correct url!";
      exit;
    }

    // Require the class
    require_once("./lib/".$p_array[0].".php");
    // Create a new object
    $handle_obj = new $p_array[0]($db_conn, $twig);

    // Create different methods depending on the second parameter in the query string
    if(array_key_exists(1, $p_array)){
      $method = $p_array[1]."Method";
    }else{
      $method = "indexMethod";
    }

    // Call different methods depending on the third parameter in the query string
    if(array_key_exists(2, $p_array)){
      $handle_obj->$method($p_array[2]);
    }else{
      $handle_obj->$method();
    }
    exit();
  }

  /**
   * Main page generation
   */
  class MainPage extends AbstractMovie{}
  $mainPage = new MainPage($db_conn, $twig);
  // Get all movies data
  $mainPage->getAllMovies();
  // Render the main page
  $mainPage->renderMainPage();
?>
