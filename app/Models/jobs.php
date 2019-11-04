<?php
    namespace App\Models;

    class Job {
        private $title;
        private $description;
        private $visible;

        public function __construct($title, $description, $visible) {
            $this->title = $title;
            $this->description = $description;
            $this->visible = $visible;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getDescription() {
            return $this->description;
        }

        public function isVisible() {
            return $this->visible;
        }
    }

    $jobs = [
        new Job(
            'PHP Developer',
            'First job!',
            true
        ),
        new Job(
            'Python Dev',
            'Second job!',
            false
        ),
        new Job(
            'DevOps',
            'Third job!',
            false
        ),
        new Job(
            'Node Dev',
            'Fourth job!',
            true
        ),
        new Job(
            'Frontend Dev',
            'Fifth job!',
            true
        )
    ];
?>