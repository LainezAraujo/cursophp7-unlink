<?php 
//REMOVER ARQUIVO

//crio arquivo
$file = fopen("teste.txt", "w+");
//fecha
fclose($file);

//Caso coloque $file, removo apenas variável, por isso o nome do arquivo direto
unlink("teste.txt");

echo "Arquivo removido com sucesso";

 ?>