<?php

namespace Bitocredit\PhpGateway;


class ApiPhp implements BitocreditInterface
{
    use Request;
    
    public $baseURL;
    public $token;

    protected $header = [
        "Content-Type" => "application/json",
    ];

    function __construct($baseURL_const = null , $token_const = null)
    {
        $this->baseURL = $baseURL_const == null ? baseURL : $baseURL_const;
        $this->token = $token_const == null ? token : $token_const;
    }

    public function createWallet($walletId , $network)
    {
        $data["wallet_id"] = $walletId;
        $data["network"] = $network;
        return $this->sendRequest("create/wallet/" , "post" , $this->header , $data , true);
    }

    public function transactionFee()
    {
        return $this->sendRequest("transaction/fee/" , "get" , $this->header , [] , true);
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