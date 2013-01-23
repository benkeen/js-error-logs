# JS Error Logs

### About 
Many javascript errors on production sites go unnoticed: they're only ever visible to the visitor and never tracked - what 
a wasted opportunity!

This script catches any client-side errors that occur in any modern browser and pass the information - line number, URL, 
stack trace - to the server for logging. It can provide significant insight into problems occurring on your web sites 
and applications that otherwise would go missed.

The JS error logger has three parts:

1. **log.js** - a standalone JS script that captures the error and submits the data via Ajax to...
2. **/server/** - a number of server-side scripts to store the errors. You only need to pick one. I've provided three 
simple PHP scripts that handle the error in slightly different ways: store them in a MySQL Database table, log them 
using PHP's own error_log function and log them in a custom log file. But this list can be expanded to add server-side tracking in 
whatever language you want. *Fork away!* Each server-side logger folder contains a separate README providing a little more 
info.
3. **/tests** - this folder contains some simple tests to confirm errors are being appropriately logged. *Currently pretty 
much empty...*


### The errors
A coupe of comments about the errors themselves.

1. Each browser throws a very different-looking stacktrace, so don't expect consistency on that front.
2. When testing on IE 8, it appears that the browser gets logged as "other" instead of "ie". I'm not sure if this applies
to other IE versions yet.


### How to install
1. Download *log.js* file and add it to your site.
2. Choose the server-side code you want to use to log the errors (see /server).
3. Follow the installation instructions of the particular server-side logger you chose for any additional steps.


### Scripts used
A big thanks to the developers of the following scripts:
* Cross-browser XMLHttpRequest object: http://www.quirksmode.org/js/xmlhttp.html
* Stack trace generation script: https://github.com/eriwen/javascript-stacktrace


Ben Keen
[@vancouverben](https://twitter.com/#!/vancouverben)