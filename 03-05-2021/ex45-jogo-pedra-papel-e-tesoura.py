from random import randint

print('Escolha entre as seguintes opções:')
print('[0] Pedra\n[1] Papel\n[2] Tesoura')
escolha = int(input())
maquina = randint(0, 2)

if escolha == 0 and maquina == 2 or escolha == 1 and maquina == 0 or escolha == 2 and maquina == 1:
    print('Voce Venceu!', maquina)
elif escolha == 2 and maquina == 0 or escolha == 0 and maquina == 1 or escolha == 1 and maquina == 2:
    print('Você Perdeu!', maquina)
else:
    print('Você Empatou!', maquina)