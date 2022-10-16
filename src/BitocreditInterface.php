<?php
namespace Bitocredit\PhpGateway;


interface BitocreditInterface
{
    public function createWallet($walletId , $network);
    public function transactionFee();
    public function transactionExampleCallback($transactionId);
    public function transactionCheck($transactionId , $walletAddress);
    public function transactionRecovery($transactionId);
}
