/*
 Fade II
 Programa que faz um led acender e apagar gradativamente e envia mensagens no monitor serial.
*/


int led_vermelho = 9;           
int brilho = 0;    
int intensidade = 5;    
String comando = "aumentar";

void setup() {
  pinMode(led_vermelho, OUTPUT);
  // abre a porta serial a 9600 bps:
  Serial.begin(9600);
}

void loop() {
  analogWrite(led_vermelho, brilho);

  if(comando == "aumentar") {
    brilho = brilho + intensidade;
    Serial.println("TA AUMENTANDO >>>>>>>> ");
  }else{
    brilho = brilho - intensidade;
    Serial.println("TA DIMINUINDO <<<<<<<< ");
  }
  
  if(brilho >= 255){
    comando = "diminuir";
  }else if(brilho <= 0){
    comando = "aumentar";
  }
  
  Serial.println(comando);

  delay(50);
}
