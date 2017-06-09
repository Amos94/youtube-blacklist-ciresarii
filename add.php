<html>
<head>
    <title>Add new record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body style="background-color: snow">
<?php
/**
 * Created by Amos Neculau.
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

<center>
    <br/>
    <center><h1><font face="Century Gothic" size="6">Add new record</font></h1></center>
    <br/>
    <form style="width: 50%" action="add-action.php" method="post">
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Insert the YouTube Link" style="text-align: center">
        </div>
        <div class="form-group">
            <label for="chname">Channel Name</label>
            <input type="text" class="form-control" id="chname" name="chname" placeholder="Insert the Channel Name" style="text-align: center">
        </div>
        <div class="form-group">
            <label for="reported">Reported</label>
            <select class="form-control" id="reported" name="reported">
                <option value="0"></option>
                <option value="1">No</option>
                <option value="2">Yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="solved">Solved</label>
            <select class="form-control" id="solved" name="solved">
                <option value="0"></option>
                <option value="1">Not Yet</option>
                <option value="2">No</option>
                <option value="3">Yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="reporter">Reporter</label>
            <input type="text" class="form-control" id="reporter" name="reporter" placeholder="Insert the Reporter Name" style="text-align: center">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</center>
<footer style="background-color: silver">
    <center><img src="images/Logo_Ciresarii2.png"/></center>
</footer>
</body>
</html>