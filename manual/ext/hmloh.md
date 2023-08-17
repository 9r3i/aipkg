# Manual of ext.hmloh
HMLOH stands for Harvest Moon Light of Hope, a multi-platform game thats released by Natsume.

This manual is just for observing its data only, and create a table of cheat engine.

## Requirements
Its required cepack lib as its commands mostly will generate cheat engine tables.
- cepack library
- hmlohdb library

these requirements are installed as the extension installed.

## Installation
```
ai pkg update
ai install ext.hmloh
```

## Help command
Just type this command
```
ai hmloh help
```
and this is the output

```
Cheat table generator for HM-LOH.
(Harvest Moon: Light of Hope)
Version 1.8.3

  $ AI HMLOH <option> <address> [<namespace>]

Options:
  BIN     Generate bin table from parameter address.
  BAG     Generate bag table from parameter address.
  CT      Generate cheat engine table with assemble scripts.
  RECORD  Generate record table from parameter address.
  INI     Get data walkthrough from ini file.
  TT      Convert game date and time into Total Time.
  DB      Execute HMLOH database query.

Namespaces (BIN and BAG):
  - seeds, crops, flowers, trees, 
  - milk, chocolate, cook, flour, 
  - medicine, fertilizer, feed, bait, 
  - fish, wools, candy, woods, 
  - shell, fence, ornament

Addresses:
  <bin_address>     Cabbage in Refrigerator.
  <bag_address>     Cabbage Seeds in Bag.
  <record_address>  Total Shipped (Money).

Parameters (TT):
  <year>    Int of year (1-99); default: 1
  <season>  Int of season (1-4); default: 1 (spring)
            1 = Spring
            2 = Summer
            3 = Fall
            4 = Winter
  <date>    Int of date (1-30); default: 1
  <hour>    Int of hour (0-23); default: 6
  <minute>  Int of minute (0-59); default: 0

Query parameters (DB):
  <table_name> [<wherance> [<start> [<limit> [<order>]]]]
  
  <table_name>   string of table name, available:
                 - cooking, blend, bait
                 - crop, flower, tree
                 - fish, ore
                 - architect, animal, tool,  store
                 - repair, calendar, birthday
  <wherance>     string of wherance as url query
  <start>        int of start output row
  <limit>        int of limit output rows
  <order>        string of ordered by column name

Example:
  $ AI HMLOH BIN <string:address> [string:namespace]
  $ AI HMLOH BAG <string:address> [string:namespace]
  $ AI HMLOH CT
  $ AI HMLOH RECORD <string:address>
  $ AI HMLOH INI [string:table:--ALL]
  $ AI HMLOH TT [int:year:1] [int:season:1] [int:date:1] [int:hour:6] [int:minute:0]
  $ AI HMLOH DB [string:table] [string:wherance] [int:start] [int:limit] [string:order]

```

## Namespaces (Items)
These are namespaces that can be used:
- seeds
- crops
- flowers
- trees
- milk
- chocolate
- cook
- flour
- medicine
- fertilizer
- feed
- bait
- fish
- wools
- candy
- woods
- shell
- fence
- ornament


# Options
There's option and sub-option for this command, arguments are based on the game.

## bag
This option is to generate bag items value, but its required address of ```cabbage seed``` in the bag itself.

example:
```
ai hmloh bag 1003f788
```

if you wanna more specific for crops only, you can use the namespace, such as:
```
ai hmloh bag 1003f788 crops
```

see the namespaces section for more detail.

## bin
This option is very similar to bag, but the required address accoding to ```cabbage``` in the fridge.

for implementation is just the same as the bag does.

## ct
This is cheat table generator, to generate cheat engine table with assemble scripts.

example:
```
ai hmloh ct
```

## record
Generate the record table according to total shipment address.
```
ai hmloh record 2003cd88
```

## ini
Showing data table of all items with ini format.
```
ai hmloh ini <table_name>
```
see tables section for more detail, or use ```--all``` argument to patch all of data.
```
ai hmloh ini --all
```

## tt
Convert game date and time into Total Time, arguments are:
- year (1-99) default: 1
- season (1-4) default: 1
- date (1-30) default: 1
- hour (0-23) default: 6
- minute (0-59) default: 0
 
example:
```
ai hmloh tt 4 3 23 16 40
```
the output must be like this
```
810280
```

## db
Execute query of database of hmloh, arguments are:
- table name, see tables section for more detail
- wherance, use url query
- start, default: 0
- limit, default: none
- order, default: none

see database section for more detail.

# Database
this database is for observing only, this couldnt be changed or manipulated by the game, this is just a walkthrough data for optimizing the playing.

## Tables
- cooking
- blend
- bait
- crop
- flower
- tree
- fish
- ore
- architect
- animal
- tool
- store
- repair
- calendar
- birthday

## Query
Query is string to execute database command, using db option.

example for showing a fish table where the class is A:
```
ai hmloh db fish c=A
```
and the output must be like this:
```
+----------------+-------+---+-----+------+------+------+-----+------+----+
| name           | price | c | pts | bast | seas | time | loc | bait | rk |
+----------------+-------+---+-----+------+------+------+-----+------+----+
| Alligator Gar  | 11300 | A | 600 |    0 | S    | MAE  | FM  | Good |  5 |
| Banjar Arowana | 11300 | A | 580 |    0 | F    | AE   | F   | Good |  6 |
| Golden Arowana | 14500 | A | 740 |    0 | F    | AE   | F   | Exce |  3 |
| Arapaima       | 12700 | A | 650 |    0 | AS   | AE   | F   | Dele |  4 |
+----------------+-------+---+-----+------+------+------+-----+------+----+
total=34
match=4
selected=4
```

these are the column names of fish table:
- name is name of fish
- price is direct price of fish
- c is class of fish, A to D, and S for special one.
- pts is point for fishing tournament
- bast is bastian price for the fish, zero means fish couldnt be sold to bastian
- seas is season where the fish is appeared, A for spring, S for summer, F for fall and W for winter
- time is the time of fish is appeared, M for morning, A for afternoon, E for evening and N for night
- loc is location of fish is appeared, F for farm, M for mountain, B for beach
- bait is bait to use to get the fish
- rk is rank of the fish of 34 of them

see tables section for more detail about table names.

# Closing
That's all there is to it. Alhamdulillaah...


