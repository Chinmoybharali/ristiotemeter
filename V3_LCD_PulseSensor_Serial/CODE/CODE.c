#include<reg51.h> 	// Include Header file to Work With 8051 family Microcontroller
#include<stdio.h>   // Include header file stdio.h , as we are using sprintf() function

#define LCDPort P1 // LCD Data Bus (PIN 7 t0 PIN 14) is Connected to P1(PIN 1 to PIN 8) of 8051
sbit    RS=P0^0;   // The RS pin of LCD (pin 4) is Connected to P0.0 (PIN 39) of 8051
sbit    RW=P0^1;   // The RW pin of LCD (pin 5) is Connected to P0.1 (PIN 38) of 8051
sbit    EN=P0^2;   // The EN pin of LCD (pin 6) is Connected to P0.2 (PIN 37) of 8051

sbit SENSOR=P3^2;  // The output of the Pulse Sensor is Connected to P3.2 (PIN 12) of 8051

//-------------------------------------------------------------------------------


void delay (int t) // This function will generate t ms delay
 {
     int i; // Declare local variable i to use as counter

	 while(t>0) // Loop until t become ZERO
	  {
	   i=1275; // Set thye Initial value of i with 1275
	   while(i>0) i--; // Decrease the Value of i by -1, untill it become ZERO
	   t--; // Decrease the value of t by -1
	  }
 }


void LCDCommand(char c) // This function will send a command to LCD
 {
   RS=0; // RS=0 means, we are sending Command to LCD
   RW=0; // RW=0 means, we are using the LCD in Write Mode
   LCDPort=c; // Copy the Value of c(Command) into LCDPort (P1 in Our Case)
   EN=1;      // Set EN PIN High  ----------------+
   delay(2);  // Wait for 2 ms					  +--- Generate a High to Low Pulse
   EN=0;      // Reset the EN pin Back to LOW ----+
 }
    
void LCDData(char c) // This function will send a Data to LCD
 {
   RS=1; // RS=1 means, we are sending Data to LCD
   RW=0; // RW=0 means, we are using the LCD in Write Mode
   LCDPort=c; // Copy the Value of c(Data) into LCDPort (P1 in Our Case)
   EN=1;      // Set EN PIN High  ----------------+
   delay(2);  // Wait for 2 ms					  +--- Generate a High to Low Pulse
   EN=0;      // Reset the EN pin Back to LOW ----+
 }

// To use the LCD  we must have to initilized it
// Initilization is Nothing but providing the bsic information like
//  How many wire are connected to LCD, 
//  Whether it will display from Left to Right or Right To Left
// Whether it will display the Cursor or Not etc.

void LCDInit() // This function Will Initilized the LCD
 {
   LCDCommand(0x38); // 0x38 - 8 Bit Mode
   LCDCommand(0x06); // 0x06 - Display From Left To Right
   LCDCommand(0x0c); // 0x0c - Display On, Cursor Hide
   LCDCommand(0x01); // 0x01 - Clear LCD
 }
// String: A string is nothing but array of characters terminated by NULL ('\0')
//        array index start from 0

void LCDPuts(char *s)  // This function will Display a string On Lcd
{
    int i; // Declare Local vatriable i to use as index of the character of the String
	for(i=0;s[i]!='\0';i++) // Scan each and every Character of the string One By One, Untill it encounter NULL
	 { 
	    LCDData(s[i]); // and display the character on LCD withj the help of LCDData() function 
	 }
}

void init() // This function will initilized the Serial Communication
 {
    TMOD=0x20; // Timer 1 , 8 BIT AUTO RELOAD MODE
	SCON=0x50; // 1 Start Bit + 8 Bit Data size	+ 1 Stop Bit, No Parity BIT
	TH1=0xfd;  // Generate 9600 Baud rate  @ 11.0592 MHz Crystel
	TR1=1;     // Start Timer 1
 }
 	  
void tx(char c)  // This function will transmit a character over serial Communication
 {
     SBUF=c; // Copy the value of c into SBUF
	 while(TI==0); // Wait untill all bits are transfered
	 TI=0;// Rest the TI flag so that it can transfer the Next data   
 }

