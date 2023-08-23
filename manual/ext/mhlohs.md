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
this view has number of address thats gonna be useful for editing the value in edit section.

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
this is to view bin values, works the same as bag with the same argument aswell.

### villagers
this is to view villagers relationship status, or haw many note did you make in your relationship. and 1000 is maxed of this value or they have 10 notes on relation.
```
ai hmlohs view villagers
```

### requests
this is to view how many requests has been done, and also theres a percentage of the finished requests.
```
ai hmlohs view requests
```

### records
this is to view players records, from total of shipment until gifts given.
```
ai hmlohs view records
```

### barn
this is to view barn data, all of your animals data.
```
ai hmlohs view barn
```

### breg (barn registry)
this is a barn registry, which is unfinished option, i still develop this option to be executable.
```
ai hmlohs view breg
```


## edit
this is for editing or writing new value on the address.
```
ai hmlohs edit <int:addr> [int:value:0] [int:byte:1]
```
the address is required, we can gat the address from using view.
```
ai hmlohs view bag fence
```
we got address of hedge which is 1923 and the byte which is 2.

now we have what what we need to edit value of hedge to 99.
```
ai hmlohs edit 1923 99 2
```
and we can check again using view.
```
ai hmlohs view bag fence
```


## tto
tto stands for total time output, this is gonna convert from total time seconds to readable timestamp.
```
ai hmlohs tto 749597
```
the output is an object of timestamp detail, 
```
dataObject Object
(
    [year] => 4
    [season] => Summer
    [date] => 11
    [hour] => 13
    [minute] => 17
    [day] => Tuesday
    [seasonInt] => 2
)
```


## tti
tti stands for total time input, this is gonna convert from readable timestamp to seconds.
```
ai hmlohs tti [int:year:1] [int:season:1] [int:date:1] [int:hour:6] [int:minute:0]
```
example:
```
ai hmlohs tti 4 2 11 13 17
```
the output will be an int of seconds
```
749597
```


## bulkedit
this options is for massive editing of values according to addresses.
```
ai hmlohs bulkedit <int:from> <int:to> [int:value:0] [int:byte:1] [int:margin:0]
```
from  = integer of from address
to    = integer of to address
value = integer of value; default: 0
byte  = integer of byte of value; default: 1
margin= integer of margin between values; default: 0


## backup
backup all saved data in current directory, as a zip file.
```
ai hmlohs backup
```


## editstring
...onprogress...


## edittime



# Closing
That's all there is to it. Alhamdulillaah...


