<form method="get">
        <input type="text" name="score" id="" placeholder="Credit Score">
        <select name="age" id="">
            <?php
                $i = 1;
                while($i < 100)
                {
                    echo("<option value=$i>$i</option>");
                    $i++;
                }
                // for ($i = 1; $i < 100; $i++)
                // {
                //     echo("<option value=$i>$i</option>;");
                // }
            ?>
        </select>
        <input type="submit" value="Get a loan">
    </form>