<?php

    class News
    {
        public $title;
        public $text;
        public $producer;
        public $date;
        public $category;
        
        public function __construct($title, $text, $producer, $date, $category){

            $this->title = $title;
            $this->text = $text;
            $this->producer = $producer;
            $this->date = $date;
            $this->category = $category;
        }
    
    }


?>