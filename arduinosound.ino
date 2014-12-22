void setup()
{
  Serial.begin(9600);
  pinMode(8,INPUT);
  pinMode(9,INPUT);
  pinMode(11,INPUT);
  pinMode(13,INPUT);
}

void loop()
{
  
  if(digitalRead(8))
  {
    Serial.println("1");
  }
  else if(digitalRead(9))
  {
     Serial.println("2"); 
  }
  else if(digitalRead(11))
  {
     Serial.println("3"); 
  }
  
  else if(digitalRead(13))
  {
     Serial.println("4"); 
  }
  
  else 
  {
    Serial.println("0");
  }
}
