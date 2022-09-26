<?php

require_once __DIR__ . "/vendor/autoload.php" ;

use Denis\Pro\Blog\{Post,User,Comment};

$faker = Faker\Factory::create('ru_RU');

$massege = 'Insert one of arguments:' . PHP_EOL. 'user' . PHP_EOL . 'comment'. PHP_EOL . 'title';

if (empty($argv[1])){
    die($massege);
}else {
    $inputData = $argv[1];
}

switch ($inputData){
    case 'user':
    echo ($faker->name());
    break;
        case 'comment':
      echo ($faker->text());
        break;
        case 'title';
        echo ($faker->title());
        break;
      default:
      echo $massege;
}

