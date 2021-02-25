<?php
function class_to_subjects($fname = "class_to_subjects.sql") {
	require_once("connect_db.php");
	$query = "SELECT id FROM subjects";
	$results = $pdo->query($query);
	while($result = $results->fetch()) {
		$subjects[] = $result['id'];
	}
	$query = "SELECT id FROM classes";
	$classes = $pdo->query($query);
	$table = stristr($fname, '.', true);
	$contents = "INSERT INTO $table(class_id, subject_id) VALUES\n";
	while($class = $classes->fetch()) {
		$contains = [];
		for ($j = 0; $j < 10; $j++) {
			$id = rand(0, count($subjects)-1);
			while (array_search($subjects[$id], $contains) !== false) $id = ($id+1) % count($subjects);
			$contains[] = $subjects[$id];
			$contents .= "({$class['id']}, {$subjects[$id]}),\n";
		}
	}
	$contents = substr($contents, 0, -2).";";
//        echo "<pre>".$contents."</pre>";
	file_put_contents($fname, $contents);
}
//   class_to_subjects();