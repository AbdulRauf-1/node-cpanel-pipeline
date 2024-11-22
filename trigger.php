<?php
// Path to your working directory
$workingDir = '/home/trimworldwide/rauf.trimworldwide.com';

// Full path to node and npm binaries
$nodePath = '/home/trimworldwide/.nvm/versions/node/v18.20.4/bin/node';
$npmPath = '/home/trimworldwide/.nvm/versions/node/v18.20.4/bin/npm';

// Ensure permissions for the working directory and binaries
$permissionsCheck = shell_exec("chmod -R 775 $workingDir && chmod +x $nodePath $npmPath 2>&1");

// Run npm install with the correct path
$output = shell_exec("cd $workingDir && $npmPath install 2>&1");

// Display permission checks and npm output
echo "Permissions Check Output:<br />" . nl2br($permissionsCheck) . "<br />";
echo "NPM Install Output:<br />" . nl2br($output) . "<br />";
?>
