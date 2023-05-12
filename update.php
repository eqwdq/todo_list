<?php

include "conn.php";

    if (isset($_POST['update'])) {

        $user_id = $_POST['user_id'];

        $noteTitle = $_POST['note_title'];

        $noteBody = $_POST['note_body'];


        $sql = "UPDATE `notes` SET `note_title`='$noteTitle',`note_body`='$noteBody' WHERE `id`='$user_id'";

        $result = $conn->query($sql);

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    }

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `notes` WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $noteTitle = $_POST['note_title'] ?? ''; // what's the error here


            $noteBody = $_POST['note_body'] ?? '';

            $id = $row['id'];

        }

    ?>

        <h2>notes Update Form</h2>

        <form action="" method="post">

          <fieldset>



            <input type="text" name="note_title" value="<?php echo $noteTitle; ?>">

            <input type="text" name="note_body" value="<?php echo $noteBody; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>


            <input type="submit" value="Update" name="update">

          </fieldset>

        </form>

        </body>

        </html>

    <?php

    } else{

        header('Location: read.php');

    }

}

?>