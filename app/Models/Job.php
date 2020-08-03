<?php

require_once 'BaseElement.php';

class Job extends BaseElement {
    public function __construct($title, $description) {
        $newTitle = 'Job: ' . $title;
        $this->title = $newTitle;
    }

    public function getDurationAsSting() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
    
        if($years == 0) {
          return "Job duration: $extraMonths months";  
        } else if($extraMonths == 0) {
          return "Job duration: $years years";
        } else {
          return "Job duration: $years years $extraMonths months";
        }
    }
}

