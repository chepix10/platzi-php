<?php

namespace App\Controllers;

use App\Models\Job;
use Respect\Validation\Validator as v;

class JobsController extends BaseController {
    public function getAddJobAction() {
        return $this->renderHTML('addJob.twig');
    }

    public function postAddJobAction($request) {
        $newJob = $request->getParsedBody();
        $responseMessage = null;
        if (!empty($newJob)) {
            $jobValidator = v::key('title', v::stringType()->notEmpty())
                ->key('description', v::stringType()->notEmpty());
            try {
                $jobValidator->assert($newJob);
                $job = new Job();
                $job->title = $newJob['title'];
                $job->description = $newJob['description'];
                $job->save();
                $responseMessage = 'Saved!';
            } catch (\Exception $ex) {
                $responseMessage = $ex->getMessage();
            }
        }
        return $this->renderHTML('addJob.twig', [
            'responseMessage' => $responseMessage
        ]);
    }
}

?>