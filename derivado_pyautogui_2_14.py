import pyautogui

# Toma cuidado tem que descobrir como parar kkkk
# python derivado_pyautogui_2_13.py

# Este exemplo arrasta o mouse em uma forma de espiral quadrada no MS Paint (ou em qualquer programa de desenho gráfico):

distance = 200
while distance > 0:
    pyautogui.drag(distance, 0, duration=0.5)   # move right
    distance -= 5
    pyautogui.drag(0, distance, duration=0.5)   # move down
    pyautogui.drag(-distance, 0, duration=0.5)  # move left
    distance -= 5
    pyautogui.drag(0, -distance, duration=0.5)  # move up

# A vantagem de usar o PyAutoGUI, ao contrário de um script que gera diretamente o arquivo de imagem, é que você pode usar as ferramentas de pincel fornecidas pelo MS Paint.
