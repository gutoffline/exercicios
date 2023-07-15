/*
Display LCD 16x2 e driver I2C
Ferramentas > Gerenciar Bibliotecas
"LiquidCrystal_I2C , Frank Brabender"

Sketch > Incluir biblioteca > LiquidCrystal_I2C
*/

#include <LiquidCrystal_I2C.h>
//Inicializa o display no endereco 0x27
LiquidCrystal_I2C lcd(0x27,16,2);
//https://www.arduinoecia.com.br/arduino-lcd-16x2-modulo-i2c-rtc-ds1307/
void setup()
{
 lcd.init();
}
 
void loop()
{
  lcd.setBacklight(HIGH);
  lcd.setCursor(0,0);
  lcd.print("Curso de Arduino");
  lcd.setCursor(0,1);
  lcd.print("Senac Americana");
  delay(1000);
  lcd.setBacklight(LOW);
  delay(1000);
}
