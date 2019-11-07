<?php

namespace App\Controllers;

use App\Models\Job;

class JobsController {
    public function getAddJobAction() {
        include '../views/addJob.php';
    }

    public function postAddJobAction($request) {
        $newJob = $request->getParsedBody();
        if (!empty($newJob)) {
            $job = new Job();
            $job->title = $newJob['title'];
            $job->description = $newJob['description'];
            $job->save();
        }
        include '../views/addJob.php';
    }
}

?>