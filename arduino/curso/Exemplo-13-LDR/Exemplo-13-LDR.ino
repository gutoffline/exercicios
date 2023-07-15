/*
O led acende quando o sensor LDR estiver com 
valor menor do que 500
*/

int ldr = A0;
int valor = 0;
int ledVermelho = 11;

void setup(){
  Serial.begin(9600);
    pinMode(ledVermelho, OUTPUT);
}

void loop(){
  valor = analogRead(ldr); 
    Serial.print("Sensor = ");
    Serial.println(valor);
    
    if(valor < 500){
      digitalWrite(ledVermelho, 1);
    }else{
        digitalWrite(ledVermelho, 0);
    }
  delay(10);
}
