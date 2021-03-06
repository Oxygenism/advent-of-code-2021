<?php

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';

use App\Advent\Utility\DataService;
use App\Advent\Utility\Logger;
use App\Advent\Utility\Timer;

$logger = new Logger();
$dataService = new DataService();
$timer = new Timer();
$logger->unlink();

$handle = $dataService->read('introduction.txt');
foreach ($handle as $line) {
    $logger->log($line);
}

$days = [
//    new App\Advent\Days\Day1(),
//    new App\Advent\Days\Day2(),
//    new App\Advent\Days\Day3(),
//    new App\Advent\Days\Day4(),
//    new App\Advent\Days\Day5(),
//    new App\Advent\Days\Day6(),
//    new App\Advent\Days\Day7(),
//    new App\Advent\Days\Day8(),
//    new App\Advent\Days\Day9(),
//    new App\Advent\Days\Day10(),
//    new App\Advent\Days\Day11(),
//    new App\Advent\Days\Day12(),
//    new App\Advent\Days\Day13(),
//    new App\Advent\Days\Day14(),
//    new App\Advent\Days\Day15(),
//    new App\Advent\Days\Day16(),
//    new App\Advent\Days\Day17(),
//    new App\Advent\Days\Day18(),
//    new App\Advent\Days\Day19(),
//    new App\Advent\Days\Day20(),
//    new App\Advent\Days\Day21(),
    new App\Advent\Days\Day22(),
];

foreach ($days as $day) {
    $timer->run($day, 'RunA');
    $timer->run($day,  'RunB');
}