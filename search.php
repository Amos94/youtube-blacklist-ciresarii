<html>
<head>
    <title>Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body style="background-color: snow">
<?php
/**
 * Created by PhpStorm.
 * User: amos neculau
 * Date: 6/7/2017
 * Time: 7:04 PM
 */
include 'Dbconnection.php';

$connection = new Dbconnection();
?>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/index.php">YouTube Black List</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/list.php"><img src="images/list.png" width="25px" height="25px"/><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/add.php"><img src="images/plus.png" width="25px" height="25px"/></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
            <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<br/>
<center><h1><font face="Century Gothic" size="6">Black List</font></h1></center>
<table class="table">
    <thead class="thead-default"><td>Link</td><td>Channel Name</td><td>Reported</td><td>Solved</td><td>Reporter</td><td>Timestamp</td><td>Edit</td></thead>
    <?php
    $search = $_GET['q'];
    $sql = "SELECT link, channel_name, reported, solved, reporter, timestamp FROM list WHERE link LIKE'%".$search."%' OR channel_name LIKE'%".$search."%' OR reporter LIKE '%".$search."%' ORDER BY timestamp DESC";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $link = $row["link"];
            $cn = $row["channel_name"];
            $reported = $row["reported"];
            $solved = $row["solved"];
            $reporter = $row["reporter"];
            $timestamp = $row["timestamp"];

            if($solved == "not yet"){
                echo "<tr class='table-warning'>";
            }elseif ($solved == "no"){
                echo "<tr class='table-danger'>";
            }else{
                echo "<tr class='table-success'>";
            }
            echo "<td>" . "<a href='$link'>" . $link . "</a>" ."</td>";
            echo "<td>" . $cn . "</td>";
            if($reported == 0) {
                echo "<td>" . "No" . "</td>";
            } else{
                echo "<td>" . "Yes" . "</td>";
            }
            if($solved == 'yes'){
                echo "<td>" . "<img src='images/checked.png'/>" . "</td>";
            }elseif($solved == 'no'){
                echo "<td>" . "<img src='images/no.png'/>" . "</td>";
            }else{
                echo "<td>" . "<img src='images/notyet.png'/>" . "</td>";
            }

            echo "<td>" . $reporter . "</td>";
            echo "<td>" . $timestamp . "</td>";
            echo "<td>" . "<a href='/edit.php/?link=$link'>" . "<button type=\"button\" class=\"btn btn-info\">Edit</button>" ."</a>". "</td>";
            echo "</tr>";
        }
    }

    ?>
</table>

<footer style="background-color: silver">
    <center><img src="images/Logo_Ciresarii2.png"/></center>
</footer>
</body>
</html>