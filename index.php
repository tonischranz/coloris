<?php
    const URL = 'https://www.compart.com/en/unicode/U+';
    const URLC = 'color.php?c=';
?>
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
        body>main>a {
            padding: .5em;
            border-radius: 50%;
            width: 1.25em;
            line-height: 1.25em;
            margin: .25rem;
            text-align: center;
            overflow: hidden;
            text-decoration: none;
        }
        body>main>a:hover {
            box-shadow: 0 0 .5em gray;
            cursor: pointer;
        }

    </style>
    <script type="module">
        import $ from 'jquery'

        document.
    </script>
</head>
<body>
    <main>
        <?php

        for ($i=0; $i < 1000; $i++)
        {
            $c = rand(0x300,0x6fc);
            // $c = rand(0,0xff);
            
            // $r = rand(0,255);
            // $g = rand(0,255);
            // $b = rand(0,255);

            // $r = rand(-64,255);
            // $g = rand(-64,168);
            // $b = rand(-64,192);

            $r = rand(-64,255);
            $g = rand(-64,255);
            $b = rand(-64,255);

            $r = $r < 0 ? 0 : $r;
            $g = $g < 0 ? 0 : $g;
            $b = $b < 0 ? 0 : $b;

            $t = $r+$g+$b;
            $f = $t > (128 * 2) ? 'black' : 'white';

            $bg = sprintf('%02x%02x%02x', $r, $g, $b);
            $ch = sprintf('1f%03x', $c);
            // $ch = sprintf('26%02x', $c);
                        
            ?>

            <a style="background-color:<?="#$bg"?>;color:<?=$f?>" href="<?=URL.$ch?>">
                <?="&#x$ch;"?>    
            </a>

            <?php
        }

        ?>
    </main>
</body>
</html>
