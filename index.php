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
  public $image;
  public $pegi;



  public function __construct($title, $year, $rating, $genres, $image, $pegi)
  {
    $this->title = $title;
    $this->year = $year;
    $this->rating = $rating;
    $this->genres = $genres;
    $this->image = $image;
    $this->pegi = $pegi;
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
  public function calculateAge()
  {
    return date("Y") - $this->year;
  }
}

$movie1 = new Movie("The Shawshank Redemption", 1994, 9.3, array("Drama", "Crime"), "https://upload.wikimedia.org/wikipedia/en/8/81/ShawshankRedemptionMoviePoster.jpg", 18);
$movie2 = new Movie("The Godfather", 1972, 9.2, array("Crime", "Drama", "Thriller"), "https://www.lab111.nl/wp-content/uploads/2022/01/TGF50_INTL_DIGITAL_PAYOFF_1_SHEET__NED.jpg", 18);
$movie3 = new Movie("UP", 2009, 8.2, array("Kids", "Comedy", "Adventure"), "https://m.media-amazon.com/images/I/81JOqsD2NmL._SL1500_.jpg", 3);

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
  <div class="container-fluid p-2">
    <div class="row">
      <div class="col">
        <img src="<?php echo $movie1->image ?>" alt="" class="movie1" style="width: 200px; height: 300px;">
        <?php
        // echo "<h1>" . $movie1->getTitle() . "</h1>";
        // echo "<div>Year: " . $movie1->getYear() . "</div>";
        // echo "<div>Rating: " . $movie1->getRating() . "</div>";
        // implode converte array to string
        // echo "<div>Genres: " . implode(", ", $movie1->getGenres()) . "</div>";

        echo "<h2>" . $movie1->title . "</h2>";
        echo "<div>Year: " . $movie1->year . "</div>";
        echo "<div>Rating: " . $movie1->rating . "</div>";
        // implode converte array to string
        echo "<div>Genres: " . implode(", ", $movie1->genres) . "</div>";
        echo "<div>Età: " . $movie1->calculateAge() . " anni</div>";
        if ($movie1->pegi >= 18) {
          echo "<p style='color:red;'>" . $movie1->pegi . "</p>";
        } else {
          echo "<p style='color:green;'>" . $movie1->pegi . "</p>";
        }
        ?>
      </div>
      <div class=" col">
        <img src="<?php echo $movie2->image ?>" alt="" class="movie2" style="width: 200px; height: 300px;">
        <?php
        // echo "<h1>" . $movie2->getTitle() . "</h1>";
        // echo "<div>Year: " . $movie2->getYear() . "</div>";
        // echo "<div>Rating: " . $movie2->getRating() . "</div>";
        // implode converte array to string
        // echo "<div>Genres: " . implode(", ", $movie2->getGenres()) . "</div>";

        echo "<h2>" . $movie2->title . "</h2>";
        echo "<div>Year: " . $movie2->year . "</div>";
        echo "<div>Rating: " . $movie2->rating . "</div>";
        // implode converte array to string
        echo "<div>Genres: " . implode(", ", $movie2->genres) . "</div>";
        echo "<div>Età: " . $movie2->calculateAge() . " anni</div>";
        if ($movie2->pegi >= 18) {
          echo "<p style='color:red;'>" . $movie2->pegi . "</p>";
        } else {
          echo "<p style='color:green;'>" . $movie2->pegi . "</p>";
        }
        ?>
      </div>
      <div class="col">
        <img src="<?php echo $movie3->image ?>" alt="" class="movie3" style="width: 200px; height: 300px;">
        <?php
        echo "<h2>" . $movie3->title . "</h2>";
        echo "<div>Year: " . $movie3->year . "</div>";
        echo "<div>Rating: " . $movie3->rating . "</div>";
        // implode converte array to string
        echo "<div>Genres: " . implode(", ", $movie3->genres) . "</div>";
        echo "<div>Età: " . $movie3->calculateAge() . " anni</div>";
        if ($movie3->pegi >= 18) {
          echo "<p style='color:red;'>" . $movie3->pegi . "</p>";
        } else {
          echo "<p style='color:green;'>" . $movie3->pegi . "</p>";
        }
        ?>
      </div>
    </div>
  </div>
</body>

</html>