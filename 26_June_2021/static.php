<?php


class teststatic{
    public static $count =0;
    public static function counter(){
        echo "Its Static Counter";
        echo "<br> And value of Count: " . teststatic::$count;
        self::$count++;
    }
}
    teststatic::$count=5;
    echo teststatic::$count;
    echo "<br>";
    teststatic::counter();
    teststatic::counter();
    teststatic::counter();
    teststatic::counter();
    teststatic::counter();
    teststatic::counter();
    teststatic::counter();
    teststatic::counter();

    ?>