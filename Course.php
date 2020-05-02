<?php

class Course
{
    public $Title;
    public $Stream;
    public $Type;
    public $StartDate;
    public $EndDate;


    function __construct($title,$stream,$type,$startDate,$endDate)
    {
        $this->Title = $title;
        $this->Stream = $stream;
        $this->Type = $type;
        $this->StartDate = $startDate;
        $this->EndDate = $endDate;
    }
    
    public function __toString()
    {
        return "Course title: " . 
        $this->Title . " " . 
        $this->Stream . " " . 
        $this->Type . " Starts on: " . 
        $this->StartDate . " and ends on:" . 
        $this->EndDate;
    }
}


?>