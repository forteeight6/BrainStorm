from pygame import mixer

mixer.init()
mixer.music.load('../run.mp3')
mixer.music.play()
input()
