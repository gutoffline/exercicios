void setup() {
  pinMode(13, OUTPUT);
}

void loop() {
  digitalWrite(13, HIGH);
  delay(1000);
  digitalWrite(13, LOW);
  delay(1000);
}

/*
   você está atribuindo o pino digital 13 como uma saída e, em seguida, você entra em um loop no qual algum código muda o pino 13 para HIGH ou LOW durante um segundo
   - acrecente um led externo, com a perna positiva conectado ao pino 13 e a negativa ao GND
   - faça um ligação com a protoboard, ligando o pino 13 ao POSITIVO e o GND ao NEGATIVO, acrescente um led na protoboard
   - mude a programação para o pino 12, e altere as conexões em o Arduino e a protoboard
   - exercício: faça piscarem leds conecatados às portas 11, 12 e 13.
*/
