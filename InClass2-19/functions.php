<?php
function resizeImage($uploadedImage)
{
    //manipulate the image
        $image_info = getimagesize($uploadedImage);

        //use var_dump or print_r to see what is being returned from the getimagesize function
        //var_dump($image_info);

        //example to determine which image type was returned 
        $image_type = $image_info[2];
        switch($image_type){
            case IMAGETYPE_JPEG:
                    echo("jpg");
            break;
            case IMAGETYPE_PNG:
                echo("png");
            break;
            case IMAGETYPE_GIF:
                echo("gif");
            break;

        }

        //create the path name and the new smaller image name
        $newpath =  getcwd() . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . "smaller.jpg";
        
        //create a temporary image from the large image
        $oldImage = imagecreatefromjpeg($uploadedImage);
        $oldWidth = imagesx($oldImage); //get the original width
        $oldHeight = imagesy($oldImage); //get the original height
        
        //clculate new ratios based on a max width or height of 300px
        $width_ratio = $oldWidth / 300;
        $height_ratio = $oldHeight / 300;


        //calculate the new height and width maintaining the original ratio
        if ($width_ratio > 1 || $height_ratio > 1)
        {
            $ratio = max($width_ratio, $height_ratio);
            $newHeight = round($oldHeight / $ratio);
            $newWidth = round($oldWidth / $ratio);

            //generate a new "blank canvas" for the new image with the new width and height
            $newImage = imagecreatetruecolor($newWidth, $newHeight);
            //resample (redraw) the new image from the old image
            imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);
            
            //create the new image
            imagejpeg($newImage, $newpath);
            //clean up system temp resources
            imagedestroy($newImage);

        }
        imagedestroy($oldImage);
      

}

?>