void xputs(char *s) // This function will transmit a string over serial Communication
{
   int i; // Declare Local vatriable i to use as index of the character of the String
	for(i=0;s[i]!='\0';i++) // Scan each and every Character of the string One By One, Untill it encounter NULL
	 { 
	    tx(s[i]); // and transmit the character over serial Communication
	 }
}



 void main()  // starting of main() function
  {
     
	 int PULSE=0; // Declare and Initilizied Local Variable to Store Pulse Count
	 int UNIT=0;  // Declare and Initilizied Local Variable to Current Unit
	 char buffer[10]; // Declare an array of character to store converted data
	 LCDInit(); // Initilizing the LCD
	 init(); // Initilized the Serial PORT
	 LCDPuts("   IoT Based    ");
	 LCDCommand(0xc0); // Move the Cursor to the Staring of Second Line
	 LCDPuts("  Energy Meter");
	 delay(100); // Waith for 100 ms

	 LCDCommand(0x01); // Clear the LCD
	 LCDPuts("Developed By....");
	 delay(100); // Waith for 100 ms

	 LCDCommand(0xc0); // Move the Cursor to the Staring of Second Line
     LCDPuts("Chinmoy Bharali ");
	 delay(100); // Waith for 100 ms

	 LCDCommand(0xc0); // Move the Cursor to the Staring of Second Line
     LCDPuts("Pari chetia     ");
	 delay(100); // Waith for 100 ms

	 LCDCommand(0xc0); // Move the Cursor to the Staring of Second Line
     LCDPuts("Kuhima Begum    ");
	 delay(100); // Waith for 100 ms


	 LCDCommand(0xc0); // Move the Cursor to the Staring of Second Line
     LCDPuts("Kuhima Begum    ");
	 delay(100); // Waith for 100 ms



	 LCDCommand(0x01); // Clear the LCD
	 LCDPuts("Guided By");
	 delay(100); // Waith for 100 ms
	 LCDCommand(0xc0); // Move the Cursor to the Staring of Second Line
     LCDPuts("Parimita Saikia ");
	 delay(100); // Waith for 100 ms
    
     LCDCommand(0xc0); // Move the Cursor to the Staring of Second Line
     LCDPuts("RIST-ECE-2019   ");
	 delay(100); // Waith for 100 ms
 
     LCDCommand(0x01); // Clear LCD
	 LCDPuts("UNIT :");
	 LCDCommand(0xc0); // Move the Cursor to the Staring of Second Line
     LCDPuts("PULSE:");
	 
	      
	while(1) // Indefinit Loop (always true)
	 {
            if(SENSOR==0)  // If SENSOR PIN Goes LOW
			 {
			    PULSE++; // Increase the Value of PULSE by +1
				sprintf(buffer,"%4d",PULSE); // Convert the Numeric Data into String, and store in buffer 
			 	LCDCommand(0xc6); // Move the Cursor to the 6th Position of SEcond Line
				LCDPuts(buffer);// Display the data stored in buffer array
				while(SENSOR==0); 

				if(PULSE>=3) // if PULSE Count s 10 (We are onsidering 10 Pulse per Unit for Experimental Setup)
				 {
				   UNIT++; // Increase the t by +1
				   PULSE=0; // and reset the PULSE value Back to 0 (ZERO)
				   
				   sprintf(buffer,"%4d",UNIT); // Convert the Numeric Data into String, and store in buffer 
			 	   LCDCommand(0x86); // Move the Cursor to the 6th Position of First Line
				   LCDPuts(buffer);// Display the data stored in buffer array
				   xputs("http://server/ristemeter.com?DID=D001&UNIT=");
				   xputs(buffer);
				   tx(10);
				   tx(13);
				   
				   sprintf(buffer,"%4d",PULSE); // Convert the Numeric Data into String, and store in buffer 
			 	   LCDCommand(0xc6); // Move the Cursor to the 6th Position of SEcond Line
				   LCDPuts(buffer);// Display the data stored in buffer array
				    
				 }
			 }

	 }

  }