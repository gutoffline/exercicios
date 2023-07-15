/*
 Botão
 Programa aonde você aperta um botão e o led acende
*/

const int botao = 2; 
const int led =  13; 

int estadoBotao = 0; 

void setup() {
  pinMode(led, OUTPUT);
  pinMode(botao, INPUT);
}

void loop() {
  estadoBotao = digitalRead(botao);

  if (estadoBotao == 1) {
    digitalWrite(led, 1);
  } else {
    digitalWrite(led, 0);
  }
}
