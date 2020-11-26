REM update the folder list
dir parts\* /B /ON /AD > parts\_folderlist.txt

REM update the part list
for /d %%D in (parts\*) do (dir "%%D\*.gif" "%%D\*.xml" /B /ON > "%%D\_partlist.txt")
