<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Activity 3: Array and Functions</title>

        <style>
        * {
        font-family: Arial, Helvetica, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
        border-collapse: collapse;
        width: 80%;
        margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        td {
            font-size: 14px;
        }

        th {
            font-size: 15px;
        }

        th {
            background-color: rgb(233, 233, 233);
        }

        </style>
    </head>
    <body>
        <?php 
            $student = [
                array("firstName"=>"James Mickel", "middleName"=>"Cao","lastName"=>"Ricarte", "age"=>21, "course"=>"BSIT", "year"=>1, "enrolled"=>1, "grade"=>92.1),
                array("firstName"=>"Charles", "middleName"=>"Marfil","lastName"=>"Alamares", "age"=>22, "course"=>"BSIT", "year"=>1, "enrolled"=>1, "grade"=>92.1),
                array("firstName"=>"Cedric", "middleName"=>"Dino","lastName"=>"Naño", "age"=>22, "course"=>"BSIT", "year"=>1, "enrolled"=>1, "grade"=>92.1)
            ];

            //Custom Sorting, I want to sort based on their last name
            function compareByLastName($a, $b)
            {
                return strcmp($a["lastName"], $b["lastName"]);
            }
            // Use the custom sorting function
            usort($student, 'compareByLastName');

        $studentLength = count($student);

        $subject = "Object Oriented Programming using PHP";

        echo "<h1>List of Students:</h1>
        
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Course and Year</th>
                        <th>Enrolled</th>
                        <th>Subject</th>
                        <th>Grade</th>
                    </tr>
                </thead>";

        for($i = 0; $i < $studentLength; $i++) {
            echo "
                <tbody>
                    <tr>
                        <td>" .$student[$i]["firstName"]. "</td>
                        <td>" .$student[$i]["middleName"]. "</td>
                        <td>" .$student[$i]["lastName"]. "</td>
                        <td>" .$student[$i]["age"]. "</td>
                        <td>" .$student[$i]["course"]. "-" . $student[$i]["year"]."</td>
                        <td>" .$student[$i]["enrolled"]. "</td>
                        <td>" .$subject. "</td>
                        <td>" .$student[$i]["grade"]. "</td>
                    </tr>
                </tbody>";
            }

            echo "</table>";
        ?>
        
    </body>
</html>