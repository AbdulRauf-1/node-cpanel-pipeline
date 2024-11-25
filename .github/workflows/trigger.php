<?php
// Path to your working directory
$workingDir = '/home/trimworldwide/rauf.trimworldwide.com';

// Full path to Node.js and npm binaries
$nodePath = '/home/trimworldwide/.nvm/versions/node/v18.20.4/bin/node';
$npmPath = '/home/trimworldwide/.nvm/versions/node/v18.20.4/bin/npm';

// Log file for debugging
$logFile = $workingDir . '/npm_install_log.txt';

// Ensure permissions for the working directory
shell_exec("chmod -R 775 $workingDir 2>&1");

// Run npm install
$command = "cd $workingDir && $npmPath install --force 2>&1";
$output = shell_exec($command);

// Write output to a log file
file_put_contents($logFile, $output);

// Display output
echo "NPM installation triggered. Check $logFile for details.";
?>
