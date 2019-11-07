<?php

namespace App\Controllers;

use App\Models\Job;

class JobsController extends BaseController {
    public function getAddJobAction() {
        return $this->renderHTML('addJob.twig');
    }

    public function postAddJobAction($request) {
        $newJob = $request->getParsedBody();
        if (!empty($newJob)) {
            $job = new Job();
            $job->title = $newJob['title'];
            $job->description = $newJob['description'];
            $job->save();
        }
        return $this->renderHTML('addJob.twig');
    }
}

?>