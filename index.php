<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>mojweb</title>
    </head>
    <body>
        <h1>
            Moj web
        </h1>
        <?php
            echo"nadpis 2  ";
            echo '<br>';
            $x = 10;
            echo $x;
            echo '<br>';

             /* typ a dlzka retazca */
            $meno = "Peter";
            echo $meno;
            echo '<br>';
            var_dump($meno);
            echo '<br>';

             /* POLIA */
            $farby = array("červená","modrá","zelená");
            echo $farby[0];
            echo '<br>';

             /* CYKLUS */
            foreach($farby as $farba){
                echo "Farba: ". $farba. "<br>";
            }

            $data = array("Peter" => 25,
                    "Jana" => 20,
                    "Marek" => 24
                );
            foreach($data as $name => $age){
                echo "$name ma $age rokov <br>";
            }
        ?>
    </body>
</html>