<?php
require_once("Course.php");
print "Do you want to input your own entities Y/N?";
$response = trim(fgets(STDIN));
while($response != "N" && $response != "Y")
{
    print "Please give a valid answer";
    $response = trim(fgets(STDIN));
}
if($response == "Y")
{  
    print "Give a course title i.e BC5";
    $title = trim(fgets(STDIN));
    print "Give a course stream i.e Java";
    $stream = trim(fgets(STDIN));
    print "Give a course type i.e part time or full time";
    $type = trim(fgets(STDIN));
    print "Give a course starting date";
    $startingDate = trim(fgets(STDIN));
    print "Give a course ending date";
    $endingDate = trim(fgets(STDIN));
    $course1 = new Course($title,$stream,$type,$startingDate,$endingDate);
    print $course1;
    
}
else if($response == "N")
{
    print "See our dummy Data";
}

print "Thank you";
