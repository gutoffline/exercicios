/*
 Fade
 Programa que um led acender e apagar gradativamente.
*/

int led_vermelho = 9;           
int brilho = 0;    
int intensidade = 5;    
String comando = "aumentar";

void setup() {
  pinMode(led_vermelho, OUTPUT);
}

void loop() {
  analogWrite(led_vermelho, brilho);

  if(comando == "aumentar") {
    brilho = brilho + intensidade;
  }else{
    brilho = brilho - intensidade;
  }
  
  if(brilho >= 255){
    comando = "diminuir";
  }else if(brilho <= 0){
    comando = "aumentar";
  }
  delay(50);
}
