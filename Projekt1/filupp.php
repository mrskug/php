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
        <article>
            <h3>Filuppladdning i php</h3>
            <section>
                Med detta skript kan du ladda upp filer på servern.(max. 200 kB)<br/>
                Filtyper som godkänns är: gif, jpg, jpeg och png. <br/>

                <form action="filupp.php" method="post" enctype="multipart/form-data">
                    <label for="file">name att ladda upp:</label>
                    <input type="file" name="file" id="file"><br>
                    <input type="submit" name="skicka" value="Skicka">
                </form>

            </section>
            <section>
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
                <td>&copy;Copyright,2014</td>
                <td>Webmaster: johnny.bistrom(at)arcada.fi</td>
                <td>7.1.2014</td>
            </tr>
        </table>
    </footer>
</div>
</body>

</html>
