<?php

    // get working directory
    $path = getcwd();
    //echo($path);

    $items = scandir($path);
    //print_r($items);

    $file = array();

    foreach($items as $item)
    {
        $item_path = $path . DIRECTORY_SEPARATOR . $item;
        if (is_file($item_path))
        {
            $file[] = $item;
        }
        //echo ($item . "\n");
    }

    //print_r($file);

    // Simple File IO read and write

    $text = file_get_contents("sampletext.txt");
    //echo($text);

    $text2 = file('sampletext.txt');
    //echo($text2);

    //write a string to a file
    $textOut = "This is line1\nThis is line2";
    file_put_contents("messages.txt" , $textOut);

    //write an array to file
    $arrayNames = ['Stitch', 'Daisy Duck', 'Kuzco', 'Dory'];
    $strNames = implode("\n", $arrayNames);
    //echo $strNames;
    //output the string to a text file
    file_put_contents('usernames.txt', $strNames);

    // using fopen() for larger txt file
    //fopen($path, $node) -> opnes file with expecefied mode
    //rb - opens file for reading - returns false if file doesn't exist
    //wb - opens file for writing - existing data is deleted and/or creates the file
    //ab - opens file for writing and appends new data
    //xb - opens file for writing, but if file exists returns false

    $file = fopen('usernames.txt', 'rb');
    //$names[] = '';

    while (!feof($file))
    {
        $names[] = trim(fgets($file));
    }

    fclose($file);
    print_r($names);