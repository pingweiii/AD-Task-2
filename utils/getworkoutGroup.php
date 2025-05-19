<?php

require_once __DIR__ . '/utils/getworkoutData.php';

function getWorkoutGroup($group){
    $workouts = getWorkoutData();
    return $workouts[$group] ?? $workouts['chest'];
}

?>