<?php

function calculateResult($marks) {
    // Checking mark range for each subject
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.";
            return;
        }
    }

    // Checking if the student has failed in any subject
    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "The student has failed because a subject mark is below 33.";
            return;
        }
    }

    // Calculating total marks and average
    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    // Determining the grade using a switch statement
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }

    // Output of the total marks, average, and grade
    echo "Total Marks: $totalMarks\n\n";
    echo "Average Marks: " . number_format($averageMarks, 1) . "\n\n";
    echo "Grade: $grade\n";
}

//inputs
$marks = [40, 50, 45, 50, 47];
calculateResult($marks);

?>
