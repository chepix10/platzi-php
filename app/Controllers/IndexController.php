<?php

namespace App\Controllers;

use App\Models\Job;

class IndexController extends BaseController {
    public function getIndexAction() {
        $jobs = Job::all();
        $name = 'José Morales';

        return $this->renderHTML('index.twig', [
            'name' => $name,
            'jobs' => $jobs
        ]);
    }
}
?>