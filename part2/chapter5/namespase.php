<?php
// namespase.php

namespace Project\Mojule;

// 下記ファイルにクラスが定義されているものとします
require_once 'Foo/Bar/Baz.php';
require_once 'Hoge/Fuga.php';
require_once 'Module/Klass/Some.php';

use Foo\Bar as BBB;
use Hoge\Fuga;

class Piyo{}

$obj1 = new \Directory();

$obj2 = new BBB\Baz();

$obj3 = new Fuga();

$obj4 = Klass\Some();

$obj5 = new Piyo();

some_func();

BBB\SOME_CONST;

SOME_CONST;


