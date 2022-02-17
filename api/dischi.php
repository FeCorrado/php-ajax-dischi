<?php
include "../database/data.php";

header("Content-Type: application/json");

echo json_encode($dischi);
