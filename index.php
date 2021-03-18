<html>
    <head>
        </title>Taller 1 </title>
    </head>
    <body>
    <?php
        $varname = "Didier";
        $varedad  = 20;
        $varb    = true;
        $varh    = 1.75;
        $varf    = "07-11-1999";
    ?>
        <h1>
            <?php
                echo  $varname;
            ?>
        </h1>

        <h2>
            <?php
                echo $varedad;
            ?>
        </h2>

        <?php
        $posiciones=[
            "Asus",
            "Gygabyte",
            "NXzt",
            "Intel",
            "AMD"
        ];

        $componetes_PC = count($posiciones);
        echo "Mi vector tiene".$componetes_PC;

        for ($i=0; $i < $componetes_PC; $i++) 
        { 
            echo $posiciones[ $i];
        }
        ?>
    
    </body>
</html>
