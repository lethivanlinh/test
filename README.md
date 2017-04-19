# This is my readme file
GITHUB LINK: https://github.com/lethivanlinh/test
Raspberry Pi acoustic sensor project
This project will turn a raspberry Pi 3 into an acousetic sensor.
1. Configuration
A raspberry Pi 3 is recommended. If a older version is used, corresponding configuration might be changed.
The Pi is mouted with a USB sound card, and plugged in a microphone
It is recommonded to have Ethernet conection for your Pi.
1.2 software configuration
The usb sound card has to be set as default audio device. To do so, you need to modify two files with fowlowing contents.
  Two files: asound.conf .asoundrc
  Contents:
            pcm.!default 
            { 
            type plug
            slave 
            {
                pcm "hw:1,0"
            }
            }
            ctl.!default {
                type hw
                card 1
            }

If u are using Raspbian Jessie, you have to roll back alsa-ultils to an early version.
Run: 
    sudo apt-get update //get the update
    sudo aptitude versions alsa-utils //check version of alsa-util
    sudo apt-get install alsa-utils="version xxx" //install new version
    sudo shutdown -r now //reboot 
    arecord -r44100 -c1 -f S16_LE -d5 test.wav // test the mic
    aplay test.wav //check the file recorded

Last change from Linh 
19-4
