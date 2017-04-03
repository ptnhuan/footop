
<link href="csss/demodoc.css" rel="stylesheet" type="text/css"/>
<?php

require_once './minify.php';
OptimeCss();
function OptimeCss(){


$tenfile = 'csss/demodoc.css';
     
    if(!file_exists($tenfile))
    {
        $files_and_folder = glob('css/*');
        foreach ($files_and_folder as $reads):
         $lines = file_get_contents($reads);
          
          
          $fp = @fopen($tenfile, "a+");
          $liness = file_get_contents($tenfile);

         fwrite($fp, $lines);

        fclose($fp);
        endforeach;
    }
    if(file_exists($tenfile)){
            $files_and_folder2 = glob('css/*');
           
                unlink($tenfile);
                foreach ($files_and_folder2 as $reads):
                 $lines = file_get_contents($reads);
          
          
                     $fp = @fopen($tenfile, "a+");
                     $liness = file_get_contents($tenfile);

                     fwrite($fp, $lines);

                  fclose($fp);
              endforeach;
            }

$str = file_get_contents($tenfile);

// echo
minify_css($str);

//­ save as `style.min.css`
file_put_contents($tenfile, minify_css($str));



}

     
