<?php
$studentGrades = [
    "Student_1" => ["Math" => 85, "English" => 92, "Science" => 78],
    "Student_2" => ["Math" => 88, "English" => 95, "Science" => 90],
    "Student_3" => ["Math" => 75, "English" => 80, "Science" => 82],
];



function gradeCheck($avggrad){
  foreach($avggrad as $student=>$subGrade){
    $total=0;
    $count=0;
    foreach($subGrade as $sub=>$grade){
        $total+=$grade;
        $count=$count+1;
        
    }
    $average=$total/$count;
    echo "$student Average Grade is: $average\n";
  }
}
gradeCheck($studentGrades);