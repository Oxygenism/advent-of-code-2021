<?php

namespace App\Advent\Days;

use App\Advent\Utility\DataService;

class Day0
{
    private DataService $dataService;

    public function __construct()
    {
        $this->dataService = new DataService();
    }

    public function runA()
    {
        return $this->run('day0_test.txt');
    }

    public function runB()
    {
//        return $this->run('day0_test.txt', true);
    }

    public function run($file, $state = false) {
        $handle = $this->dataService->read($file);
        while ($handle->valid()) {
            $handle->current();

            $handle->next();
        }

        return "Only a bad programmer.";
    }
}