#Soulware Ltd. SugarCRM package skeleton

This is a skeleton package to use for new SugarCRM CE packages with all the required files and directories.

##Checklist

Follow the checklist below to create, develop and publish SugarCRM packages.

###1. Create a local project folder with the required files and folders

Create a local development environment with basic directory structure and required files:
- src/
- composer.json
- manifest.php
- LICENSE
- README.md
- .gitignore

###2. Set up .gitignore 

Besides the basics please include your IDE's files and folders as well.

###3. Fill out manifest.php

Take some time to select a short and informative name and description which helps to understand the problem and the soultion the packege offers.
 
Make sure your package works properly on all the given SugarCRM CE version, otherwise stick with 6.5.* versions only.

For full reference on manifest.php [visit the documentation page](http://support.sugarcrm.com/02_Documentation/04_Sugar_Developer/Sugar_Developer_Guide_6.5/02_Application_Framework/Module_Loader/02_Introduction_to_the_Manifest/)

###4. Create README.md

Create the readme file with the package name as title and a short description what problem the package supposed to solve.

You can use Markdown for formatting. [Read the basics here.](https://help.github.com/articles/markdown-basics/)

###5. Create repositories and branches

Init git and commit the basics. Create any remote repositories in development server and Github as well and push your changes. By default use origin for development server and public for Github. 

Branches and tags will provide versioning information for composer, so please name them according the naming conventions.

Use at least two branches:
- master
- dev

For basic git commands refer to the [cheatsheet](https://training.github.com/kit/downloads/github-git-cheat-sheet.pdf) or the [documentation](http://git-scm.com/doc). 

###5. Set up composer

The minimal information you have to provide is name and a short desciption.

After the basic setup there are two things you have to consider using composer:
- first is which dependencies you need to include,
- second is if your package can be useful for other packages as dependency.

1. Dependencies:

Set up any dependencies you need, and run: 
```
$ composer install
```

Include the composer autoloader in any file you need to use your dependencies to get access for the required classes, for example if your file is in the folder *src/*:
```
require_once __DIR__ . '/../vendor/autoload.php';
```

2. Preparation for publishing the package

If you want to publish your package, ([read the packagist naming conventions section](https://packagist.org/about)) first. 

Set up directories according to your namespaces inside your *src/* folder [following the PSR-0 standard](https://getcomposer.org/doc/04-schema.md#psr-0). In your namespace use `Soulware` as vendor name and user your project name as namespace. For example if your project is *"EditViewOnInstall"*, you should set the namespace in your classes to `namespace Soulware\EditViewOnInstall;`. You should create your classes inside *src/Soulware/EditViewOnInstall/* and set up the *autoload* section in your *composer.json* as below:
```
"autoload": {
  "psr-0": {
    "Soulware\\EditViewOnInstall\\": "src/"
  }
}
```

For publishing versions and setup stability please refer to "[#6. implement your package](#6-implement-your-package)", for actually publish your work read "[#7 Publish your work on packagist](#7-optional-publish-your-work-on-packagist)".

###6. Implement your package

Checkout the dev branch, work under the *src/* directory, and push your work to developer git server and Github.

Tag versions according the [conventions](https://getcomposer.org/doc/04-schema.md#version). Push tags with `git push <remote_name> --tags`. [Read more about tags.](http://git-scm.com/book/en/v2/Git-Basics-Tagging).

###7. (Optional) Publish your work on packagist

Add your repository to packagist.org (especially if it's a helper class or other utility) to let other projects user it as a dependency. If you set everithing up properly according to this checklist, you only have to do three steps on [packagist.org](https://packagist.org/):

1. Register and log in 
2. Add your package with the URL of the Github repository 
3. Set up Packagist service hook on your Github repository according to the instructions on your [profile page](https://packagist.org/profile/). 

###8. (Optional) Create installable SugarCRM package

For every tested stable version zip the content of your src/ folder (and if you have any dependencies include them in a vendor directory as well) and publish it on [SugarForge.org](http://www.sugarforge.org/).
