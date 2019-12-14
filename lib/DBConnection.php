<?php 
  class DBConnection{
    protected $conn;

    // Connect to the movie database
    public function getConnInstant(){
      if(!isset($this->conn)){
        $this->conn = new PDO('mysql:host=localhost;dbname=movie', 'root', '');
      }

      return $this->conn;
    }

    // Get all the movies in the descending order of premiere date
    public function getAllMovies(){
      $stmt = $this->getConnInstant()->query("SELECT * FROM movies ORDER BY name ASC");
      // Returns an associative array
      $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $movies;
    }

    public function getNewestMovies(){
      $stmt = $this->getConnInstant()->query("SELECT * FROM movies ORDER BY date DESC");
      // Returns an associative array
      $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $movies;
    }

    // Get the total number of movies
    public function getNumberOfMovies(){
      $stmt = $this->getConnInstant()->query("SELECT COUNT(*) FROM movies");
      // Returns an associative array
      $num = $stmt->fetch(PDO::FETCH_ASSOC);

      return $num;
    }

    // Get the total number of scores
    public function getNumberOfScores($id){
      $stmt = $this->getConnInstant()->prepare("SELECT COUNT(*) FROM score WHERE m_id = :m_id");
      $stmt->execute([":m_id" => $id]);
      // Returns an associative array
      $num = $stmt->fetch(PDO::FETCH_ASSOC);

      return $num;
    }

    // Get all the scores for a single movie
    public function getAllScores($id){
      $stmt = $this->getConnInstant()->prepare("SELECT score FROM score WHERE m_id = :m_id");
      $stmt->execute([":m_id" => $id]);
      // Returns an associative array
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $result;
    }

    // Post the average score to movies database
    public function postScoreToDB($average_score, $id){
      $stmt = $this->getConnInstant()->prepare("UPDATE movies SET average_score = :average_score WHERE id = :id");
      $result = $stmt->execute([
        ":average_score" => $average_score,
        ":id" => $id
      ]);

      return $result;
    }

    // Post the number of scores to movies database
    public function postScoreNumToDB($score_num, $id){
      $stmt = $this->getConnInstant()->prepare("UPDATE movies SET score_num = :score_num WHERE id = :id");
      $result = $stmt->execute([
        ":score_num" => $score_num,
        ":id" => $id
      ]);

      return $result;
    }

    // Get all the movies in the descending order of total score
    public function getAllRankedMovies(){
      $stmt = $this->getConnInstant()->query("SELECT * FROM movies ORDER BY average_score DESC");
      // Returns an associative array
      $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $movies;
    }

    // Get all the movie genres
    public function getCategories(){
      $stmt = $this->getConnInstant()->query("SELECT * FROM categories");
      // Returns an associative array
      $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $categories;
    }

    // Get the movie with a specific id
    public function getMovieById($id){
      $stmt = $this->getConnInstant()->prepare("SELECT * FROM movies WHERE id = :id");
      $stmt->execute([":id" => $id]);
      // No iteration needed, use fetch instead of fetchAll
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      return $result;
    }

    // Get the movies with a specific name
    public function getMovieByName($name){
      $stmt = $this->getConnInstant()->prepare("SELECT * FROM movies WHERE name LIKE :name ORDER BY average_score DESC");
      $stmt->execute([":name" => "%".$name."%"]);
      // Returns an associative array
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $result;
    }

    // Get the movies with a specific genre
    public function getMovieByCategoryId($cid){
      $stmt = $this->getConnInstant()->prepare("SELECT * FROM movies WHERE genre LIKE :cid ORDER BY average_score DESC");
      // Find movies with genre cid
      $stmt->execute([":cid" => "%".$cid."%"]);
      // Returns an associative array
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $result;
    }

    // Get the comments of a specific movie
    public function getCommentById($id){
      $stmt = $this->getConnInstant()->prepare("SELECT * FROM comments WHERE m_id = :id ORDER BY date DESC");
      $stmt->execute([":id" => $id]);
      // Use fetchAll for iteration
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $result;
    }

    // Add the comments to database
    public function insertComment($mid, $username, $content){
      date_default_timezone_set("EST");
      $stmt = $this->getConnInstant()->prepare("INSERT INTO comments(m_id, username, date, content) VALUES (:mid, :username, :date, :content)");
      $result = $stmt->execute([
        ':mid' => $mid,
        ':username' => $username,
        ':date' => date("Y-m-d H-i-s"),
        ':content' => $content
      ]);

      return $result;
    }

    public function insertScore($mid, $username, $score){
      $stmt = $this->getConnInstant()->prepare("INSERT INTO score(m_id, username, score) VALUES (:mid, :username, :score)");
      $result = $stmt->execute([
        ':mid' => $mid,
        ':username' => $username,
        ':score' => $score
      ]);

      return $result;
    }

    // Get the password using the given username
    public function getLoginPassword($username){
      $stmt = $this->getConnInstant()->prepare("SELECT * FROM login WHERE username = :username");
      $stmt->execute([":username" => $username]);
      // Returns an associative array
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      return $result;
    }

    // Add the new username and password to database
    public function signupToDB($username, $password){
      $stmt = $this->getConnInstant()->prepare("INSERT INTO login(username, password) VALUES (:username, :password)");
      $result = $stmt->execute([
        ":username" => $username,
        ":password" => $password
      ]);

      return $result;
    }
  }

  // $db = new DBConnection();
  // echo "<pre>";
  // var_dump($db->getLoginPassword("testuser")["password"]);die;
  // echo "</pre>";
?>
