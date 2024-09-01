
<h1> Hands-on Activity </h1>

<?php
    $table = array(
        "header" => array(
            "StudentID",
            "FirstName", 
            "MiddleName",
            "LastName",
            "Section",
            "Course",
            "YearLevel"
        ),
        "body" => [
            array("firstname" => "", "middlename" => "", "lastname" => "", "section" => "", "course" => "", "yearlevel" => ""),
            array("firstname" => "", "middlename" => "", "lastname" => "", "section" => "", "course" => "", "yearlevel" => ""),
            array("firstname" => "", "middlename" => "", "lastname" => "", "section" => "", "course" => "", "yearlevel" => ""),
            array("firstname" => "", "middlename" => "", "lastname" => "", "section" => "", "course" => "", "yearlevel" => ""),
            array("firstname" => "", "middlename" => "", "lastname" => "", "section" => "", "course" => "", "yearlevel" => ""),
            array("firstname" => "", "middlename" => "", "lastname" => "", "section" => "", "course" => "", "yearlevel" => ""),
            array("firstname" => "", "middlename" => "", "lastname" => "", "section" => "", "course" => "", "yearlevel" => ""),
            array("firstname" => "", "middlename" => "", "lastname" => "", "section" => "", "course" => "", "yearlevel" => ""),
            array("firstname" => "", "middlename" => "", "lastname" => "", "section" => "", "course" => "", "yearlevel" => ""),
            array("firstname" => "", "middlename" => "", "lastname" => "", "section" => "", "course" => "", "yearlevel" => ""),
        ]
    );
?>

<table border="1">
    <thead>
        <tr>
            <?php foreach ($table['header'] as $header) { ?>
                <th><?php echo $header; ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($table['body'] as $index => $row) { ?>
            <tr>
                <td><?php echo $index; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['middlename']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['section']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['yearlevel']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>