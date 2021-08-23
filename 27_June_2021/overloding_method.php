<?php
class MethodTest
{
    public function __call($name, $arguments)
    {
        echo "Calling object method '$name' " . " & Arguments are "
             . implode(', ', $arguments). "\n";
    }
 
    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method '$name' "
             . implode(', ', $arguments). "\n";
    }
}
 
$obj = new MethodTest;
$obj->runTest('Param1', 'Param2');
 
MethodTest::runTest2("arg1", "arg2", "arg3", "arg4", "arg5");












?>