<?php
// Path to your working directory
$workingDir = '/home/trimworldwide/rauf.trimworldwide.com';

// Full path to Node.js and npm binaries
$nodePath = '/home/trimworldwide/.nvm/versions/node/v18.20.4/bin/node';
$npmPath = '/home/trimworldwide/.nvm/versions/node/v18.20.4/bin/npm';

// Log file for debugging
$logFile = $workingDir . '/npm_install_log.txt';

// Ensure permissions for the Node.js binaries
$setBinaryPermissions = shell_exec("chmod +x $nodePath $npmPath 2>&1");

// Ensure permissions for the working directory
$setDirPermissions = shell_exec("chmod -R 775 $workingDir 2>&1");

// Export PATH and run npm install
$exportPath = 'export PATH=$PATH:/home/trimworldwide/.nvm/versions/node/v18.20.4/bin';
$npmInstallCommand = "$exportPath && cd $workingDir && $npmPath install --force 2>&1";

// Execute the command
$output = shell_exec($npmInstallCommand);

// Write output to a log file
file_put_contents($logFile, "Binary Permissions Output:\n" . $setBinaryPermissions . "\n");
file_put_contents($logFile, "Directory Permissions Output:\n" . $setDirPermissions . "\n", FILE_APPEND);
file_put_contents($logFile, "NPM Install Output:\n" . $output . "\n", FILE_APPEND);

// Display success message
echo "NPM installation triggered. Check $logFile for details.";
?>
