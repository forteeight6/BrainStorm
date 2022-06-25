import speech_recognition as sr


class translator:
	def __init__(self):
		self.translator = sr.Recognizer()
		self.microphone = int()
		self.language = str()

	def microphone_list(self) -> list:
		l = sr.Microphone().list_microphone_names()
		return l

	def set_microfone(self, i:int) -> None:
		self.microphone = i

	def set_language(self, i:str) -> None:
		self.language = i

	def recording(self):
		with sr.Microphone(self.microphone) as microphone:
			self.translator.adjust_for_ambient_noise(
				microphone
			)

			print("Recording <<")

			audio = _audio(microphone)
			text = _text(audio)
			
		return text

	def _audio(self, microphone):
		return self.translator.listen(microphone)

	def _text(self, audio):
		return self.translator.recognize_google(
			audio, language=self.language
		)		

