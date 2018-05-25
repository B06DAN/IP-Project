<?php
$query = "SELECT * FROM chatroom";
$run = mysql_query($con, $query);
while ($row = mysql_fetch_array($run)) {
    ?>

    <p>
        <span style="color: red;"><?php echo $row['name'] . ": "; ?></span>
        <span style="color: blue;"><?php echo $row['message']; ?></span>
        <span style="float: right;"><?php echo date('h:m A', strtotime($row['time'])); ?></span>
    </p>

    <?php
    ?>