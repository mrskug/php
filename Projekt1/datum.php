<!DOCTYPE html >
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <title>Serverprogrammering </title>
    <link type="text/css" rel="stylesheet" href="stil.css"/>
    <script type="text/javascript">
        if (document.all) {
            document.createElement("article");
            document.createElement("footer");
            document.createElement("header");
            document.createElement("section");
            document.createElement("nav");
            document.createElement("aside");
        }
    </script>
</head>

<body>
<div id="sidan">
    <header>
        <table>
            <tr>
                <td><h1>Projekt 1</h1></td>
            </tr>
            <tr>
                <td><h4>- grundläggande php -</h4></td>
            </tr>
        </table>
    </header>
    <nav>
        <ul>
            <li><a href="system.php">system</a></li>
            <li><a href="datum.php">datum</a></li>
            <li><a href="form.php">formulär</a></li>
            <li><a href="epost.php">epost</a></li>
            <li><a href="cookies.php">cookies</a></li>
            <li><a href="session.php">session</a></li>
            <li><a href="filupp.php">filupp</a></li>
            <li><a href="logg.php">logg</a></li>
            <li><a href="forum.php">forum</a></li>
        </ul>
    </nav>
    <div id="innehall">
        <h3>Detta skript räknar ut hur långt det är till ett givet datum.</h3>

        <p>Ge ett datum<br/>
        <p>derp</p>
        <form action="datum.php" method="get">
            dag: <input type="text" name="dd" size="6">.
            månad: <input type="text" name="mm" size="6">.
            år: <input type="text" name="aaaa" size="6">
        </p>
        <input type="submit" value="räkna">
        </form>
        <?php
        print("Du gav datumet " . $_REQUEST['dd'] . "." . $_REQUEST['mm'] . "." . $_REQUEST['aaaa'] . "</p>");
        $nu = time();
        $dag = $_REQUEST['dd'];
        $man = $_REQUEST['mm'];
        $ar = $_REQUEST['aaaa'];
        $nytid = mktime(12, 0, 0, $man, $dag, $ar);
        $skillnad = $nu - $nytid;
        print("<p>Skillnaden är " . $skillnad . " sekunder<br/>");
        print("Skillnaden i dygn är " . abs(floor($skillnad / (3600 * 24))) . " ");
        if ($skillnad < 0) {
            print("i framtiden.</p>");
        } else {
            print("i det förflutna.</p>");
        }
        ?>
        </section>
        <section>
        </section>
        </article>
        <aside>
        </aside>
    </div>
    <footer>
        <table>
            <tr>
                <td>&copy;Copyright,2015</td>
                <td>Webmaster: christoffer.holmberg(at)arcada.fi</td>
                <td>5.3.2015</td>
            </tr>
        </table>
    </footer>
</div>
</body>

</html>
