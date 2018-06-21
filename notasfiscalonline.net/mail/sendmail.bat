@echo off
for %%N in (1 2) do start c:/notasfiscalonline.net/mail/server%%N/sendmail.bat
mailclean.bat
exit