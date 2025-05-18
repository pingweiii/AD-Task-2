<?php
function getWorkoutData(){
    $workouts = [
        "chest" => [
            "name" => "Chest",
            "exercises" => [
                "Bench Press" => "3 sets of 8-12 reps",
                "Incline Bench Press" => "3 sets of 8-12 reps",
                "Dumbbell Flys" => "3 sets of 10-15 reps",
                "Push ups" => "2 sets to failure"
            ]
        ],

        "back" => [
            "name" => "Back",
            "exercises" => [
                "Pull-ups" => "4 sets to failure",
                "Bent-over Rows" => "3 sets of 8-12 reps",
                "Lat Pulldown" => "3 sets of 10-12 reps",
                "Deadlifts" => "2 sets of 6-8 reps"
            ]
        ],

        "legs" => [
            "name" => "Legs",
            "exercises" => [
                "Squats" => "4 sets of 8-12 reps",
                "Lunges" => "3 sets of 10 reps per leg",
                "Leg Press" => "3 sets of 10-12 reps",
                "Calf Raises" => "3 sets of 15-20 reps"
            ]
        ],

        "arms" => [
            "name" => "Arms",
            "exercises" => [
                "Bicep Curls" => "3 sets of 10-12 reps",
                "Tricep Dips" => "3 sets to failure",
                "Hammer Curls" => "3 sets of 10-12 reps",
                "Skull Crushers" => "3 sets of 10-12 reps"
            ]
        ],

        "shoulders" => [
            "name" => "Shoulders",
            "exercises" => [
                "Overhead Press" => "4 sets of 8-12 reps",
                "Lateral Raises" => "3 sets of 12-15 reps",
                "Front Raises" => "3 sets of 12-15 reps",
                "Shrugs" => "3 sets of 12-15 reps"
            ]
        ],

        "core" => [
            "name" => "Core",
            "exercises" => [
                "Plank" => "3 sets of 60 seconds",
                "Russian Twists" => "3 sets of 20 reps",
                "Leg Raises" => "3 sets of 12-15 reps",
                "Crunches" => "3 sets of 15-20 reps"
            ]
        ]
    ];

    return $workouts;
    
}
function getWorkoutGroup($group){
    $workouts = getWorkoutData();
    return $workouts[$group] ?? $workouts['chest'];
}
?>