/*
 Semaforo
 Programa acende 3 luzes em sequência e depois se apagam em sequência.
*/

void setup() {
  pinMode(13, OUTPUT);
  pinMode(12, OUTPUT);
  pinMode(11, OUTPUT);
}

void loop() {
  digitalWrite(13, 1);
  delay(1000);        
  digitalWrite(12, 1);
  delay(1000);        
  digitalWrite(11, 1);
  delay(3000);        
  digitalWrite(11, 0);
  delay(1000);        
  digitalWrite(12, 0);
  delay(1000);        
  digitalWrite(13, 0);
  delay(3000);        
}
