<?php
require dirname(__DIR__).'/vendor/autoload.php';

use Phinx\Console\PhinxApplication;
use Phinx\Wrapper\TextWrapper;

// Load configuration file
$app = new PhinxApplication();

// Create a new migration manager and wrap it
$wrapper = new TextWrapper($app, ['configuration' => __DIR__ . '/../database/phinx.php']);

// Define routes
$action = $_GET['action'] ?? 'status';

switch ($action) {
    case 'migrate':
        $output = $wrapper->getMigrate();
        break;

    case 'rollback':
        $output = $wrapper->getRollback();
        break;

    case 'seed':
        $output = $wrapper->getSeed();
        break;

    default:
        $output = $wrapper->getStatus();
        break;
}

// Output the result
header('Content-Type: text/plain');
echo $output;
