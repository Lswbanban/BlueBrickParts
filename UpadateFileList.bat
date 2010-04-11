for /d %%D in (parts\*) do (dir %%D\*.gif %%D\*.xml /B /ON > %%D\_partlist.txt)
