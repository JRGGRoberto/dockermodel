<?php

echo '<h1>Docker - PHP 8</h1>';
echo '<h2>http://sis8.localhost/</h2>';
echo 'Go to: <a href="http://sis7.localhost/">Sis7 PHP7</a><hr>';

$itens = new DirectoryIterator('./');
foreach ($itens as $item) {
    if ($item->gettype() === 'dir') {
        $diretorios[] = $item->getFilename();
    } else {
        $arquivos[] = $item->getFilename();
    }
}

echo '<ul>';
$x = 0;
foreach ($diretorios as $diretorio) {
    if ($x > 1) {
        if ($diretorio != 'assets') {
            echo '<li><a href="./'.$diretorio.'" target="_blank"> 📁 '.strtoupper($diretorio).'</a></li>';
        }
    }
    ++$x;
}

foreach ($arquivos as $arquivo) {
    if ($arquivo != 'index.php') {
        echo '<li><a href="./'.$arquivo.'" > 📄 '.strtoupper($arquivo).'</a></li>';
    }
}

echo '</ul>';
