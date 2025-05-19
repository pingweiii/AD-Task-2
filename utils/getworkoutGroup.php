<?php
require_once __DIR__ . '/getworkoutData.php';

function getWorkoutGroup($group){
    $workouts = getWorkoutData();
    return $workouts[$group] ?? $workouts['chest'];
}
?>