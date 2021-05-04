peso = float(input('Qual é o seu peso? '))
altura = float(input('Qual é a sua altura? '))
imc = peso / (altura ** 2)

if imc < 18.5:
    print(f'Abaixo do peso.{imc}')
elif 18.5 <= imc < 25:
    print(f'Peso Ideal.{imc}')
elif 25 <= imc < 30:
    print(f'Sobrepeso.{imc}')
elif 30 <= imc < 40:
    print(f'Obesidade.{imc}')
else:
    print(f'Obesidade Mórbida.{imc}')