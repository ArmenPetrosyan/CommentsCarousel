<?php

/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 27.05.2016
 * Time: 0:23
 */
class Comment
{
    function __construct($asked, $answered, $rating)
    {
        $this->asked = $asked;
        $this->answered = $answered;
        $this->rating = $rating;
    }
}