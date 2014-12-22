This will be useful for anyone who's interested in playing some songs on a remote server with input from a microcontroller.

I ran this setup on my 64-bit machine which supports Ubuntu 14.10. 

I ran a server locally on my machine and added 4 mp3 files. The php script opens up the COMport.Ubuntu treats COMports like any other file, and so any serial data can be read or written using the regular fopen,fread,fclose etc. This is the key to communication between the arduino and the machine

The arduino IDE will show the COMport. Moreover you may need to change the permissions of the port. A simple $sudo chmod o+rw <Comport> should suffice.

One problem I face is that Ubuntu changes the COMport suddenly in the middle and creates havoc with the project. I encountered the same while doing mine. I am working on a bash script which should solve the problem


