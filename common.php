<?php

$ini = parse_ini_file("db.ini");

$ASTRA_DB_ID = $ini['ASTRA_DB_ID'];
$ASTRA_DB_REGION = $ini['ASTRA_DB_REGION'];
$ASTRA_DB_USERNAME = $ini['ASTRA_DB_USERNAME'];
$ASTRA_DB_PASSWORD = $ini['ASTRA_DB_PASSWORD'];

$KEYSPACE = 'bank';
$TABLE = 'transactions';

$ASTRA_URL = 'https://' . $ASTRA_DB_ID . '-' . $ASTRA_DB_REGION . '.apps.astra.datastax.com/api/rest';

?>