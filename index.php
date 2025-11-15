
<?php 


    // echo readfile("file.txt");
    // copy("file.txt","newfile.txt");
    // rename("newfile.txt","oldfile.txt");
    // unlink("oldfile.txt");



    // $file = fopen("newfile.txt", "r");
    // echo fread($file, filesize("newfile.txt"));


    $file = fopen("file.txt", "w");
    // fwrite($file,". another text start here.");
    for ($i = 111111111; $i <= 999999999; $i++) {
        $line = "01".$i."\n";
        fwrite($file,$line);

    }



?>