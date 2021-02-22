<?php

$account_id = $_GET['account_id'];

include('common.php');

require_once('AuthDb.php');
$auth_token = AuthDb::getInstance()->getAuthToken();

$url = $ASTRA_URL . '/v2/keyspaces/' . $KEYSPACE . '/' . $TABLE . '/' . $account_id;
$request = curl_init($url);
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
curl_setopt($request, CURLOPT_HTTPHEADER, array(
    'Accept: application/json',
    'X-Cassandra-Token: ' . $auth_token
));
$response = curl_exec($request);

// echo $response;

$decoded = json_decode($response);
$transaction_count = $decoded->{'count'};
$transactions = $decoded->{'data'};

echo '
<html>
<head>
	<style>
		table, th, td {
			text-align: center;
			border: 1px solid black;
			padding: 5px;
		}
	</style>
</head>
<body>
<h2>Transactions for account id: ' . $account_id . '</h2>
<p>Transaction count: ' . $transaction_count . '</p>
<table>
	<tr>
		<th>Transaction ID</th>
		<th>Transaction status</th>
		<th>Amount</th>
		<th>Medium</th>
		<th>Merchant ID</th>
		<th>Category</th>
	</tr>
';
foreach ($transactions as $transaction) {
	echo '
	<tr>
		<td>' . $transaction->transaction_id . '</td>
		<td>' . $transaction->tx_status . '</td>
		<td>' . $transaction->amount . '</td>
		<td>' . $transaction->medium . '</td>
		<td>' . $transaction->merchant_id . '</td>
		<td>' . $transaction->category . '</td>
	</tr>
';
}
echo '
</table>
</body>
</html>
';

?>