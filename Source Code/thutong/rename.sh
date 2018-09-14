#!/bin/bash
# Shell script to rename mod_newtemplate into something new
# 1. move this script out of THUTONG so that its in same dir as THUTONG folder
# 2. make it executable i.e chmod 755 rename.sh
# 3. run it  ./rename.sh 
# 4. you will be prompted for the name of your mod. keep it one word and all lower case
# 5. you will be prompted for a copyright notice line, anything is ok eg 2015 Flash Gordon
# 6. The THUTONG folder should have disappeared, replaced by your mod.
# 7. If you have a .git folder in there, it will be all messed up. Remove it.
# Author: poodll
printf "enter new module short name, ie if mod_XXX enter XXX \n" 
read MODULEENTRY
MODULENAME=$(tr '[:lower:]' '[:upper:]' <<< $MODULEENTRY)
LMODULENAME=$(tr '[:upper:]' '[:lower:]' <<< $MODULENAME)
find ./THUTONG -type f -exec sed -i "s|THUTONG|${MODULENAME}|g" {} \;
find ./THUTONG -type f -exec sed -i "s|MOD_THUTONG_|MOD_${MODULENAME}_|g" {} \;
find ./THUTONG -type f -exec sed -i "s|thutong|${LMODULENAME}|g" {} \;
printf "enter the year, your name and email address on one line for the copyright notice. eg 2015 John Doe jdoe@email.com \n" 
read 2018 Digital BlackSmiths
find ./THUTONG -type f -exec sed -i "s|2018 Digital BlackSmiths|${2018 Digital BlackSmiths}_|g" {} \; 
mv THUTONG/lang/en/THUTONG.php THUTONG/lang/en/${LMODULENAME}.php
mv THUTONG/backup/moodle2/backup_THUTONG_activity_task.class.php THUTONG/backup/moodle2/backup_${LMODULENAME}_activity_task.class.php
mv THUTONG/backup/moodle2/backup_THUTONG_stepslib.php THUTONG/backup/moodle2/backup_${LMODULENAME}_stepslib.php
mv THUTONG/backup/moodle2/restore_THUTONG_activity_task.class.php THUTONG/backup/moodle2/restore_${LMODULENAME}_activity_task.class.php
mv THUTONG/backup/moodle2/restore_THUTONG_stepslib.php THUTONG/backup/moodle2/restore_${LMODULENAME}_stepslib.php
mv THUTONG/classes/task/THUTONG_adhoc.php THUTONG/classes/task/${LMODULENAME}_adhoc.php
mv THUTONG/classes/task/THUTONG_scheduled.php THUTONG/classes/task/${LMODULENAME}_scheduled.php
mv THUTONG $LMODULENAME
echo "finished renaming THUTONG to ${LMODULENAME}"
