import pyautogui
# fonte: https: // pyautogui.readthedocs.io/en/latest/

# Bem-vindo à documentação do PyAutoGUI!
# O PyAutoGUI permite que seus scripts Python controlem o mouse e o teclado para automatizar as interações com outros aplicativos. A API foi projetada para ser simples. O PyAutoGUI funciona no Windows, macOS e Linux e é executado no Python 2 e 3.

# Para instalar com pip, execute . Veja a página de instalação para mais detalhes.pip install pyautogui

# O código-fonte está disponível em: https://github.com/asweigart/pyautogui

# O PyAutoGUI tem vários recursos:

# Movendo o mouse e clicando nas janelas de outros aplicativos.
# Enviando pressionamentos de tecla para aplicativos (por exemplo, para preencher formulários).
# Faça capturas de tela e receba uma imagem (por exemplo, de um botão ou caixa de seleção) e encontre-a na tela.
# Localize a janela de um aplicativo e mova, redimensione, maximize, minimize ou feche (atualmente apenas para Windows).
# Exibir caixas de alerta e mensagem.
# Aqui está um vídeo do YouTube de um bot jogando automaticamente o jogo Sushi Go Round . O bot observa a janela do aplicativo do jogo e procura imagens de pedidos de sushi. Quando encontra um, clica nos botões dos ingredientes para fazer o sushi. Ele também clica no telefone no jogo para pedir mais ingredientes conforme necessário. O bot é totalmente autônomo e pode terminar todos os sete dias de jogo. Este é o tipo de automação que o PyAutoGUI é capaz.

# Exemplos


# Get the size of the primary monitor.
screenWidth, screenHeight = pyautogui.size()
screenWidth, screenHeight
(2560, 1440)

# Get the XY position of the mouse.
currentMouseX, currentMouseY = pyautogui.position()
currentMouseX, currentMouseY
(1314, 345)

pyautogui.moveTo(100, 150)  # Move the mouse to XY coordinates.

pyautogui.click()          # Click the mouse.
pyautogui.click(100, 200)  # Move the mouse to XY coordinates and click it.
# Find where button.png appears on the screen and click it.
pyautogui.click('button.png')

# Move the mouse 400 pixels to the right of its current position.
pyautogui.move(400, 0)
pyautogui.doubleClick()     # Double click the mouse.
# Use tweening/easing function to move mouse over 2 seconds.
pyautogui.moveTo(500, 500, duration=2, tween=pyautogui.easeInOutQuad)

# type with quarter-second pause in between each key
pyautogui.write('Hello world!', interval=0.25)
# Press the Esc key. All key names are in pyautogui.KEY_NAMES
pyautogui.press('esc')

with pyautogui.hold('shift'):  # Press the Shift key down and hold it.
    # Press the left arrow key 4 times.
    pyautogui.press(['left', 'left', 'left', 'left'])
# Shift key is released automatically.

pyautogui.hotkey('ctrl', 'c')  # Press the Ctrl-C hotkey combination.

# Make an alert box appear and pause the program until OK is clicked.
pyautogui.alert('This is the message to display.')

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

# FAQ: Perguntas frequentes
# Envie perguntas para al @ inventwithpython . com

# P: O PyAutoGUI funciona em aplicativos Android, iOS ou tablet / smartphone?

# R: Infelizmente não. O PyAutoGUI funciona apenas no Windows, macOS e Linux.

# P: O PyAutoGUI funciona em configurações de vários monitores.

# R: Não, agora o PyAutoGUI lida apenas com o monitor principal.

# P: O PyAutoGUI faz OCR?

# R: Não, mas este é um recurso que está no roteiro.

# P: O PyAutoGUI pode fazer keylogging ou detectar se uma tecla está pressionada no momento?

# R: Não, PyAutoGUI não pode fazer isso atualmente.

# Fail-Safes

# Como as vassouras encantadas do Aprendiz de Feiticeiro programadas para continuar enchendo (e depois enchendo demais) a banheira com água, um bug em seu programa pode fazer com que saia do controle. É difícil usar o mouse para fechar um programa se o cursor do mouse estiver se movendo sozinho.

# Como um recurso de segurança, um recurso à prova de falhas é habilitado por padrão. Quando uma função PyAutoGUI é chamada, se o mouse estiver em qualquer um dos quatro cantos do monitor principal, eles irão levantar a pyautogui.FailSafeException. Há um atraso de um décimo de segundo depois de chamar todas as funções PyAutoGUI para dar ao usuário tempo para bater o mouse em um canto para acionar o fail safe.

# Você pode desabilitar essa proteção contra falhas configurando . RECOMENDO ALTAMENTE QUE NÃO DESATIVE O SEGURO DE FALHAS.pyautogui.FAILSAFE = False

# O retardo de décimo segundo é definido pela pyautogui.PAUSEconfiguração, que é 0.1por padrão. Você pode alterar este valor. Há também uma pyautogui.DARWIN_CATCH_UP_TIMEconfiguração que adiciona um atraso adicional no macOS após eventos de teclado e mouse, uma vez que o sistema operacional parece precisar de um atraso após o PyAutoGUI emitir esses eventos. Ele é definido como 0.01padrão, adicionando um atraso adicional de centésimo segundo.
