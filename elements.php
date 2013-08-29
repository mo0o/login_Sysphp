<?php

        include"auth.inc";

?>

<!DOCTYPE html>
<html>
<head>

    <title>A basic Line charts example</title>

    <meta name="description" content="A basic example of an RGraph Line chart for implementation help.It shows a simple example and there is little happening on the page so the source is easy to navigate." />
    <meta name="googlebot" content="NOODP">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8" />
    <!-- 1/3. Include the RGraph libraries -->
    <script src="/libraries/RGraph.common.core.js" ></script>
    <script src="/libraries/RGraph.line.js" ></script>
    <!--[if lt IE 9]><script src="http://javascript.www.rgraph.net/libraries/combined.html/excanvas.js"></script><![endif]-->
</head>
<div id="container">
<body>
<nav>
                <ul>
                    <li class="current"><a href="home.php">Home</a></li>
                    <li><a href="elements.php">Elements</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        
            <section>
                <p>Et malesuada fames ac turpis egestas.<br />
                    Habitant morbi tristique:</p>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                <h1>A basic Line charts example</h1>

    <!-- 2/3. This is the canvas that the graph is drawn on -->
    <canvas id="cvs" width="600" height="200">[No canvas support]</canvas>

    <!--
        3/3. This creates and displays the graph. As it is here, you can call this from the window.onload event,
             allowing you to put it in your pages header.
    -->
    <script>
        window.onload = function ()
        {
            var line = new RGraph.Line('cvs', [84,76,79,84,86,52,53]);
            line.Set('chart.hmargin', 5);
            line.Set('chart.tickmarks', 'endcircle');
            line.Set('chart.labels', ['Gary','Hoolio','Brad','Olga','Pete','Luis','John']);
            line.Draw();
        }
    </script>
            </section>
        
            <aside>
                <h3>Sidebar</h3>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas:</p>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    <li>Aliquam tincidunt mauris eu risus.</li>
                    <li>Vestibulum auctor dapibus neque.</li>
                </ul>
            </aside>
        
            <footer>
                <p>
                    Copyright &copy;  rd 2013.<br />
                </p>
            </footer>
        </div>
    

</body>
</html>