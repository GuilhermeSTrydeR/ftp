@ECHO off

REM essa variavel ira receber o texto que sera digitado pelo usuario e usado como commit
SET /P commit=escreva o commit:
CLS

GIT add .
GIT commit -m "%commit%"
GIT PUSH ORIGIN MASTER

PAUSE