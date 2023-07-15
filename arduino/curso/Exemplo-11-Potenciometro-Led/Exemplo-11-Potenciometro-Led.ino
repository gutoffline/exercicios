/*
Ler valor do potenciômetro e acender o led de forma gradual (PWM), 
fazendo uma equivalência entre o valor do potenciômetro e o valor do led
*/

int potenciometro = A0;
long valor = 0;
int ledVermelho = 11;
int NOVO_VALOR = 0;

void setup(){
  Serial.begin(9600);
  pinMode(ledVermelho, OUTPUT);
}

void loop(){
  valor = analogRead(potenciometro); // 0 - 1023 
  Serial.print("Sensor = ");
  Serial.println(valor);
  //map(potenciometro , inicio, fim , inicio , fim) 
  NOVO_VALOR = map(valor , 0 , 1023 , 0 , 255);
  analogWrite(ledVermelho, NOVO_VALOR); // 0 - 255
  delay(10);
}
