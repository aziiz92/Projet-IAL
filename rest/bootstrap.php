<?php

require_once 'src/Config/Database.php';


$db = (new Database())->getConnection();
