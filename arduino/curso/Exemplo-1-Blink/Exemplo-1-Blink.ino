/*
 Blink
 Programa que faz piscar o LED ligado ao pino 13.
*/

void setup() {
  pinMode(13, OUTPUT);
}

void loop() {
  digitalWrite(13, 1);
  delay(1000);        
  digitalWrite(13, 0);
  delay(1000);        
}
