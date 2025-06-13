<?php
$conn = @pg_connect("host=postgres_db dbname=mydb user=user password=pass"); // @ подавляет предупреждения
if ($conn) {
    echo "Connected to PostgreSQL successfully!";
} else {
    echo "Connection failed: " . pg_last_error();
}
?>