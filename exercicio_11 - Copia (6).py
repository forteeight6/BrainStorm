# 11 - Faça um programa que leia a largura e a altura de uma parede em metros, calcule a sua área e a quantidade de tinta necessária para pinta-lá, sabendo que cada litro de tinta, pinta uma área de 2m².
while True:
    opcao = int(input('Deseja continuar: (1)Sim (2)Nao '))
    if opcao == 1:
        largura = int(input('Qual a largura da parede? '))
        altura = int(input('Qual a altura da parede? '))

        print('A quantidade de tinta gasta sera de ', (largura * altura)/2,
              ' para pintar uma parede contendo a area de ', largura * altura, ' m².')
    elif opcao == 2:
        break
