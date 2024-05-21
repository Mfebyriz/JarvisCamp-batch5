<?php
// Loop
/** For loop */
for ($i=0; $i < 10 ; $i++) {
    echo "$i ";
}
echo "<br>";

/** while loop */
$a = 1;
while ($a <= 10) {
    echo "$a ";
    $a++;
}
echo "<br>";

/** Do while loop */
$b = 0;
do {
    echo "$b ";
    $b++;
} while ($b <= 10);
echo "<br>";

/** foreach loop */
$Array = ["feby", "febi", "fyby"];

foreach ($Array as $key => $value) {
    $no = $key + 1;
    echo $no. " - $value <br>";
}
?>