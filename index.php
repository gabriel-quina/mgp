require 'vendor/autoload.php'

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

echo $_ENV['ENV_HELLO'];
