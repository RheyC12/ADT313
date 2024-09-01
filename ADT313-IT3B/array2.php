<?php
$user = array(
    "information" => array(
        "firstname" => "Rhey",
        "lastname" => "Verunque",
    ),
    "roles" => array(
        "instructor",
        "student"
    ),
    "address" => array(
        "province" => "bulacan",
        "municipality" => "Marilao",
        "barangay" => "StaRosa"

    )


    );

    echo .$user["address"]["province"].

?>

<table border="1">
          <thead>
            <th>StudentID</th>
            <th>FirstName</th>
            <th>MiddleName</th>
            <th>LastName</th>
            <th>Section</th>
            <th>Course</th>
            <th>YearLevel</th>
          </thead>
          <tbody>
            <tr>
                <td>123</td>
                <td>Rhey Christian</td>
                <td>Santiago</td>
                <td>Verunque</td>
                <td>3B</td>
                <td>BS in Information Technology</td>
                <td>3rd Year</td>
           </tr>
        </tbody>
    </table>