<?php

$atividades = ["api_google_maps", "call_object_in_object", "closures", "codeignite_framework", "currying", "design_pattern_mvc", "gerador_de_database", "lambda_functions", "object_flag", "object_form", "object_matriz", "object_matriz_invertida", "partial_functions", "slim_micro_framework"];

$escolhido = array_rand($atividades, 1);

echo "<h1>A ATIVIDADE ESCOLHIDA FOI <estilo style='color:red'>".strtoupper($atividades[$escolhido]).".</estilo</h1>";

?>