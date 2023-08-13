# Manual of ext.hmloh
HMLOH stands for Harvest Moon Light of Hope, a multi-platform game thats released by Natsume.

This manual is just for observing its data only, and create a table of cheat engine.

## Requirements
its required cepack lib as its commands mostly will generate cheat engine tables.
- cepack library
- hmlohdb library

these requirements are installed as the extension installed.

## Installation
```
ai install ext.hmloh
```

## Help command
just type this command
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
these are namespaces that can be used:
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
there's option and sub-option for this command, arguments are based on the game.

## bag
this option is to generate bag items value, but its required address of ```cabbage seed``` in the bag itself.

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
this option is very similar to bag, but the required address accoding to ```cabbage``` in the fridge.

for implementation is just the same as the bag does.

## ct
this is cheat table generator, to generate cheat engine table with assemble scripts.

example:
```
ai hmloh ct
```

## record

## ini

## tt

## db


# Database

## Tables

## Query


# Closing
