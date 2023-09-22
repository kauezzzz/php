<?php

define("ESCOLA", "Senai");
$curso = "Técnico em Desenvonvimento de Sistemas";
$tecnologias = ["HTML", "CSS", "Bootstrap", "JS", "PHP"];

// Forma tradicional
// function verificaIdade($idade) {
//     if ($idade >= 18) {
//         return "maior";
//     } else {
//         return "menor";
//     }
// }

// Usando Ternário
function verificaIdade(int $idade):string {
    return $idade >=18 ? "maior" : "menor";
}


// Fechamento é Opcional (Quando o arquivo é só PHP)
/* ?> */