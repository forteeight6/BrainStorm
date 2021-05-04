ano_de_nascimento = int(input('Em que ano você nasceu? '))
idade = 2019 - ano_de_nascimento

if 9 >= idade:
    print('MIRIM')
elif 9 < idade <= 14:
    print('INFANTIL')
elif 14 < idade <= 19:
    print('JUNIOR')
elif 19 < idade <= 20:
    print('SÊNIOR')
else:
    print('MASTER')