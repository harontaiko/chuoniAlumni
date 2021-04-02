//load config
require_once "config/config.php";
//AUTO LOAD CORE
spl_autoload_register(function ($className) {
  require_once "libraries/" . $className . ".php";
});

//create db schema
$schema = new Schema();