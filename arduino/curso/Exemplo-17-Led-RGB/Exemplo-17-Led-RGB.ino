
#define  AZUL 11
#define  VERDE 10
#define  VERMELHO 9

int bt1 = 0;
int bt2 = 0;
void setup() {
    pinMode(AZUL , OUTPUT);
    pinMode(VERDE , OUTPUT);
    pinMode(VERMELHO , OUTPUT);
}

void loop() {
  digitalWrite(AZUL, 1);
  digitalWrite(VERMELHO, 1);
  delay(10);
}
