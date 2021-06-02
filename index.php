<html>
    <head>
        <title>Welcome to leqi zou's personal website!</title>
    </head>
    <body>
        <h1>This is Leqi Zou's page.</h1>
        The current time: 
        <?php
            print time();
        ?>
        <h1>Are you lucky today?</h1>
        <?php
        $v = rand(0, 100);
        if ($v > 50) {
            print "You are lucky!";
        } else {
            print "You are unlucky!";
        }
        ?>
        <p></p>
        <a href="second.html">Go to second page.</a>
    </body>
</html>
