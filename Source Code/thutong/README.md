# Activity Module for Moodle

## This is a more modern plugin type, Supports moodle 3.x ( x = 1 ...5 )
1. It contains 
  - admin and instance settings stubs: Different Users
  - a renderer.php : To render UI 
  - module.js : For Javascript module/subsystem 
2. It also contains 
  - activity completion on grade 
  - grade book logic 
  - backup and restore 
  - adhoc/scheduled tasks


### i) Coding Standard:
Follows Moodle Coding Style and architecture style.
Uses instances of Moodles' module frankenstyle component: MOD_THUTONG_

### ii) Copyright notice: 
          2018 Digital BlackSmiths.

### iii) Installation:
1. Copy the folder to your [Moodle program dir]/mod directory.
2. Start Moodle and Check you Moodle Updates, the plugin should appear.
3. To insert under a specific Course, "turn editing on" for that course. 
Enjoy.

## Additions
By default the thutong plugin supports grading, but since there is nothing to grade ... yet ... when you do update a gradable item, you will need to call: thutong_update_grades($moduleinstance, $userid_of_student);

