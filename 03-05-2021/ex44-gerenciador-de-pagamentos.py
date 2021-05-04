preço_do_produto = float(input('Qual é o preço do produto? '))
print("""
[a]- Á vista dinheiro/cheque: 10% de desconto
[b]- Á vista no cartão: 5% de desconto
[c]- Em até 2x no cartão: preço normal
[d]- 3x ou mais no cartão: 20% de juros.
""")
escolha = str(input())
if escolha == 'a':
    print(f'A vista dinheiro/cheque: {preço_do_produto * 0.90}')
elif escolha == 'b':
    print(f'A vista no cartão: {preço_do_produto * 0.95}')
elif escolha == 'c':
    print(f'Em até 2x no cartão: {preço_do_produto}')
elif escolha == 'd':
    print(f'3x ou mais no cartão: {preço_do_produto * 1.20}')
else:
    print('Opção invalida')