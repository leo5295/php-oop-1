<?php
class Movie {
  private $title;
  private $year;
  private $rating;

  public function __construct($title, $year, $rating) {
    $this->title = $title;
    $this->year = $year;
    $this->rating = $rating;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getYear() {
    return $this->year;
  }

  public function getRating() {
    return $this->rating;
  }
}

$movie1 = new Movie("The Shawshank Redemption", 1994, 9.3);
$movie2 = new Movie("The Godfather", 1972, 9.2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <di class="col">
        <?php
        echo "<h1>" . $movie1->getTitle() . "</h1>";
        echo "<div>Year: " . $movie1->getYear() . "</div>";
        echo "<div>Rating: " . $movie1->getRating() . "</div>";        
        ?>
      </di>
      <di class="col">
        <?php
        echo "<h1>" . $movie2->getTitle() . "</h1>";
        echo "<div>Year: " . $movie2->getYear() . "</div>";
        echo "<div>Rating: " . $movie2->getRating() . "</div>";
        ?>
      </di>
    </div>
  </div>
</body>
</html>