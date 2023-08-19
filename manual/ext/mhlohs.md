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
ai hmlohs help
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
there are 8 sub-options:

### top (default)
this is a default view, the top of data saved, it contains name, birth date and season, time of gameplay, and many more, example:
```
[0:4:11:44] Name: Niner
[52:4] Gender: 1
[56:4] Birth Season: 0
[60:4] Birth Date: 3

[64] Timestamp: 749597
Year: 4
Season: Summer
Date: 11
Day: Tuesday
Hour: 13
Minute: 17

[6673] Money: 9940763
[6665] Stamina Max: 10000000
[6669] Stamina Value: 9997201

[80:4] Mine Floor: 100

[8442] Realtime: 749597
Year: 4
Season: Summer
Date: 11
Day: Tuesday
Hour: 13
Minute: 17

[8438] Weather: 0 (Sunny)
[8434] Tomorrow ??: 2 (Rain)

[8430] Location: 8 (House)

[8426] Before #1: 1
[8422] Before #2: 0
[8418] Before #3: 0
[8414] Before #4: 3
[8410] Before #5: 0
[8406] Before #6: 1
[8402] Before #7: 0
[8398] Before #8: 0
[8394] Before #9: 0

[8446] After #1: 1024
[8450] After #2: 768
[8454] After #3: 512
[8458] After #4: 4294967040
[8462] After #5: 20735
[8466] After #6: 13568
[8470] After #7: 515072
[8474] After #8: 0
[8478] After #9: 0


```
because ```top``` set as default, this sub-option can be passed, like this one:
```
ai hmlohs view
```

### bag
this is to view bag values,
```
ai hmlohs view bag
```
the argument can be a type of item, such as seed, crop, bait or fish.
```
ai hmlohs view bag fish
```
and the second argument can be matched to some items more specific.
```
ai hmlohs view bag fish arowana
```

### bin

### villagers

### requests

### records

### barn

### breg (barn registry)


## edit
onprogress...


## tto

## tti

## bulkedit

## backup

## editstring

## edittime



# Closing
That's all there is to it. Alhamdulillaah...


