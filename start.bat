@ECHO OFF
set SRVPATH=C:\Dmitry\php\nginx\nginx
start /D%SRVPATH% nginx.exe

C:\Dmitry\php\nginx\RunHiddenConsole.exe  C:\Dmitry\php\nginx\php\php-cgi.exe -b 127.0.0.1:9000 -c C:\Dmitry\php\nginx\php\php.ini