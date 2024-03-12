<?php

// https://www.hackerrank.com/challenges/30-abstract-classes/problem

abstract class Book
{
    /** @var string */
    protected $title;

    /** @var string */
    protected $author;

    /**
     * @param string $t
     * @param string $a
     */
    function __construct($t, $a)
    {
        $this->title = $t;
        $this->author = $a;
    }

    abstract protected function display();
}

class MyBook extends Book
{
    protected $price;

    public function __construct($title, $author, $price)
    {
        parent::__construct($title, $author);
        $this->price = $price;
    }

    public function display()
    {
        echo "Title: " . $this->title;
        echo "Author: " . $this->author;
        echo "Price: " . $this->price;
    }
}

$title = fgets(STDIN);
$author = fgets(STDIN);
$price = intval(fgets(STDIN));
$novel = new MyBook($title, $author, $price);
$novel->display();

