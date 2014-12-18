#Soulware Ltd. SugarCRM package skeleton

This is a skeleton package to use for new SugarCRM CE packages with all the required files and directories.

##Checklist

Follow the checklist below to create, develop and publish SugarCRM packages.

###1. Create a local project folder with the required files and folders

Create a local development environment with basic directory structure and required files:
- src/
- composer.json
- manifest.php
- license.txt
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
-master
-dev

Tag versions according the [conventions](https://getcomposer.org/doc/04-schema.md#version).

For basic git commands refer to the [cheatsheet](https://training.github.com/kit/downloads/github-git-cheat-sheet.pdf) or the [documentation](http://git-scm.com/doc). 


