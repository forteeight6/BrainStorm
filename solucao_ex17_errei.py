cateto_oposto = int(input("Qual o cateto oposto?"))

cateto_adjacente = int(input("Qual o cateto adjacente? "))

hipotenusa = (cateto_oposto * cateto_oposto +
              cateto_adjacente * cateto_adjacente) ** 0.5

print(hipotenusa)
