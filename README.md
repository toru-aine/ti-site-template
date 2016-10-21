# ti-site-template

## Install Instructions

To create the new project run the following code in Terminal, in the new project's root
folder
```
composer create-project toruinteractive/ti-site-template
```

### Environments
In terminal, change folder to the current folder, then run
```
init
```
Find and replace 'SET_ME' with the various settings specific to the project

###Make models
Add all models to model_generation file and in Terminal run
```
./model_generation
```


## To Do
* Base Migrations
* Model Auto Generation
* Add Basic App subdomains
* Add Environments
* Rename ti-site-template folder to current on completion
* Auto Generate Views and Controllers somehow
* Add package.json and Gulp code
* Hook up above to run automatically on composer install completion (first run only)
* Install node modules automatically
