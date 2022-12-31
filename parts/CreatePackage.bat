REM this batch file is used to create all the zip files for all the different packages of part we may distribute on the BlueBrick website
REM This batch iterate through all the text files that it can find in the PackageDefinition folder

for %%I in (..\PackageDefinition\*) do ( "C:\Program Files\WinRAR\WinRAR.exe" a %%~nI.zip @%%I )

IF NOT ERRORLEVEL 0 pause