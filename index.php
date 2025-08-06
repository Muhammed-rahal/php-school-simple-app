<?php 

$school = [
    "class1" => [
        ["name"=>"Ali", "grade"=>90],
        ["name"=>"Sara", "grade"=>85]
    ],

    "class2" => [
        ["name"=>"Omar", "grade"=>88],
        ["name"=>"Laila", "grade"=>92]
    ]
];
foreach ($school as $className => $students) {
    echo "Class: $className<br>";

    foreach ($students as $student) {
        echo "- " . $student["name"] . " got " . $student["grade"] . "<br>";
        
        if ($student["grade"] >= 90) { 
            echo "  🎉 Congratulations " . $student["name"] . "! You have an A grade.<br>";
        } 
    }

    echo "<br>";
}

$grades = []; 
foreach ($school as $students) { 
    foreach ($students as $student) {
        $grades[] = $student["grade"];
    }
}


$maxGrade = array_reduce($grades, function($carry, $grade) {
    return ($grade > $carry) ? $grade : $carry;
}, 0);

echo "The highest grade in the school is: $maxGrade<br>";

?> 