mgtstock.com

#Gulp

##Environments

Gulp runs in two environments. production and development. By default, gulp runs in development environment. 
```
gulp
```
In development mode Gulp will not minify javascript and css. 

To run Gulp in production mode just add `--production`
```
gulp --production
```

##Server on demand

Gulp runs a local server that executes tasks when a page is requested, not when the files change.
It will keep track of the file changes; but instead of running the tasks directly it will run them all at once when a request arrives, 
before it hits the real development server.

```
gulp server
```

You should use `8080` port in order to send http request to 'on demand' server.


