<?php

	class Connection {

		public function dbConnect() {

			$dbConnection = new PDO("mysql:host=localhost; dbname=login", "root", "root");
			$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $dbConnection;
		}
	}

?>