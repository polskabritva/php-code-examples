<?php
try {
	$pdo = new PDO('mysql:host=localhost;dbname=practice', 
								 'username', 
								 'password',
								 [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch(PDOExeption $e) {
	echo "Невозможно подключиться к базе данных";	
}