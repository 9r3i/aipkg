# aipkg
repo for packages of ai, read more about [ai system](https://github.com/9r3i/ai)


# Host
## default host
default host is ```https://9r3i.github.io/aipkg/```

## check the host
first, we should check the current host set by typing a command:
```
$ ai config get PACKAGE_HOST
```

## setup the host
then set host to default with command:
```
$ ai pkg host 'https://9r3i.github.io/aipkg/'
```

## add another host
the previous is the primary host, we can add secondary host with this command:
```
$ ai pkg add host <hostname>
```

## remove secondary host
```
$ ai pkg removehost <hostname>
```


# Packages
## package file information
the host must contain a file ```ai.package.json```, it contains packages object information in array, such as:
- name (requires, lower-case unique name)
- version (requires)
- type (requires, lib or ext)
- contains (requires, array of files inside the package)
- authors (requires, array of authors)
- privilege (default: 1, means public use)
- requires (optional, array of require library or extension)
- file (requires, must be zip.crypto format)
- size (optional, int of exact size of the package file)
- xsize (optional, int of exact space needed/required)

## package key
key must be in lower-case unique name, and for extension package the key must be use prefix ```ext.```, this will be a conflict if the key is not unique or key has been taken by another package.

## example:
```json
[
    "ext.zip": {
        "name": "zip",
        "version": "1.0.2",
        "type": "ext",
        "contains": [
            "zip.ai"
        ],
        "authors": [
            "9r3i"
        ],
        "privilege": 1,
        "requires": [
        ],
        "file": "ext\/zip.1.0.2.zip.crypto",
        "size": 2432,
        "xsize": 4280
    }
]
```

## privilege code
### 1 -- public
all either free or paid users can access and use it
### 2 -- paid
only paid users have access and privilege to use it
### 4 -- private
only the users who has the private key can use it
### 8 -- commercial
only paid users can buy it, and only can be used by user who has bought it


# Listing
## all list
default option is ```--all```, example:
```
$ ai pkg ls
```
its equal to
```
$ ai pkg ls --all
```
to list all packages from the host

## installed list
```
$ ai pkg ls --installed
```
or with another option
```
$ ai pkg installed
```

## uninstalled list
```
$ ai pkg ls --list
```

## upgradable list
```
$ ai pkg ls --upgradable
```


# Installation
to install a package or more it goes to use special direct command,
```
$ ai install <package_name>
```

## install single package
```
$ ai install ext.zip
```

## install multiple packages
```
$ ai install ext.zip ext.gz lpclient ext.imagebam
```
the sample above will install 4 packages in one hit

## uninstall or remove a package
```
$ ai pkg remove ext.zip
```
this will remove a package, unless its still bound as dependency to another package.


# Upgrade packages
## check before upgrade
checking before upgrade all packages with listing upgradable
```
$ ai pkg ls --upgradable
```

## upgrade packages
```
$ ai pkg upgrade
```
or
```
$ ai pkg update
```


# Build package
## create a package
...

## prepare
...

## build
...




# Closing
That's all there is to it. Alhamdulillaah...

