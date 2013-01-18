# JS Error Logs

### *** this script is currently incomplete. Come back in a week or so. :) ***

Many javascript errors on production sites go unnoticed: they're only ever visible to the visitor and never tracked - what a wasted opportunity!

This script catches any client-side errors that occur in any modern browser and pass the information - line number, URL, stack trace - to the server for logging. It can provide significant insight into problems occurring on your web sites and applications that otherwise would go missed.

The JS error logger comes is in two parts:
*log.js* - a standalone JS script that captures the error and submits the data via Ajax to…
*/server/* - any of the following server-side scripts to log the information. Initially I'll provide two simple PHP scripts: one that logs the information in a database, and one that appends the information to a log file. But this section can be expanded to add server-side tracking in whatever language you want. Fork away!

Ben Keen
[@vancouverben](https://twitter.com/#!/vancouverben)
