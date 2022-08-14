<h3 align="center" >Bitocredit PHP Library</h3>
<h5>This library used for integrate with bitocredit api</h5>

# usage

```php
    require "./vendor/autoload.php";
    $api = new ApiPhp("your_token"); // replace your_token with your account token 
    $result = $api->createWallet("wallet_id"); // replace wallet_id with your wallet id
```

# methods

- [createWallet](#createwallet)
- [transactionCheck](#transactioncheck)
- [transactionRecovery](#transactionrecovery)
- [transactionFee](#transactionfee)
- [transactionExample](#transactionexample)


# <a id="createwallet">createWallet</a>

This method used for creating wallet for user
<br>
<br>
endpoint : https://bitocredit.com/api/create/wallet/{token}
<br>
<br>

```php
    $result = $api->createWallet("wallet_id"); // replace wallet_id with your wallet id
```

# <a id="transactioncheck">transactionCheck</a>

This method used for check a transaction is confirmed or not
<br>
<br>
endpoint : https://bitocredit.com/api/transaction/check/{token}
<br>
<br>

```php
    $result = $api->transactionCheck("transaction_hash"); // replace transaction_hash with your transaction hash
```

# <a id="transactionrecovery">transactionRecovery</a>

This method used for check a transaction that is lost in blockchain
<br>
<br>
endpoint : https://bitocredit.com/api/transaction/recovery/{token}
<br>
<br>

```php
    $result = $api->transactionRecovery("transaction_hash"); // replace transaction_hash with your transaction hash
```

# <a id="transactionfee">transactionFee</a>

This method used for check a transaction that is lost in blockchain
<br>
<br>
endpoint : https://bitocredit.com/api/transaction/fee/{token}
<br>
<br>

```php
    $result = $api->transactionFee(); 
```

# <a id="transactionexample">transactionExample</a>

Please only use this api for test ! it's only an example to show how the server sends data to callback after payment confirmation
<br>
<br>
endpoint : https://bitocredit.com/api/transaction/example/callback
<br>
<br>

```php
    $result = $api->transactionExample("transaction_hash"); // replace transaction_hash with your transaction hash
```

