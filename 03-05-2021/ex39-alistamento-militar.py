ano_de_nascimento = int(input('Em que ano você nasceu? '))
idade = 2019 - ano_de_nascimento

if idade < 18:
    print('Ainda vai se alistar.')
elif idade > 18:
    print('Ja passou da hora de se alistar.')
else:
    print('J a é hora de se alistar.')