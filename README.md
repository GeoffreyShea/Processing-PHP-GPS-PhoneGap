Processing-PHP-GPS-PhoneGap
===========================
An iOS App created in PhoneGap 3.1 and Xcode sends location information to a web based database. 

Processing queries the database for the latest user locations. (This hack elimates the need for
a web service running on the controller computer running Processing and issues around getting a
static, public IP address.)

Assumes you've got a local web server with PHP and MySQL. (Setting in your Apache config file may
need to be adjusted to connect to clients other than 'localhost'.) I've configured a local
database table with fields: user, long, lat, id and time.

A whitelist setting needs to be made to one of your config.xml files in your PhoneGap / Xcode project
to be able to connect to jQuery remotely. Otherwise, this is the only file you have to edit: https://github.com/GeoffreyShea/Processing-PHP-GPS-PhoneGap/blob/master/PhoneGap-iOS/geo1/platforms/ios/www/index.html

This will be integrated to an Xbee Arduino Audio network: https://github.com/GeoffreyShea/Xbee-Arduino-Audio
