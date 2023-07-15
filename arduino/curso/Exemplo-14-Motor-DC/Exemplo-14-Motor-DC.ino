/*
Liga o motor DC
*/

#define  MOTOR 3

void setup() {
  pinMode(MOTOR , OUTPUT);
}

void loop() {
    analogWrite( MOTOR, 255);
}
