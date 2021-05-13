<?php

$menuMetro = ['box1' => "background-color:green; width:100%; height:100%;" , 'box2' => "background-color:blue; width:10%; height:10%; display:inline-block; margin:1%" , 'box3' => "margin-top:15%; display:block; margin-left:auto; margin-right:auto"];

$names = ['Dashboards', 'Cronogramas', 'Noticias', 'Calculadora', 'Mapa Mentais'];

echo "<form method='GET'>";
echo "<nav style='".$menuMetro['box1']."'>";

echo "<div style='".$menuMetro['box2']."'><button type='submit' name='".$names[0]."' style='".$menuMetro['box3']."'>DASHBOARDS</button></div>";

echo "<div style='".$menuMetro['box2']."'><button type='submit' name='".$names[1]."' style='".$menuMetro['box3']."'>CRONOGRAMAS</button></div>";

echo "<div style='".$menuMetro['box2']."'><button type='submit' name='".$names[2]."' style='".$menuMetro['box3']."'>NOTICIAS</button></div>";

echo "<div style='".$menuMetro['box2']."'><button type='submit' name='".$names[3]."' style='".$menuMetro['box3']."'>CALCULADORA</button></div>";

echo "<div style='".$menuMetro['box2']."'><button type='submit' name='".$names[4]."' style='".$menuMetro['box3']."'>MAPA MENTAIS</button></div>";

echo "</nav>";
echo "</form>";

?>