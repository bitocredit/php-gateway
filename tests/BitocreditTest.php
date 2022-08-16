<?php

namespace Bitocredit\PhpGateway\Tests;

use Bitocredit\PhpGateway\ApiPhp;
use PHPUnit\Framework\TestCase;

include_once  __DIR__ . "/../config.php";

class BitocreditTest extends TestCase
{
    protected $api;
    protected $token = token_test;
    protected $transaction = transaction_test;
    protected $wallet = wallet_address_test;

    protected function setUp(): void
    {
        $this->api = new ApiPhp($this->token);
    }

    public function testCreateWallet()
    {
        $result = $this->api->createWallet("1");
        $this->assertSame($result['status'], 200);
    }

    public function testTransactionCheck()
    {
        $result = $this->api->transactionCheck($this->transaction, $this->wallet);
        $this->assertSame($result['status'], 200);
    }

    public function testTransactionRecovery()
    {
        $result = $this->api->transactionRecovery($this->transaction);
        $this->assertSame($result['status'], 200);
    }

    public function testTransactionExample()
    {
        $result = $this->api->transactionExampleCallback($this->transaction);
        $this->assertSame($result['status'], 200);
    }

    public function testTransactionFee()
    {
        $result = $this->api->transactionFee();
        $this->assertSame($result['status'], 200);
    }

}