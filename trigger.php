<?php
// Path to your working directory
$workingDir = '/home/trimworldwide/rauf.trimworldwide.com';

// Command to run npm install
$output = shell_exec("cd $workingDir && npm install 2>&1");

// Output the result
echo nl2br($output);
?>