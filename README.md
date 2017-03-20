# This is my readme file
Raspberry Pi acoustic sensor project
This project will turn a raspberry Pi 3 into an acousetic sensor.
1. Configuration
A raspberry Pi 3 is recommended. If a older version is used, corresponding configuration might be changed.
The Pi is mouted with a USB sound card, and plugged in a microphone
It is recommonded to have Ethernet conection for your Pi.
1.2 software configuration
The usb sound card has to be set as default audio device. To do so, you need to modify two files with fowlowing contents.
.......
If u are using Raspbian Jessie, you have to roll back alsa-ultils to an early version.
.....
change from Linh 
20-3
