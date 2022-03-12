<?php
$idade = 11;
$numeroDePessoas = 1;

echo "Voce so pode entra se tiver parti de 18 anos ou <br>";
echo "a parti de 16 anos acopanhado <br>";

if ($idade == 18) {
echo "voce tem $idade anos e pode entrar no local sozinho.";

} else if ($idade >=16 && $numeroDePessoas > 1) {
    echo "você tem $idade anos, está acompanhado(a), então pode entrar. <br>";
}else {
    echo "você tem $idade e não é permitido a entrada de menor no local , apenas com responsavel !";

}

echo "<br><br> Adeus !";