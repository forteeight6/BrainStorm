# fonte: https://imasters.com.br/back-end/automacao-de-gui-com-python-exemplo-de-uso-do-pyautogui-2

# pip install pyautogui


# fonte: https://imasters.com.br/back-end/automacao-de-gui-com-python-exemplo-de-uso-do-pyautogui-2

# Olá, leitores! Hoje vou apresentar uma introdução a um módulo de automação de GUI em Python, pyautogui. Ele é um módulo de automação de GUI para Python2 e Python3 que fornece métodos para controlar mouse e teclado. Esse módulo pode ser usado para criar bots para automatizar tarefas repetitivas, enquanto você pode desfrutar do seu café.

# “Pyautogui pode fazer qualquer coisa que um usuário humano sentado na frente do computador pode fazer, exceto derramar café no teclado”, diz o geek responsável por esse módulo bacana.

# Siga o link abaixo para instalar o pyautogui na sua máquina.

# https://pyautogui.readthedocs.org/en/latest/install.html

# Sem mais iteração sobre a introdução, eu gostaria de apresentar algumas noções básicas sobre o módulo.

# 1 – Localizando coordenadas do cursor do mouse
# >>> import pyautogui

# >>> pyautogui.position()

# 3 (850, 504)

# >>>

# Ele retorna as coordenadas x e y atuais da posição do cursor do mouse. Em uma tela de computador, o ponto superior esquerdo é a origem ou (0,0).

# 2 – Movendo o cursor do mouse
# >>> pyautogui.moveTo(10,10)

# >>> pyautogui.moveTo(10,10,duration=1)

# A função moveTo pega a coordenada x e a coordenada y como parâmetros, enquanto a duração pode ser passada como o terceiro parâmetro, que é opcional e usado para especificar a quantidade de tempo em segundos para chegar a uma coordenada especifica. A segunda é uma abordagem humana, enquanto a primeira é um movimento instantâneo do cursor.

# 3 – Clicando
# >>> pyautogui.click(80,80)

# >>> pyautogui.doubleClick(80,80)

# >>> pyautogui.rightClick(80,80)

# É possível clicar em uma determinada coordenada na tela por meio do método de clique que também fornece doubleClick, métodos RightClick pegando os parâmetros coordenada x e coordenada y em todos os casos.

# 4 – Keystrokes (pressionando de teclas)
# Para digitar, primeiro precisamos localizar uma área apropriada. Portanto, você pode querer usar este método depois de cliques em alguma coordenada em que é possível digitar. Você pode usar duas ou mais instruções para executar simultaneamente uma após a outra, separando cada declaração com ponto e vírgula. Por exemplo, eu especifiquei as coordenadas da barra de URL no navegador e, em seguida, digitei meu nome nela a partir dos seguintes comandos/declarações

# >>> pyautogui.click(50,80);pyautogui.typewrite(“Bhishan”)

# >>> pyautogui.click(50,80);pyautogui.typewrite(“Bhishan”, interval=0.2)

# Nós podemos passar um intervalo de parâmetro opcional em segundos para especificar o tempo em segundos entre cada letra ou combinação de teclas.

# 5 – Hot Key
# O método hotkey pode ser usado nos casos em que é necessário pressionar duas ou mais teclas ao mesmo tempo. Um exemplo prático é o Ctrl + S para salvar um arquivo ou Ctrl + Shift + q para sair.

# >>> pyautogui.hotkey(‘Ctrl’,’Shift’,’q’)

# Você pode ver todas as possíveis chaves de mapeamento das teclas que podem ser digitadas por meio deste método

# >>> Pyautogui.KEYBOARD_KEYS

# Bom, isso é o suficiente para você começar bem em automação de GUI via pyautogui. Abaixo está um bot que eu fiz usando o módulo para automatizar uma tarefa chata que eu tinha, iterando a história por trás da necessidade do bot. Eu sou um estudante de graduação no quarto período de Ciência da Computação (quero dizer, estudante preguiçoso). Eu nunca faço anotações em qualquer uma das classes que eu participo. Na época de exames, eu confio nas fotos das anotações que meus amigos me enviam. Como sempre, eu peguei as fotos, mas desta vez todas as imagens estavam em modo paisagem por algum motivo (cerca de 100-110 imagens). Seria muito tempo perdido ter que girar cada imagem para conseguir ler. Então, eu escrevi umas 7-8 linhas de código para fazer um bot que abria cada um dos arquivos de imagem, girava e salvava enquanto eu jantava. Eu usei o módulo de tempo, junto com pyautogui para ter algum intervalo de tempo entre as declarações.

import pyautogui
import time
pyautogui.click(450, 450)
pyautogui.typewrite('graphicsnotes')
pyautogui.press('enter')
time.sleep(2)
for i in range(107):
    pyautogui.press('right')
    pyautogui.press('enter')
    pyautogui.hotkey('ctrl', 'r')
    pyautogui.hotkey('ctrl', 's')
    time.sleep(2)
    pyautogui.press('esc')
    time.sleep(2)
    time.sleep(2)

# O conceito é clicar em qualquer lugar na tela do desktop. Eu escolhi uma coordenada aleatória (450,450). Em seguida, digitei o nome da pasta para localizar a pasta seguido de Enter para abri-la. Depois, de forma iterativa, cliquei no botão direito do mouse para selecionar o arquivo de imagem, abrindo o arquivo de imagem pressionando Enter, seguido pela tecla de atalho ‘Ctrl’ + ‘r’ para girar a imagem; em seguida, ‘Ctrl’ + ‘s’ para salvá-la. Finalmente, pressionei esc para fechar o arquivo e repeti o processo para ir para o arquivo de imagem seguinte. Eu tinha um total de 107 imagens, então, eu iterei 107 vezes no meu programa para atingir todos os arquivos de imagem.

# Até lá a próxima e feliz automação com o pyautogui! 🙂

# Leia a documentação aqui: https://pyautogui.readthedocs.org.

# ***

# Bhishan Bhandari faz parte do time de colunistas internacionais do iMasters. A tradução do artigo é feita pela redação iMasters, com autorização do autor, e você pode acompanhar o artigo em inglês no link: http://www.thetaranights.com/gui-automation-with-python/
