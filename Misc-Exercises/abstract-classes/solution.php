<?php

// Given a Book class and a Solution class, write a MyBook class that does the following:

// Inherits from Book
// Has a parameterized constructor taking these 3 parameters:
// string title
// string  author
// int price
// Implements the Book class' abstract display() method so it prints these  lines:
// Title:, a space, and then the current instance's title.
// Author:, a space, and then the current instance's author.
// Price:, a space, and then the current instance's price.

abstract class Book {
    public $title;
    public $author;
    public $price;

    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    abstract public function display() : string;
}

class Solution {

}

class MyBook extends Book {

    public function display() : string {
        return "Title: $this->title <br> Author: $this->author <br> Price: $ $this->price";
    }

}

$book1 = new mybook("Empire of the Summer Moon", "SC Gwynne", 20);
echo $book1->display();