REM updat the folder list
dir parts\* /B /AD > parts\_folderlist.txt

REM update the part list
for /d %%D in (parts\*) do (dir %%D\*.gif %%D\*.xml /B /ON > %%D\_partlist.txt)
