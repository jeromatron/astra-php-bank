CREATE TABLE IF NOT EXISTS bank.transactions (
    account_id text,
    transaction_id text,
    transaction_date timestamp,
    amount double,
    merchant_id text,
    medium text,
    tx_status text,
    description text,
    category text,
    PRIMARY KEY ((account_id), transaction_date)
  ) WITH CLUSTERING ORDER BY (transaction_date DESC);