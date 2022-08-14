<?php

namespace Bitocredit\PhpGateway;


class Api implements BitocreditInterface
{

    use Request;

    protected $header = [
        "Content-Type" => "application/json",
    ];

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function createWallet($walletId)
    {
        $data["wallet_id"] = $walletId;
        return $this->sendRequest("create/wallet/" , "post" , $this->header , $data , true);
    }

    public function transactionFee()
    {
        return $this->sendRequest("transaction/fee/" , "get" , $this->header);
    }

    public function transactionExampleCallback($transactionId)
    {
        $data["transaction_id"] = $transactionId;
        return $this->sendRequest("transaction/example/callback" , "post" , $this->header , $data);
    }

    public function transactionCheck($transactionId , $walletAddress)
    {
        $data["transaction_id"] = $transactionId;
        $data["wallet_address"] = $walletAddress;
        return $this->sendRequest("transaction/check/" , "post" , $this->header , $data , true);
    }

    public function transactionRecovery($transactionId)
    {
        $data["transaction_id"] = $transactionId;
        return $this->sendRequest("transaction/recovery/" , "post" , $this->header , $data , true);
    }
}