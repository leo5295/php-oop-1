<?php
class Movie
{
  // private $title;
  // private $year;
  // private $rating;
  // private $genres;

  public $title;
  public $year;
  public $rating;
  public $genres;


  public function __construct($title, $year, $rating, $genres)
  {
    $this->title = $title;
    $this->year = $year;
    $this->rating = $rating;
    $this->genres = $genres;
  }

  // public function getTitle()
  // {
  //   return $this->title;
  // }

  // public function getYear()
  // {
  //   return $this->year;
  // }

  // public function getRating()
  // {
  //   return $this->rating;
  // }

  // public function getGenres()
  // {
  //   return $this->genres;
  // }
  public function isSuitableForMinors($minimumAge)
  {
    return $this->rating <= $minimumAge;
  }
}

$movie1 = new Movie("The Shawshank Redemption", 1994, 9.3, array("Drama", "Crime"));
$movie2 = new Movie("The Godfather", 1972, 9.2, array("Crime", "Drama", "Thriller"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="./CSS/style.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <di class="col">
        <?php
        // echo "<h1>" . $movie1->getTitle() . "</h1>";
        // echo "<div>Year: " . $movie1->getYear() . "</div>";
        // echo "<div>Rating: " . $movie1->getRating() . "</div>";
        // implode converte array to string
        // echo "<div>Genres: " . implode(", ", $movie1->getGenres()) . "</div>";

        echo "<h1>" . $movie1->title . "</h1>";
        echo "<div>Year: " . $movie1->year . "</div>";
        echo "<div>Rating: " . $movie1->rating . "</div>";
        // implode converte array to string
        echo "<div>Genres: " . implode(", ", $movie1->genres) . "</div>";
        ?>
      </di>
      <di class="col">
        <?php
        // echo "<h1>" . $movie2->getTitle() . "</h1>";
        // echo "<div>Year: " . $movie2->getYear() . "</div>";
        // echo "<div>Rating: " . $movie2->getRating() . "</div>";
        // implode converte array to string
        // echo "<div>Genres: " . implode(", ", $movie2->getGenres()) . "</div>";

        echo "<h1>" . $movie2->title . "</h1>";
        echo "<div>Year: " . $movie2->year . "</div>";
        echo "<div>Rating: " . $movie2->rating . "</div>";
        // implode converte array to string
        echo "<div>Genres: " . implode(", ", $movie2->genres) . "</div>";
        ?>
      </di>
    </div>
  </div>
</body>

</html>