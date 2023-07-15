void setup() {
  pinMode(13, OUTPUT);
  Serial.begin(9600);
  Serial.println("teste querido");
}

void loop() {
  PiscarLed(13) ;
}

void PiscarLed(int pino){
  digitalWrite(pino, HIGH);
  Serial.println("led ligado");
  delay(1000);
  digitalWrite(pino, LOW);
  Serial.println("led desligado");
  delay(1000);
}

