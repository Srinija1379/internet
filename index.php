<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div>
            <form action="" method="POST">
                <input type="text" name="firstname" placeholder="firstname"> <br><br>
          
                <input type="number" name="age" placeholder="age"> <br><br>
                <input type="submit" name="save_btn" value="save"> <br><br>
            </form>
        </div>
        <?php
        if (isset($_POST['save_btn'])) {
            $fname = $_POST['firstname'];
         
            $age = $_POST['age'];
            $query = "INSERT INTO student    (firstname,age) VALUES ('$fname','$age')";
            $data = mysqli_query($con, $query);
            if ($data) {
                ?>
                <script type="text/javascript">
                    alert("Data Saved Successfully");
                </script>
                <?php
            }
            else {
                ?>
                <script type="text/javascript">
                    alert("Please try again");
                </script>
                <?php
            }
        }
        ?>
    </body>
</html>
