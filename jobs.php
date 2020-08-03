<?php

class Job {
  private $title;
  public $description;
  public $visible;
  public $months;

  public function __construct($title, $description) {
    $this->title = $title;
    $this->description = $description;
  }

  public function getTitle() {
    return $this->title;
  }

  public function setTitle($t) {
    if($t == '') {
      $this->title = 'N/A';
    } else {
      $this->title = $t;
    }
  }

  public function getDurationAsSting() {
    $years = floor($this->months / 12);
    $extraMonths = $this->months % 12;

    if($years == 0) {
      return "$extraMonths months";  
    } else if($extraMonths == 0) {
      return "$years years";
    } else {
      return "$years years $extraMonths months";
    }
  }
}

$job1 = new Job('PHP Developer', 'This is an awesome job!!!');
$job1->visible = true;
$job1->months = 16;

$job2 = new Job('Python Developer', 'This is an awesome job!!!');
$job2->visible = true;
$job2->months = 24;

$job3 = new Job('', 'This is an awesome job!!!');
$job3->setTitle('');
$job3->visible = true;
$job3->months = 32;

$jobs = [
    $job1,
    $job2,
    $job3
    
    // [
    //   'title' => 'Angular Developer',
    //   'description' => 'This is an awesome job!!!',
    //   'visible' => true,
    //   'months' => 16
    // ],
    // [
    //   'title' => 'NodeJS Developer',
    //   'description' => 'This is an awesome job!!!',
    //   'visible' => false,
    //   'months' => 14
    // ],
    // [
    //   'title' => 'Mobile Developer',
    //   'description' => 'This is an awesome job!!!',
    //   'visible' => true,
    //   'months' => 5
    // ],
    // [
    //   'title' => 'Android Developer',
    //   'description' => 'This is an awesome job!!!',
    //   'visible' => true,
    //   'months' => 24
    // ]
  ];

  function printJob($job) {
    if($job->visible == false) {
      return;
    }

    // Function content
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' . $job->getDurationAsSting() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }