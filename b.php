<html>
<body>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php
if ($_SERVER['HTTP_REFERER'] == 'http://localhost:3000/a.html') {
    echo "<br>";
    echo "you can go back to where you came from:";
    echo "<br>";
    echo '<a href="a.html">Click here</a>';
    } else {
      echo "great! you landed on this page directly";
    }

?>


</body>
</html>