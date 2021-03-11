<?php

//open/create a file named hello_there.php and set the mode to write(w)
$file = fopen("hello_there.php", "w") ;

//string data to be store in hello_there.php
$data = "<?php 
//This is a comment

echo(`This is a test page!`);
echo(`Exam number two!`);

//This is the end of a comment 
?>";

//write the data into the file
fwrite($file,$data);
fclose($file);


?>
