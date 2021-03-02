@ECHO off

REM essa variavel ira receber o texto que sera digitado pelo usuario e usado como commit
SET /P commit=escreva o commit:
CLS

git remote add origin https://github.com/guilhermestryder/ftp.git

git add .
git commit -m "%commit%"
git push origin master
