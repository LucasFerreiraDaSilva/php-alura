<?php
$idade = 21;
$nome = "Lucas";

echo "Voce so pode entra se tiver parti de 18 anos . <br>"; 

if ($idade == 18 || $idade > 18) {
echo "voce tem $idade anos e pode entrar no local";

} else {
echo "você tem $idade é permitido a entrada de menor no local";
}