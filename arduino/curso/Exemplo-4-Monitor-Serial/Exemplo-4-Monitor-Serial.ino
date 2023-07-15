/*
 Monitor Serial
 Programa aonde exibimos mensagem no monitor serial
*/


int led_vermelho = 9;           
String comando = "Vamos Acender um LED";

void setup() {
  pinMode(led_vermelho, OUTPUT);
  // abre a porta serial a 9600 bps:
  Serial.begin(9600);
  Serial.println(comando);
}

void loop() {
  digitalWrite(led_vermelho, 1);
  Serial.println("LED ACESO");
  delay(2000);
  digitalWrite(led_vermelho, 0);
  Serial.println("LED APAGADO");
  delay(2000);
}
