dias = int(input('Quantos dias o carro foi alugado? '))
km = float(input('Quantos kilometros foi rodado? '))
print('You can buy ${:.2f} dollars.'.format((dias * 60) + (km * 0.15)))
