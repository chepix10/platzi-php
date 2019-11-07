<?php

namespace App\Controllers;

use App\Models\Job;

class IndexController {
    public function getIndexAction() {
        $jobs = Job::all();
        $name = 'José Morales';

        include '../views/index.php';
    }
}
?>