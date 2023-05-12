<?php

include "conn.php";

  if (isset($_POST['submit'])) {

    $noteTitle = $_POST['note_title'];

    $noteBody = $_POST['note_body'];

    $sql = "INSERT INTO `notes`(`note_title`, `note_body`) VALUES ('$noteTitle','$noteBody')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    }

    $conn->close();

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>add notes</h2>

<form action="" method="POST">

  <fieldset>

    Note Title<br>

    <input type="text" name="note_title">

    <br>

    Note Body<br>

    <input type="text" name="note_body">

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>