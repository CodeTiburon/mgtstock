mgtstock.com

#Gulp

##Environments

```
gulp --env=[env name]
```

##Server on demand

Gulp runs a local server that executes tasks when a page is requested, not when the files change.
It will keep track of the file changes; but instead of running the tasks directly it will run them all at once when a request arrives, 
before it hits the real development server.

```
gulp server
```

You should use `8080` port in order to send http request to 'on demand' server.


