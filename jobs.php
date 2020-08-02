<?php

$jobs = [
    [
      'title' => 'Angular Developer',
      'description' => 'This is an awesome job!!!',
      'visible' => true,
      'months' => 16
    ],
    [
      'title' => 'NodeJS Developer',
      'description' => 'This is an awesome job!!!',
      'visible' => false,
      'months' => 14
    ],
    [
      'title' => 'Mobile Developer',
      'description' => 'This is an awesome job!!!',
      'visible' => true,
      'months' => 5
    ],
    [
      'title' => 'Android Developer',
      'description' => 'This is an awesome job!!!',
      'visible' => true,
      'months' => 24
    ]
  ];

  function getDuration($months) {
    $years = floor($months / 12);
    $extraMonths = $months % 12;

    if($years == 0) {
      return "$extraMonths months";  
    } else if($extraMonths == 0) {
      return "$years years";
    } else {
      return "$years years $extraMonths months";
    }
  }

  function printJob($job) {
    if($job['visible'] == false) {
      return;
    }

    // Function content
    echo '<li class="work-position">';
    echo '<h5>' . $job['title'] . '</h5>';
    echo '<p>' . $job['description'] . '</p>';
    echo '<p>' . getDuration($job['months']) . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }