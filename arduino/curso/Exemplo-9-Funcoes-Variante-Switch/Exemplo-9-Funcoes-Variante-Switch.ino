/*
Exemplo de utilização de funções com estrutura de decisão Switch
e outra forma de utilizar constrantes
*/
#define LED_VERMELHO 13
#define LED_AZUL 12
#define LED_VERDE 11
#define UM_SEGUNDO 1000

void setup() {
  pinMode(LED_VERMELHO,OUTPUT);
  pinMode(LED_AZUL,OUTPUT);
  pinMode(LED_VERDE,OUTPUT);
  Serial.begin(9600); 
  //configura comunicação serial com 9600 bps
}
 
void loop() {
  if(Serial.available()){
    switch(Serial.read()){
      case 'A':
        Mudar(LED_VERMELHO);
        break;
      case 'B':
        Mudar(LED_AZUL);
        break;
      case 'C':
        Mudar(LED_VERDE);
        break;
    }
  }
}

void Mudar(int LED){
  digitalWrite(LED, !digitalRead(LED));
  if(digitalRead(LED)){
    Serial.println("Aceso");
  }else{
    Serial.println("Apagado");
  }
}
  
  
