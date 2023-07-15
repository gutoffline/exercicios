/*
 Acender o led pelo monitor serial, se apertar a tecla A acende, se apertar a tecla B apaga
*/

const int led = 13;

String comando = "Vamos acender um LED";

void setup(){
  pinMode(led,OUTPUT);
  Serial.begin(9600);
  Serial.println(comando);
}

void loop(){
  if(Serial.available()){
    switch(Serial.read()){
      case 'A':
        digitalWrite(led, 1);
        Serial.println("ACENDE LED VERMELHO - 13");
        break;
      case 'B':
        digitalWrite(led,0);
        Serial.println("APAGA LED VERMELHO - 13");
        break;
    }
  }
}
