/*
Exemplo de utilização de funções
*/

// pino do led vermelho
const int LedVermelho = 13 ;
const int LedVerde = 12;
int LedAmarelo = 11;

int velocidade = 1000;
/*
boolean: valor verdadeiro (true) ou falso (false)
char: um caractere
int: número inteiro
float: número real
string: sequência de caracteres
void: tipo vazio (não tem tipo)
*/
void setup()
{
  pinMode(LedVermelho, OUTPUT);
  pinMode(LedVerde, OUTPUT);
  pinMode(LedAmarelo, OUTPUT);
}

void loop()
{
  ControlaVermelho();
  ControlaVerde();
  ControlaAmarelo();
  ControlaVerde();
  ControlaVermelho();
}

void ControlaVermelho(){
  //LedVermelho
  digitalWrite(LedVermelho, HIGH);
  delay(velocidade); 
  digitalWrite(LedVermelho, LOW);
}

void ControlaVerde(){
  //LedVerde
  digitalWrite(LedVerde, HIGH);
  delay(velocidade); 
  digitalWrite(LedVerde, LOW);
}

void ControlaAmarelo(){
  //LedAmarelo
  digitalWrite(LedAmarelo, HIGH);
  delay(velocidade); 
  digitalWrite(LedAmarelo, LOW);
  delay(velocidade); 
}
