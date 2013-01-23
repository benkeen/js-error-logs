# JS Error Logs - error_log

This code interprets the data sent from log.js and uses the native PHP *error_log* function available in PHP 4 and 5
to log the error in PHP's own system logger. 
http://php.net/manual/en/function.error-log.php

To allow searching of the data, all JS error lines appear with a **JS ERROR:** prefix. But feel free to edit the code 
to enter whatever prefix you want (or remove it altogether).

### How to install
1. Upload the logError.php file to your server somewhere.
2. Update the ***logErrorURL*** setting in log.js to point to the *logError.php* file. While 
setting it up, you might want to change the **debugMode** setting to true. That will output a little
more information to the console - i.e. what's being sent to the server, and what comes back from the 
server.

Ben Keen
[@vancouverben](https://twitter.com/#!/vancouverben)