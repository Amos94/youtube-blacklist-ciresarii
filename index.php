<html>
    <head>
        <title>Index</title>
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
    <br /><br/>
    <div class="continut" style="margin-left: 5%; margin-right: 5%;">
        <center><h1>YouTube Black List</h1></center><br/><br/>
        <h2>1. Scop</h2><br/>
        <p>
            Acestă platformă este destinată centralizării notificărilor takedown pentru predicile pastorului Vladimir Pustan (re)încărcate pe YouTube de diferite canale ce nu aparțin Funației Cireșarii.
        </p>
        <br/>
        <h2>2. Lucrăm împreună</h2><br/>
        <center><img src="images/worktogether.png" width="400px" height="400px"/></center>
        <p>Pe lângă evidență și organizare, această platformă încurajează lucrul în echipă. Spre exemplu diferite persoane pot lucra pe partea de detectare a videourilor, pe cand altele pot crea notificari takedown si edita starea celor ce se găsesc deja în baza de date.</p>
        <br/>
        <h2>3. Workflow</h2><br/>
        <center><img src="images/workflow.jpg" width="90%" height="90%"/></center>
        <br/>
        <h2>4. Tutorial</h2><br/>
        <h3 style="margin-left: 5em;">4.1 Cum se adaugă o nouă intrare</h3>
        <ol>
            <li>Selecteză din top nav-bar(menu) iconița: <img src="images/plus.png" width="20" height="20 "/> </li>
            <li>Completează formularul:</li>
            <ul>
                <li>Link - adaugă link-ul de pe care l-ai găsit. Dacă acesta deja există în baza de date, vei fi redirecționat pe pagina <b><font color="red">fail.html</font></b>.</li>
                <li>Channel Name - adaugă numele canalului de care aparține link-ul.</li>
                <li>Reported - selectează ai creat deja o notificare "takedown".(acest câmp poate fi lăsat liber)</li>
                <li>Solved - selectează starea notificarii, după caz.(acest câmp poate fi lăsat liber)</li>
                <li>Reporter - adaugă numele celui ce a creat notificarea takedown pentru link-ul respectiv.(acest câmp poate fi lăsat liber)</li>
            </ul>
            Dacă nu a existat nicio eroare, vei fi redirecționat pe automat pe pagina <b><font color="#006400">success.html</font></b>.
        </ol>
        <br/>
        <h3 style="margin-left: 5em;">4.2 Cum se editează o intrare</h3>
        <ol>
            <li>Selecteză din top nav-bar(menu) iconița: <img src="images/list.png" width="20" height="20 "/> </li>
            <li>Caută intrarea folosing link-ul video-ului; apasă pe butonul <button class="btn btn-primary" disabled>Edit</button> </li>
            <li>Se va edita după caz:</li>
            <ul>
                <li>Channel Name - adaugă numele canalului de care aparține link-ul.</li>
                <li>Reported - selectează ai creat deja o notificare "takedown".</li>
                <li>Solved - selectează starea notificarii, după caz.</li>
                <li>Reporter - adaugă numele celui ce a creat notificarea takedown pentru link-ul respectiv.</li>
            </ul>
            Dacă nu a existat nicio eroare, vei fi redirecționat pe automat pe pagina <b><font color="#006400">success.html</font></b>.
        </ol>
        <br/>
        <h3 style="margin-left: 5em;">4.3 Cum pot să caut un video</h3>
        <p>Folosind câmpul de Search din top nav-bar(menu), căutarea se poate realiza în funcție de următorii parametrii:</p>
        <ul>
            <li>Link</li>
            <li>Channel Name</li>
            <li>Reporter</li>
        </ul>
        <br/>
        <h2>5. Work in progress</h2><br/>
        <ul>
            <li>Modul de statistică + export PDF</li>
            <li>Filtrare după starea unei notificări</li>
            <li>Autentificare</li>
            <li>Sporirea securității</li>
            <li>Input din fișier</li>
        </ul>
    </div>

    <footer style="background-color: silver">
        <center><img src="images/Logo_Ciresarii2.png"/></center>
    </footer>
    </body>
</html>