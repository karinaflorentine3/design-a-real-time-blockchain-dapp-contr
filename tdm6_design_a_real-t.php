<?php

/*
 * TDM6 Real-Time Blockchain dApp Controller Configuration File
 */

// Blockchain Network Settings
$config['blockchain'] = [
    'network' => 'ethereum',
    'provider' => 'infura',
    'api_key' => 'YOUR_INFURA_API_KEY',
    'chain_id' => 1, // Mainnet
];

// dApp Settings
$config['dapp'] = [
    'name' => 'Real-Time Blockchain dApp',
    'contract_address' => '0x...YOUR_CONTRACT_ADDRESS...',
    'abi' => [...YOUR_CONTRACT_ABI...],
];

// Real-Time Data Feed Settings
$config['realtime'] = [
    'feed_provider' => 'web3',
    'feed_interval' => 10, // seconds
    'websocket_endpoint' => 'wss://mainnet.infura.io/ws/v3/YOUR_PROJECT_ID',
];

// Database Settings
$config['database'] = [
    'type' => 'mysql',
    'host' => 'localhost',
    'username' => 'YOUR_DB_USERNAME',
    'password' => 'YOUR_DB_PASSWORD',
    'name' => 'tdm6_realtime_dapp',
];

// Controller Settings
$config['controller'] = [
    'listen_port' => 8080,
    'max_connections' => 100,
    'response_timeout' => 30, // seconds
];

?>