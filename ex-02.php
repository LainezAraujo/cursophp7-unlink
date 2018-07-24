<?php 

//mkdir =cria diretório

//não pode conter dentro desse array "." e ".."
		
if (!is_dir("images")) mkdir("images");
	
	foreach(scandir("images") as $item) {
		if (!in_array($item, array(".",".."))) {
			unlink("images/".$item);
		}
	}

echo "OK";

 ?>