# pip install pygame
from pygame import mixer

# Módulo Mixer / Função Init
mixer.init()

# Módulo Mixer / OBJ music / Método load
mixer.music.load("run.mp3")

mixer.music.set_volume(0.7)
mixer.music.play()

while True:
    print("Aperte P para pausar, e R para Retornar")
    print("Aperte 'e' para sair do programa.")
    comando = input(" ")
    if comando == 'p':
        mixer.music.pause()
    elif comando == 'r':
        mixer.music.unpause()
    elif comando == 'e':
        mixer.music.stop()
        break
