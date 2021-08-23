<?php

class course{
    protected static $courseName ="Professional PHP";
    public static function getCourseName(){
        return static::$courseName;
    }


}

class student extends course{
    protected static $courseName = "Laravel";

}


echo student::getCourseName();