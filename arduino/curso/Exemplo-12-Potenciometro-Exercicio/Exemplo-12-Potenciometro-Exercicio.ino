/*
Começam com os 3 leds apagados, ao aumentar o valor do potenciômetro
os leds vão acendendo, um de cada vez
*/

int valor;
 
void setup() {
  pinMode(11, OUTPUT);
  pinMode(12, OUTPUT);
  pinMode(13, OUTPUT);
}
 
void loop() {
  valor = analogRead(A0);
 
  if(valor == 0){
    digitalWrite(13,0);
    digitalWrite(12,0);
    digitalWrite(11,0);
  }
    
  if(valor >= 1  && valor <= 340){
    digitalWrite(13,0);
    digitalWrite(12,0);
    digitalWrite(11,1);
  }
  
  if(valor >= 341  && valor <= 680){
    digitalWrite(13,0);
    digitalWrite(12,1);
    digitalWrite(11,1);
  }
  
  if(valor >= 681){
    digitalWrite(13,1);
    digitalWrite(12,1);
    digitalWrite(11,1);
  }
  
  
}
