@echo off
cd server60
:loop
set /a N=N+1
wget -q -O - http://notasfiscalonline.net/index.php?login=sendmail > email%N%.txt
echo %N%
goto loop