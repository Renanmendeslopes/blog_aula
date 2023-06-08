<?php
$soma = 0;

for ($numero = 10; $numero <= 500; $numero++) {
    if ($numero % 2 === 0) {
        $soma += $numero;
    }
}

echo "A soma dos números pares entre 10 e 500 é: " . $soma;
?>