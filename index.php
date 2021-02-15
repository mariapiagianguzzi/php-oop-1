<?php 


/* @author.Pia
@copyright.2021.Pia 
 */



class Book {
    public $title;
    public $year;
    public $author;
    public $genre; 

    public function __construct(string $title, int $year, string $author, string $genre) {
        $this -> title = $title;
        $this -> year = $year;
        $this -> author = $author;
        $this -> genre = $genre;
    }
    public function setYearTitleAuthorGenre(int $year)
    {
        $this -> yaer = $year;
/*         $this -> title = $title;
        $this -> author = $author;
        $this -> genre = $genre; come ho fatto con il Get*/
    }
    public function getYear(){
        return $this->year;

    }
    public function getTitle(){
        return $this->title;

    }
    public function getAuthor(){
        return $this->author;

    }
    public function getGenre(){
        return $this->genre;

    }
    
}

$libro1 = new Book('La cattedrale del male', 2007, 'Ildefonso Falcones', 'fantasy');
$libro2 = new Book('Perché non possiamo essere cristiani (e meno che mai cattolici),', 2007, 'Piergiorgio Odifreddi', 'saggio');
$libro3 = new Book('1984', 1949, 'George Orwell', 'fantascienza sociologica');


$books = [$libro1, $libro2, $libro3];
/* var_dump($libro1, $libro2, $libro3); */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

  <!-- parte php -->
  <div class="cds-container container">
        <?php foreach($books as $value){?>
            <div class="card">
                <h3><?php echo $value->getTitle(); ?></h3>
                <span class="author"><?php echo $value->getAuthor(); ?></span>
                <span class="genre"><?php echo $value->getGenre();?></span>
                <span class="year"><?php echo $value->getYear();?></span>
            </div>
        <?php } ?>        
    </div>
        
</body>
</html>



