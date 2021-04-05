/*
SMART FACTORY - IIOT
*/

//..........HEADER.........//

#include <ESP8266WiFi.h>
#include "Adafruit_MQTT.h"
#include "Adafruit_MQTT_Client.h"
#include "DHT.h"

#define DHTTYPE DHT22   // there are multiple kinds of DHT sensors

//..................MQTT_CREDENTIALS.................//

#define MQTT_SERVER "broker.hivemq.com"
#define MQTT_SERVERPORT 1883

int IRSensor = D2;
uint8_t DHTPin = D7;
DHT dht(DHTPin, DHTTYPE);

int Temperature;
int Humidity;
int gas;
int gasPin = A0;
int statusSensor;

int data1;
int data2;
int data3;
int data4;

//.....................MQTT_TOPIC.....................//

WiFiClient client;
Adafruit_MQTT_Client mqtt(&client, MQTT_SERVER, MQTT_SERVERPORT);
Adafruit_MQTT_Publish iiot = Adafruit_MQTT_Publish(&mqtt, "iiot");

//................SET_UP..............//

void setup() {
  // put your setup code here, to run once:
  Serial.begin(115200);
  pinMode(DHTPin, INPUT);
  dht.begin();
  pinMode (IRSensor, INPUT); // sensor pin INPUT
  pinMode (LED_BUILTIN, OUTPUT); // Led pin OUTPUT
  
}

void loop() {
  set_wifi();  
  if (WiFi.status() == WL_CONNECTED) {
      MQTT_connect();
      sensor_data_pulish();
      delay(1000);
  }
}


//..................SENSOR_DATA_COECTION...................//
int temp(){
  Temperature = dht.readTemperature();
  return Temperature;
}

int humidity(){
  Humidity = dht.readHumidity();
  return Humidity;
}

int smoke(){
  gas = analogRead(gasPin);
  return gas;
}

int IR(){
  statusSensor = digitalRead (IRSensor);
  return statusSensor;
}

//.............SENSOR_DATA_PUBLISH_MQTT.....................//

int sensor_data_pulish(){
  data1 = temp(); data2 = humidity(); data3 = smoke(); data4 = IR();
  String msg = "";
  msg = msg + "{\"TMP\":" + data1 + "," + "\"HUM\":" + data2 + "," + "\"SMOKE\":" + data3 + "," + "\"MOV\":" + data4 + "}";
  Serial.println(msg);
  delay(2000);
  if (! iiot.publish(msg.c_str())) { 
    Serial.println(F("MQTT transmit Failed"));
    delay(50);       //........ 0.05 sec delay.........//
  }
  else
  {
    Serial.println(F("MQTT transmit OK!"));
    delay(500);
    WiFi.disconnect();
    Serial.println("WiFi Disconnected!");
    delay(1000);
  }
  delay(1000);
}


//..................MQTT_CONN...................//

void MQTT_connect() {
  int8_t ret;

  // Stop if already connected.
  if (mqtt.connected()) {
    return;
  }

  Serial.print("Connecting to MQTT... ");

  uint8_t retries = 3;
  while ((ret = mqtt.connect()) != 0) { // connect will return 0 for connected
    Serial.println(mqtt.connectErrorString(ret));
    Serial.println("Retrying MQTT connection in 5 seconds...");
    mqtt.disconnect();
    delay(5000);    // wait 5 seconds
    retries--;
    if (retries == 0) {
      // basically die and wait for WDT to reset me
      while (1);
    }
  }
  Serial.println("MQTT Connected!");

}


//....................SET_WIFI........................//

void set_wifi() {
  int tryCount = 0;
  Serial.println("");
  Serial.println("Connecting to WiFi");
  WiFi.begin("Mi Phone", "iamshanto");
  
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(1000);        //........ 1 sec delay
    Serial.print(".");
    tryCount++;
    if (tryCount == 10) 
    return loop(); //exiting loop after trying 10 times
  }
  Serial.println("");
  Serial.println("Connected");
  Serial.println(WiFi.localIP());
}
