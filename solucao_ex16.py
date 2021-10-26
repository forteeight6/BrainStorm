flag = 'on'
while True:
    if flag == 'on':
        numero = float(input('Digite um numero [apenas 0 = sair]: '))

        if numero != 0:
            print(f'A parte inteira desse numero é {int(numero)}')
        else:
            flag = 'off'

    elif flag == 'off':
        break
