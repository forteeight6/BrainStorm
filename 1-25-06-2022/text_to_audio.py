# https://pyttsx3.readthedocs.io/en/latest/
import pyttsx3

def convertVoice(text):
	engine = pyttsx3.init()
	engine.say(text)
	engine.runAndWait()

convertVoice("My Name is John.")
convertVoice("Meu nome é John.")