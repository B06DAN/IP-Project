<!DOCTYPE HTML>  
<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body style="margin: 0;
          padding: 0;
          /*background: url(fundal.jpg);*/
          background-size: cover;
          background-position: center;
          font-family: sans-serif;
          background-color: #333333;">  

        <?php
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);

                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <h2>PHP Form Validation Example</h2>
        <p><span class="error">* required field</span></p>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">  
            Name: <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error">* <?php echo $nameErr; ?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr; ?></span>
            <br><br>
            Website: <input type="text" name="website" value="<?php echo $website; ?>">
            <span class="error"><?php echo $websiteErr; ?></span>
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
            <br><br>
            Timpul de cerere:
            <input type="radio" name="gender" 
            <?php
            if (isset($gender) && $gender == "alipire")
                echo "checked";
            ?> 
                   value="alipire">Alipire
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "independenta") echo "checked"; ?> value="independenta">Independenta
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other  
            <span class="error">* <?php echo $genderErr; ?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">  
        </form>

        <?php
        echo "<h2>Your Input:</h2>";
        echo "Nume: $name";
        echo "<br>";
        echo "Descriere: $comment";
        echo "<br>";
        echo "Tipul: $gender";
        ?>

    </body>
</html>