#include <stdio.h>
void displayBits(unsigned int  value);
void setBit(unsigned int *value, int position);
void toggleBit(unsigned int *value, int position);

int main(void)
{
	unsigned int x;
	printf("Give an inetrger value: ");
	scanf("%u",&x);
	
	displayBits(x);
	setBit(&x,31);
	displayBits(x);
	toggleBit(&x,20);
	displayBits(x);
}

void setBit(unsigned int *value, int pos)
{
	unsigned int mask=1<<pos;
	*value=*value | mask;
}

void toggleBit(unsigned int *value, int pos)
{
	unsigned int mask=1<<pos;
	if(*value &mask) *value=*value&(-mask);
	else *value=*value|mask;
}

void displayBits(unsigned int value)
{
	int i, j=0;
	unsigned int displayMask=1<<31;
	printf("%10u =", value);
	for(i=1; i<=32; i++)
	{
	putchar(value&displayMask ? '1' : '0');
	if(value&displayMask ) j++;
	value <<=1;
	if(i%8 ==0){putchar(' ');}
	}
putchar('\n');
printf("Number of 1s : %d\n",j);
}
