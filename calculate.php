<?php
include 'is_update.php';
if ($is_update) exit("UPDATE");
if (!isset($_POST['expr']) || $_POST['expr'] == "" || !isset($_POST['arg']) || $_POST['arg'] == "" || !isset($_POST['params']) 
	|| !isset($_POST['def']) || !isset($_POST['bottom']) || !isset($_POST['top'])) {
	exit("ERROR");
}
else{
    $expr = $_POST['expr'];
	$arg = $_POST['arg'];
    $params = $_POST['params'];
	$def = $_POST['def'];
	$bottom = $_POST['bottom'];
	$top = $_POST['top'];
}
if (strlen($expr) > 2000 || strlen($arg) > 30 || strlen($bottom) > 100 || strlen($top) > 100) {
	exit("ERROR");
}
if (preg_match("~[^a-z0-9_]~", $arg) || preg_match("~^([ie]|pi)$~", $arg) || preg_match("~[^a-z0-9\-*/^.)(+_]~", $expr) 
	|| preg_match("~[^a-z]_~", $expr) || preg_match("~_[^a-z0-9]~", $expr)
	|| preg_match("~[^a-z]_~", $arg) || preg_match("~_[^a-z0-9]~", $arg) 
	|| ($def !== "0" && $def !== "1") || preg_match("~[^a-z0-9\-*/^.)(+_]~", $bottom) 
	|| preg_match("~[^a-z]_~", $bottom) || preg_match("~_[^a-z0-9]~", $bottom)
	|| preg_match("~[^a-z0-9\-*/^.)(+_]~", $top) 
	|| preg_match("~[^a-z]_~", $top) || preg_match("~_[^a-z0-9]~", $top)) {
    exit("ERROR");
}
if (substr_count($expr, "(") != substr_count($expr, ")")
	|| substr_count($bottom, "(") != substr_count($bottom, ")")
	|| substr_count($top, "(") != substr_count($top, ")")) {
    exit("ERROR");
}
$funcs = [
    "asinh","acosh","atanh","acoth","asech","acsch",
    "asec","acsc",
    "asin","acos","cosh","sinh","sin",
    "cos","atan","acot","tanh","tan","coth","cot",
    "sech","csch","sec","csc",
    "exp","sqrt","log%n", "log","abs"
];
$funcsUpper = [
    "ASINH","ACOSH","ATANH","ACOTH","ASECH","ACSCH",
    "ASEC", "ACSC",
    "ASIN","ACOS","COSH","SINH","SIN",
    "COS","ATAN","ACOT","TANH","TAN","COTH","COT",
    "SECH","CSCH","SEC","CSC",
    "EXP","SQRT","LOG%n", "LOG","ABS"
];
$const = ["pi","mu","nu","phi","psi","tau","alpha","beta","eta","gamma","sigma","rho","inf","minf"];
$constUpper = ["PI","MU","NU","PHI","PSI","TAU","ALPHA","BETA","ETA","GAMMA","SIGMA","RHO","INF","MINF"];
$values = ["true","false","expandtable"];
$valuesUpper = ["TRUE","FALSE","EXPANDTABLE"];
$expr = str_replace($funcs, $funcsUpper, $expr);
$expr = str_replace($const, $constUpper, $expr);
$params = str_replace($values, $valuesUpper, $params);
if (preg_match("/[a-z.]{2}/", $expr) || preg_match("/[a-z.0-9]{2}/", $params)) {
    exit("ERROR");
}
$expr = strtolower($expr);
$params = strtolower($params);
if ($def === "0") {
	$expr = escapeshellarg("integrated({$expr},{$arg},[$params])\$");
}
else {
	$expr = escapeshellarg("defintd({$expr},{$arg},{$bottom},{$top},[$params])\$");
}
$cmd = "example --batch-string=$expr";
$res = exec($cmd, $out, $val);
$i = 0;
$n = count($out);
while(substr($out[$i], 0, 1) !== "[" && $i < $n) $i++;
if ($i == $n) exit("ERROR");
$out = array_slice($out, $i);
unset($v);
echo "[" . implode(",", $out) . "]";