@ECHO off

REM essa variavel ira receber o texto que sera digitado pelo usuario e usado como commit
SET /P commit=escreva o commit:
CLS

git add .
git commit -m "%commit%"
git push origin master
