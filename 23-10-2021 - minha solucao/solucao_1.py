# O que é isso que tropecei?
# https://mypy.readthedocs.io/en/stable/protocols.html
# https://stackoverflow.com/questions/69174965/cannot-import-name-typeguard-from-typing-extensions
# from typing_extensions import ParamSpec
# https://issueexplorer.com/issue/python/typing/816

km = float(input('Quantos km foi percorrido?'))
dias = float(input('Quantos dias o carro foi alugado?'))

pagar = (km * 0.15) + (dias * 60)

print(f'O preço a ser pago é de R${pagar}.')
