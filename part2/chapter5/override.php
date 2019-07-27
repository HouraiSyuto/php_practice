<?php
class Employee
{
    public $name;
    public $state = '働いている';

    public function work()
    {
        echo '書類を整理しています', PHP_EOL;
    }
}

class Programmer extends Employee
{
    public function work()
    {
        echo `プログラムを書いています!!!!`, PHP_EOL;
    }
}

$yamada = new Programmer();
$yamada->name = '山田';
echo $yamada->state, $yamada->name, 'さん：';
$yamada->work();