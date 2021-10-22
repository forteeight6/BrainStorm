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
