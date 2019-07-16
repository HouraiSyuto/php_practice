<?php 
    function add($v1, $v2)
    {
        return $v1 + $v2;
    }
    class Math
    {
        public function sub($v1, $v2){
            return $v1 - $v2;
        }
        public static function add($v1, $v2){
            return $v1 + $v2;
        }
    }

    echo call_user_func('add',1,2), PHP_EOL;
    echo call_user_func(function($v1, $v2){return $v1 + $v2;},1,2), PHP_EOL;

?>