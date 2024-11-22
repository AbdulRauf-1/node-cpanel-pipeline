<?php
// Path to your working directory
$workingDir = '/home/trimworldwide/rauf.trimworldwide.com';

// Full path to npm
$npmPath = '/home/trimworldwide/.nvm/versions/node/v18.20.4/bin/npm';

// Command to run npm install
$output = shell_exec("cd $workingDir && $npmPath install 2>&1");

// Output the result
echo nl2br($output);
?>
