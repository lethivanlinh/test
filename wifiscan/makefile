
OBJ = main.o wifiscan.o
APPNAME = wifiscan.a

$(APPNAME) : $(OBJ)
	gcc -o $(APPNAME) $(OBJ) -lm -lcurl
%.o : %.c
	gcc -c -o $@ $< -std=c99

clean:
	rm $(OBJ) $(APPNAME)
archive:
	tar cf wifiscan.tar *.c *.h makefile

