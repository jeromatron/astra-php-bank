# Creating a bank transaction history with PHP + Astra's Stargate REST API

## Getting Started

- Start by creating free tier Astra database found at [https://astra.datastax.com](https://astra.datastax.com).
- Create a keyspace called `bank`.
- Import the [Bank Transactions](/bank-transactions.studio-nb.tar)Studio notebook that contains the `transactions` schema, some example queries, and example SAI indexes.  This schema is also found in the [transactions.cql](/transactions.cql) file.
- Add data with DSBulk.

## Add to XAMPP or Similar PHP/Web Stack

- Install the XAMPP stack from the [apache friends](https://www.apachefriends.org/index.html) website.
- Put the contents of the [htdocs](/htdocs) directory into the XAMPP or web server's `htdocs/bank` directory.
- Copy the `db-sample.ini` file to `db.ini` and replace the values with the information from your Astra database.
- Go to `http://localhost/bank` to find the interface to your bank transactions store.