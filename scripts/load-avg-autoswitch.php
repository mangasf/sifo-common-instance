<?php
// DON'T TOUCH THIS LINES:
define( 'ROOT_PATH', realpath( dirname( __FILE__ ) . '/../../..' ) );
require ROOT_PATH . '/vendor/sifophp/sifo/src/Sifo/CLBootstrap.php';

// The controller to run customization.
\Sifo\CLBootstrap::$script_controller = 'scripts/load/avg/autoswitch'; // <-- Should customize only this line.

// DON'T TOUCH THIS LINE:
\Sifo\CLBootstrap::execute();
?>
