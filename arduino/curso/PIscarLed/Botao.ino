void setup() {
  pinMode(13, OUTPUT);
  Serial.begin(9600);
  Serial.println("teste querido");
}

void loop() {
  digitalWrite(13, HIGH);
}


