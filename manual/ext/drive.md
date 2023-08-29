# Manual of ext.drive
It's supposed to be drive management.

when you type ```ai drive help``` here is the output
```
Drive management.
Version 1.1.7

  $ AI DRIVE <option> <arguments>

Options:
  SPACE   Calculate space of all drives.
          <other> drives separated by semi-colon.
  SCAN    Scan drives or directories.
          Second and so on are excluded items.

Example:
  $ AI DRIVE SPACE
  $ AI DRIVE SPACE "root;otherDrive"
  $ AI DRIVE SCAN "/9r3i/ai"
  $ AI DRIVE SCAN "/9r3i/ai" "temp" "libs"

```
There's only two options, ```space``` and ```scan```

## space
This option is to calculate drive space of all drives, this works really well on Windows, and on Linux needs some extra arguments to identify all drives.

on Windows just type like this
```
ai drive space
```
and on Linux needs to add some arguments for other drives and separated by semi-colon, like this
```
ai drive space "root;otherDrive"
```
the output would be like this
```
OS  : Linux
User: u0_a270
Date: 2023-08-29 04:31:09
+-------+----------+----------+----------+--------+--------+
| drive | space    | free     | used     | free%  | used%  |
+-------+----------+----------+----------+--------+--------+
|       |   4.4 GB |   0.0 GB |   4.4 GB |  0.58% | 99.42% |
| sdcar | 109.6 GB |   7.1 GB | 102.5 GB |  6.49% | 93.51% |
| 3561- | 119.1 GB |   0.7 GB | 118.3 GB |  0.63% | 99.37% |
| ----- | -------- | -------- | -------- | ------ | ------ |
| Total | 233.1 GB |   7.9 GB | 225.2 GB |  3.38% | 96.62% |
+-------+----------+----------+----------+--------+--------+

```

## scan
This option is to scan drive or directory specifically with size of every single files, them save into a file as json format.

the first argument is the directory to scan, and the second and so on is the excluded directory to scan inside the first argument directory.

```
ai drive scan "/sdcard/download" "pictures" "movies"
```
this command will scan ```/sdcard/download``` and let the rest out of it. so directory ```pictures``` and ```movies``` wont be included to scanned data. the output will be like this
```
183 directories 4274 files
Size: 306 KB
Time: 00:00:02.619
File: scanned--sdcard-download-230829-0531.json
```

file ```scanned--sdcard-download-230829-0531.json``` is the result of the scanned data in json. this file will be useful for further feature of drive mapping. later i will add manual about this stuff.


# Closing
That's all there is to it. Alhamdulillaah...


