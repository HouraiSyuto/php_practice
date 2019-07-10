<?php 
    $array = array(1,2,3,4,5);
    foreach ($array as $value){
        echo $value, PHP_EOL;
    }
?>

<?php 
    $fruits_color = array(
        'apple' => 'red',
        'banana' => 'yellow',
        'orange' => 'orange',
    );

    foreach ($fruits_color as $name => $color){
        echo "$name is $color", PHP_EOL;
    }

    foreach ($fruits_color as &$color){
        $color = 'black';
    }
    var_dump($fruits_color);
?>
