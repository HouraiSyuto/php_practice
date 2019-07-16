<?php 
    function func_caller($name)
    {
        if(function_exists($name))
        {
            $name();    //可変関数としての関数の呼び出し
        }
    }

    function foo()
    {
        echo 'foo called', PHP_EOL;
    }

    func_caller('foo'); //foo called
?>