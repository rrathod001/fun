<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Search</title>
</head>
<body>
    <h1>Employee Search</h1>
<?php
// Create an indexed array of employee names
$employee_names = array("Raj","Eric","Michael","Emily","Rahul","Sophia","Alex","Ved","Mahesh",
    "Emma","Joey","Chandler","Ross","Riya","Monica","Emma","Rachel","Phoebe","Jackson",
                        "Mayuri" );
  sort($employee_names);
  echo "<h2>Employee Names</h2>";
  foreach ( $employee_names as $x)
    {
      echo "$x <br>"; 
    }

// Check if a name exists in the array
if (isset($_GET['search_name'])) 
  {
    $search_name = $_GET['search_name'];
    $result = in_array($search_name, $employee_names);

    if ($result) 
    {
        echo "<p>{$search_name} is an employee.</p>";
    }    else
    {
        echo "<p>{$search_name} is not found in the list of employees.</p>";
    }  }
?>
<!-- HTML form for user input -->
<form method="GET" action="">
    <label for="search_name">Enter employee name:</label>
    <input type="text" name="search_name" id="search_name" required>
    <button type="submit">Search</button>
</form>
</body>
</html>
