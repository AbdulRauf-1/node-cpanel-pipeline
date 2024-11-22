<?php
// Path to your working directory
$workingDir = '/home/trimworldwide/rauf.trimworldwide.com';

// Full path to npm (from your terminal output)
$npmPath = '/home/trimworldwide/.nvm/versions/node/v18.20.4/bin/npm';

// Ensure permissions are correct before running the command
$permissionsCheck = shell_exec("chmod -R 777 $workingDir && chmod +x $npmPath 2>&1");

// Run npm install
$output = shell_exec("cd $workingDir && $npmPath install 2>&1");

// Display permission checks and npm output
echo "Permissions Check Output:<br />" . nl2br($permissionsCheck) . "<br />";
echo "NPM Install Output:<br />" . nl2br($output) . "<br />";
?>
