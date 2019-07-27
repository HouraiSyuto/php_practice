<?php
class SomeClass
{
    private $values = array();

    //privateなコンテナへアクセサ(getter
    public function __get($name)
    {
        // TODO: Implement __get() method.
        echo "get: $name", PHP_EOL;
        if (!isset($this->values[$name])){
            throw new OutOfBoundsException($name . "not found");
        }
        return $this->values[$name];
    }

    //privateなコンテナへのアクセサ(setter)
    public function __set($name, $value)
    {
        echo "set: $name setted to $value", PHP_EOL;
        $this->values[$name] = $value;
    }

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
        echo "isset: $name", PHP_EOL;
        return isset($this->values[$name]);
    }

    public function __unset($name)
    {
        // TODO: Implement __unset() method.
        echo "unset: $name", PHP_EOL;
        unset($this->values[$name]);
    }

    public function __call($name, $args)
    {
        // TODO: Implement __call() method.
        echo "call: $name", PHP_EOL;

        //アンダースコアをつけ、メソッド名とする
        $method_name = '_' . $name;
        if(!is_callable(array($this, $method_name))){
            throw new BadMethodCallException($name . "method not found");
        }

        return call_user_func_array(array($this, $method_name), $args);
    }

    public static function __callStatic($name, $args)
    {
        // TODO: Implement __callStatic() method.
        echo "callStatic: $name", PHP_EOL;

        $method_name = '_' . $name;
        if(!is_callable(array('self', $method_name))){
            throw new BadMethodCallException($name . "method not found");
        }
        return call_user_func_array(array('self', $method_name), $args);
    }

    private function _bar($value){
        echo "bar called with arg '$value'", PHP_EOL;
    }

    private static function _staticBar($value)
    {
        echo "staticBar called with arg '$value'", PHP_EOL;
    }
}

$obj = new SomeClass();
$obj->foo = 10;

var_dump($obj->foo);

var_dump(isset($obj->foo));
var_dump(empty($obj->foo));

unset($obj->foo);
var_dump(isset($obj->foo));

$obj->bar('baz');
SomeClass::staticBar('baz');