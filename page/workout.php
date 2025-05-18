<?php
require_once __DIR__ . '/../handlers/pageData.handler.php';

$selectedMuscleGroup = $_POST['muscle_group'] ?? 'chest';
$workout = getWorkoutGroup($selectedMuscleGroup);
$groupName = $workout['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Plan</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Your <?php echo $groupName; ?> Workout</h1>
        <p>Here is your Workout</p>
        <div class="workout-list">
            <?php foreach ($workout['exercises'] as $exercise => $sets): ?>
                <div class="exercise">
                    <span class="exercise-name"><?php echo $exercise; ?></span>
                    <span class="exercise-sets"><?php echo $sets; ?></span>
                </div> 
            <?php endforeach; ?>
        </div>
        <a href="../index.php" class="back-btn">Choose Other Muscle</a>
    </div>
</body>
</html>