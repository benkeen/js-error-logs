# JS Error Logs - flatfile error logs

This code interprets the data sent from log.js and logs the JS error information in a custom log file, using PHP's 
own error_log function. 
http://php.net/manual/en/function.error-log.php

Personally, I wouldn't suggest using this option - the /server/php-error-log code, which appends the logs to 
PHP's own error log file is generally a better approach. That said...

### How to install
1. Upload the logError.php file to your server somewhere.
2. Update the ***logErrorURL*** setting in log.js to point to the *logError.php* file. While 
setting it up, you might want to change the **debugMode** setting to true. That will output a little
more information to the console - i.e. what's being sent to the server, and what comes back from the 
server.
3. Try loading up /tests/index.html in your browser. When you click the button, it should throw an
error and submit the error information to the server for storage in the database.

By default, this script appends the log information to a file called errors.log in the same folder as 
logError.php. However this is generally inadvisable, unless the script is located outside the webroot. 
I strongly suggest you target a file outside the webroot to prevent prying eyes looking at your error 
logs.

Ben Keen
[@vancouverben](https://twitter.com/#!/vancouverben)