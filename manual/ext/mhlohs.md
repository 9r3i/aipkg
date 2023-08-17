# Manual of ext.hmlohs
HMLOH stands for Harvest Moon Light of Hope, a multi-platform game thats released by Natsume.

This extension is to manipulate data saved of the game, verion 1 only. Notice: this extension is not working with version 2 of the game.

Data savwd of version 2 is already encrypted, unlike version 1 which is still direcly copy from its memory written onto a file save. Good news is, the android version is still using version 1, so it's gonna be great work on termux.

## Requirements
Its required cepack lib as its commands mostly will generate cheat engine tables.
- hmlohsdata library

these requirements are installed as the extension installed.

## Installation
```
ai install ext.hmlohs
```

## Preparation of the data saved file
Make sure if the saved file ```HMHLSAVEDATA_00``` is in currect working directory, or for android 10 or below just change working directory to ```/sdcard/Android/data/com.natsume.hmloh/files```

## Help command
Just type this command
```
ai hmloh help
```
and this is the output

```
HM: LOH saved game hack.
Version 1.0.0

  $ AI HMLOHS <option> [arguments]

Options:
  VIEW        View saved data.
              - top (default)
              - bag
              - bin
              - villagers
              - requests
              - records
              - barn
              - breg (barn registry)
  EDIT        Edit saved data.
  TTO         Total Time Output converter.
  TTI         Total Time Input converter.
  BULKEDIT    Edit bulk data.
  BACKUP      Create a backup file as zip.
  EDITSTRING  Edit binary with string value.
  EDITTIME    Edit the timestamp.
  
Example:
  $ AI HMLOHS VIEW [string:type:top] [string:match] [string:name]
  $ AI HMLOHS EDIT <int:addr> [int:value:0] [int:byte:1]
  $ AI HMLOHS TTO <int:time>
  $ AI HMLOHS TTI [int:year:1] [int:season:1] 
                  [int:date:1] [int:hour:6] [int:minute:0]
  $ AI HMLOHS BULKEDIT <int:from> <int:to> 
                       [int:value:0] [int:byte:1] [int:margin:0]
  $ AI HMLOHS BACKUP
  $ AI HMLOHS EDITSTRING <int:addr> <string:value>
                         [int:byte:4] [int:max:11]
  $ AI HMLOHS EDITTIME <string:key> <string:value>
```


# Options
There's option and sub-option for this command, arguments are based on the game.

## view

## edit

## tto

## tti

## bulkedit

## backup

## editstring

## edittime



# Closing
That's all there is to it. Alhamdulillaah...


