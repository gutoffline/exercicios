/*
Display LCD 16x2 e driver I2C
Ferramentas > Gerenciar Bibliotecas
"LiquidCrystal_I2C , Frank Brabender"

Sketch > Incluir biblioteca > LiquidCrystal_I2C
*/

#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27,16,2);

void setup(){
    lcd.init();
}

void loop(){
    lcd.setBacklight(HIGH);
    lcd.setCursor(0,0);
    lcd.print("Curso de Arduino");
    lcd.setCursor(0,1);
    lcd.print("Senac Americana");
    delay(1000);
    lcd.setBacklight(LOW);
    delay(1000);
}