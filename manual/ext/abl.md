# Manual of ext.abl
App boot loader, this extension are made to make my applications stay update without any verification everytime updated.

when you type ```ai abl help``` here is the output
```
App boot loader.
Version 1.3.2

  $ AI ABL <option> [arguments]

Options:
  INDEX   Create an index.html file.
  APP     Create an app boot loader.
  MAPP    Create a mobile app.
  UPDATE  Update abl.html version.

Example:
  $ AI ABL INDEX <string:namespace>
                [string:title] [string:out:index.html]
                [string:host] [string:method]
  $ AI ABL APP <string:abl-file> [string:format:ini]
  $ AI ABL MAPP <string:abl-file> [string:format:ini]
  $ AI ABL UPDATE <string:version>
  $ AI ABL UPDATE 1.3.0.220


ABL file sample (ini file format):

version=622
namespace=quran6
title="Quran"
index="index.html"
host="https://9r3i.web.id/api/base/"
method="post"

[style]
1="css/quran.min.css"

[script]
1="js/quran.min.js

[module]
1="js/module/firebase.js"

[constant]
ABL_START="js/start.js"

; filename: quran.abl
; execute using: ai abl app quran
```

## app config file
sample
```
version=622
namespace=quran6
title="Quran"
index="index.html"
host="https://9r3i.web.id/api/base/"
method="post"

[style]
1="css/quran.min.css"

[script]
1="js/quran.min.js

[module]
1="js/module/firebase.js"

[constant]
ABL_START="js/start.js"
```

## index
is creating ```index.html``` file for the production mode.
```
ai abl index [string:title] [string:out:index.html] [string:host] [string:method]
```
* ```title``` ia string of the title tag in ```index.html```
* ```out``` is string output, default: ```index.html```
* ```host``` is string host of appbase library
* ```mwthod``` is string method of fetching appbase host, default: ```POST```

## app
this method is to compile the app into appbase file, the information in ```config.ini``` file, all files are gathered to compile in to a single file.
sample command:
```
ai abl app config
```
this command is gonna get ```config,ini``` information to be generated into an appbase file.

## mapp
similar to ```app``` this mapp is made for mobile app, compile into a single mobile app.
```
ai abl mapp <config.ini>
```

## update
...



# Closing
That's all there is to it. Alhamdulillaah...


