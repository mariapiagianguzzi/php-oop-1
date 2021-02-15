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
        $this -> gnre = $genre;
    }
    public function setYear(int $year)
    {
        $this -> yaer = $year;
    }
    public function getYear(){
        return $this->year;
    }
}

$libro1 = new Book('La cattedrale del male', 2007, 'Ildefonso Falcones', 'fantasy');
$libro2 = new Book('Perché non possiamo essere cristiani (e meno che mai cattolici),', 2007, 'Piergiorgio Odifreddi', 'saggio');
$libro3 = new Book('1984', 1949, 'George Orwell', 'fantascienza sociologica');

var_dump($libro1, $libro2, $libro3);

$libro1->setYear(2007);
$libro2->setYear(2007);
$libro3->setYear(1949);
var_dump($libro1, $libro2, $libro3);

var_dump($libro1->getYear());

?>


