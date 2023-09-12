@echo off 
cd netcore31
setlocal enableextensions 


for /f "tokens=*" %%a in ( 
'"%cd%\..\..\..\..\6_tools\vswhere\cppexec.exe" -location -vs 2019'
) do ( 
set myvar=%%a 
) 

call :Trim devenvpath %myvar%
"%devenvpath%\Common7\IDE\devenv.com" /runexit server.netcore31.sln
rem "%devenvpath%\Common7\IDE\devenv.com" /run server.net.sln
endlocal 

:Trim
SetLocal EnableDelayedExpansion
set Params=%*
for /f "tokens=1*" %%a in ("!Params!") do EndLocal & set %1=%%b
exit /b
