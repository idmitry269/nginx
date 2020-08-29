@ECHO OFF
set SRVPATH=C:\nginx\nginx
start /D%SRVPATH% nginx.exe

C:\nginx\php\php-cgi.exe -b 127.0.0.1:9000 -c C:\nginx\php\php.ini