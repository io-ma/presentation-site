<?php
     $files = glob("poze/*.*");
     for ($i=0; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
         );

         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {
             echo '<a href="' . $image . '">' . '<img src="' . $image . '">' . '</a>'
;
            } else {
                continue;
            }
          }
?>
