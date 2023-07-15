/*
Exemplo de utilização de constantes e variáveis
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
  //LedVermelho
  digitalWrite(LedVermelho, HIGH);
  delay(velocidade); 
  digitalWrite(LedVermelho, LOW);
  
  //LedVerde
  digitalWrite(LedVerde, HIGH);
  delay(velocidade); 
  digitalWrite(LedVerde, LOW);
  
  //LedAmarelo
  digitalWrite(LedAmarelo, HIGH);
  delay(velocidade); 
  digitalWrite(LedAmarelo, LOW);
  delay(velocidade); 
  digitalWrite(LedAmarelo, HIGH);
  delay(velocidade); 
  digitalWrite(LedAmarelo, LOW);
  
  //LedVerde
  digitalWrite(LedVerde, HIGH);
  delay(velocidade); 
  digitalWrite(LedVerde, LOW);
  
  //LedVermelho
  digitalWrite(LedVermelho, HIGH);
  delay(velocidade); 
  digitalWrite(LedVermelho, LOW);
}
