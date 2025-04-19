<?php 
 function validarNome($nome) {
    $erros = [];

    if (mb_strlen($nome, "UTF-8") < 10) {
        $erros[] = "O nome deve ter pelo menos 10 caracteres.<br>   ";
    }

   
    if (strpos($nome, " ") === false) {
        $erros[] = "Inclua ao menos um sobrenome.<br>";
    }

    $partes = explode(" ", trim($nome));
    foreach ($partes as $parte) {
        if (mb_substr($parte, 0, 1, "UTF-8") !== mb_strtoupper(mb_substr($parte, 0, 1, "UTF-8"), "UTF-8")) {
            $erros[] = "Todas as palavras devem começar com letra maiúscula.<br>";
            break;
        }
    }

    return empty($erros) ? "Nome válido!" : implode("\n", $erros);
}

echo validarNome("jairoPinheiro");
function gerarSlug($texto) {
    $texto = mb_strtolower($texto, "UTF-8");              // tudo minúsculo
    $texto = preg_replace('/[áàãâä]/u', 'a', $texto);     // substitui acentos
    $texto = preg_replace('/[éèêë]/u', 'e', $texto);
    $texto = preg_replace('/[íìîï]/u', 'i', $texto);
    $texto = preg_replace('/[óòõôö]/u', 'o', $texto);
    $texto = preg_replace('/[úùûü]/u', 'u', $texto);
    $texto = preg_replace('/[ç]/u', 'c', $texto);
    $texto = preg_replace('/[^a-z0-9 ]/', '', $texto);    // remove símbolos
    $texto = preg_replace('/\s+/', '-', trim($texto));    // espaços viram traços

    return $texto;
}

echo gerarSlug("Curso de PHP Moderno"); // curso-de-php-moderno

?>