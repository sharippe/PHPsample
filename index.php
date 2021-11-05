<?php


    

/*
    if ($marks > 74.5) {
        echo "Grade A";
    } elseif ($marks > 60) {
        echo "Grade B";
    } elseif ($marks > 50) {
        echo "Grade C";
    } elseif ($marks > 40) {
        echo "Grade D";
    } else {
        echo "Sorry, You have Failed";
    }

    


    switch ($marks) {
        case ($marks > 74.5):
            echo "Grade A";
            break;

        case ($marks > 60):
            echo "Grade B";
            break;

        case ($marks > 50):
            echo "Grade C";
            break;

        case ($marks > 40):
            echo "Grade D";
            break;

        default :
            echo "Sorry, You have Failed";
            break;

    }

    echo "<br/>";
    echo strlen ("Hello World");
    echo "<br/>";
    echo date ('y/m/d');
    echo "<br/>";
    echo pi ();    




function printGrade()
{

    $marks = 42;

    if ($marks > 74.5) {
        echo "Grade A";
    } elseif ($marks > 60) {
        echo "Grade B";
    } elseif ($marks > 50) {
        echo "Grade C";
    } elseif ($marks > 40) {
        echo "Grade D";
    } else {
        echo "Sorry, You have Failed";
    }
}

printGrade();
*/

$marks =    [
                    "Ali" => [
                                'Chemistry' => 75,
                                'English' => 80,
                                'Maths' => 45,
                             ],   
                         
                "Ahmed" =>   [
                                'Islam' => 40,
                                'Maths' => 60,
                                'Science' => 99,
                             ], 
                
                "fathimath" => [
                                 'English' => 35,
                                 'Maths' => 88,
                               ],       
                           
            ];

            function getGrade($marks = 0, $name = 'Ali')
            {
            
            
                if ($marks > 74.5) {
                    return "$name got Grade A";
                } elseif ($marks > 60) {
                    return "$name got Grade B";
                } elseif ($marks > 50) {
                    return "$name got Grade C";
                } elseif ($marks > 40) {
                    return "$name got Grade D";
                } else {
                    return "$name has Failed";
                }
            }
            

            foreach ($marks as $students => $subjects ) {

                foreach ($subjects as $subject => $mark) {
                    echo getGrade ($mark, $students)  .  " in  $subject";
                    echo "<br>";
                }
            }
            printGrade();

?>

