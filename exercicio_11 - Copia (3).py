# 11 - Faça um programa que leia a largura e a altura de uma parede em metros, calcule a sua área e a quantidade de tinta necessária para pinta-lá, sabendo que cada litro de tinta, pinta uma área de 2m².

# Comportamento desejado: Um loop onde entre na primeira condição na primeira vez que adentra- lo.

# Fazer tratamento de Erros(Try Catch)

flag = 0
while True:
    if flag == 0:
        largura = float(input('Qual é a largura da parede?'))
        altura = float(input('Qual a altura da parede?'))
        area = largura * altura
        tinta = area / 2
        print(
            f'Sera necessario {tinta} litros para pintar uma parede com a area de {area} m².')
        flag = 1
    elif flag == 1:
        continuar = str(input('Deseja Continuar?(s)sim ou (n)nao'))
        if continuar.upper() == 'S':
            largura = float(input('Qual é a largura da parede?'))
            altura = float(input('Qual a altura da parede?'))
            area = largura * altura
            tinta = area / 2
            print(
                f'Sera necessario {tinta} litros para pintar uma parede com a area de {area} m².')
            continue
        elif continuar.lower() == 'n':
            print('você Saiu do Programa!')
            break
