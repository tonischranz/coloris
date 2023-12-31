<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coloris</title>
    <style>
        body {
            background-color:#222;
        }
        body>main {
            display:flex;
            flex-wrap:wrap;
        }
        body>main>article {
            padding: .5em;
            border-radius: 50%;
            width: 1.25em;
            line-height: 1.25em;
            margin: .25rem;
            text-align: center;
            overflow: hidden;
        }
        body>main>article:hover {
            box-shadow: 1pt 1pt .5em gray;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <main>
        <?php

        for ($i=0; $i < 1000; $i++)
        {
            $c = rand(0,255);
            $r = rand(0,255);
            $g = rand(0,255);
            $b = rand(0,255);

            $t = $r+$g+$b;
            $f = $t > (128 * 3) ? 'black' : 'white';

            $bg = sprintf('%02x%02x%02x', $r, $g, $b);
            $ch = sprintf('26%02x', $c);
            
            ?>

            <article style="background-color:<?="#$bg"?>;color:<?=$f?>">
                <?="&#x$ch;"?>    
            </article>

            <?php
        }

        ?>
    </main>
</body>
</html>
