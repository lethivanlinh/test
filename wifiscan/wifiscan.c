#include "wifiscan.h"
#include <stdio.h>

void read_data(void)
{
	char scans[200];
	printf("Wifi scan will be........\n");
	FILE *fp;
	fp = fopen("scan.txt", "r");
	while(fgets(scans, 200, fp)!=NULL){
 	printf("%s\n",scans);		}
   	fclose(fp);

}

