<?php
namespace Reza\Bitocredit;


interface BitocreditInterface
{
    public function createWallet($walletId);
    public function transactionFee();
    public function transactionExampleCallback($transactionId);
    public function transactionCheck($transactionId , $walletAddress);
    public function transactionRecovery($transactionId);
}
