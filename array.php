<?php
$colors=array("white","black","yellow");
echo $colors[0]."<br>";
echo "<p>Associative array</p>"."<br>";
$identity=array(
			"name"=>"Hiu",
			"age"=>"23",
			"profession"=>"watress"
);
echo "name: ".$identity["name"]."<br>"."age: ".$identity["age"]."<br>"."profession: ".$identity["profession"];
echo "<p>Multidimensional Array</p>".'<br>';
$anime=array(
			array(
				"name"=>"Shingeki no kyojin",
				"genre"=>"action,adventure",
			),
			array(
				"name"=>"Death note",
				"genre"=>"science fiction",
			),
			array(
				"name"=>"Boku no pico",
				"genre"=>"hentai",
			),
);
foreach ($anime as $a) {
 while (list($b, $c) = each ($a)) {
 echo "$b ... $c <br>";
 }
 echo "<hr>";
}
?>