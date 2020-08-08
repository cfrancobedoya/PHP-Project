<?php

require_once 'vendor/autoload.php';

use App\Models\{Job, Project, Printable};

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

$project1 = new Project('Project1', 'Description 1');
$project1->visible = true;

$jobs = [
    $job1,
    $job2,
    $job3
];

$projects = [
  $project1
];

  function printElement(Printable $job) {
    if($job->visible == false) {
      return;
    }

    // Function content
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->getDescription() . '</p>';
    echo '<p>' . $job->getDurationAsSting() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }