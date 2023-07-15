/*
Botões para ligar e desligar motor
*/

#define  MOTOR 3
#define  LIGA 12
#define  DESLIGA 13

int bt1 = 0;
int bt2 = 0;
void setup() {
  pinMode(MOTOR , OUTPUT);
    pinMode(LIGA , INPUT);
    pinMode(DESLIGA , INPUT);
}

void loop() {
    bt1 = digitalRead(LIGA);
    bt2 = digitalRead(DESLIGA);
    if(bt1 == 1){
      analogWrite( MOTOR, 100);
    }
  
    if(bt2 == 1){
      analogWrite( MOTOR, 0);
    }
  delay(10);
}
