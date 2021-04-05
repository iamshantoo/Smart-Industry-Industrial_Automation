import paho.mqtt.client as mqtt
from threading import Timer
import time
import json
import pymysql
import datetime

client =mqtt.Client("iiot")

broker="broker.hivemq.com"

port=1883

def insert(DeviceId, current_data):
    pass

def on_connect(client, userdata, flags, rc):
	print("Connected with result code "+str(rc))

def on_message(client, userdata, message):
	print("topic: "+message.topic+"	"+"payload: "+str(message.payload.decode()))
	print('\n')
	dataJson = json.loads(message.payload)
	device_id_val =dataJson["TMP"]
	device_id_val1 =dataJson["HUM"]
	device_id_val2 =dataJson["SMOKE"]
	device_id_val3 =dataJson["MOV"]

	
	conn = pymysql.connect("localhost","root","","iiot")
	cursor = conn.cursor()

	sql = "INSERT INTO data(TMP,HUM,SMOKE,MOV) VALUES (%s,%s,%s,%s)"
	
	cursor.execute(sql, (device_id_val,device_id_val1,device_id_val2,device_id_val3) )
	print("Inserted to dB")


	current_time = datetime.datetime.now() 
	print(current_time)
	conn.commit()


client.on_connect = on_connect  #attach the callback function to the client object
client.on_message = on_message	#attach the callback function to the client object


client.connect(broker, port, 60)
print ("connecting to broker")

client.subscribe("iiot")

print ("subscribed")

client.loop_forever() # to maintain continuous network traffic flow with the broker
