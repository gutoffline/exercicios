/*
Ler valor do potenciômetro e exibir no monitor serial
*/

long valor;
 
void setup() {
  Serial.begin(9600);
  Serial.println("Inicio");
}
 
void loop() {
  valor = analogRead(A0);
 
  Serial.print("Valor = ");
  Serial.println(valor);
  delay(1000);
}
