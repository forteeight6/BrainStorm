# Strings ou cadeias de caracteres

# Strings nada mais são do que sequências (cadeias) de caracteres. Em outras palavras, uma string é simplesmente uma sequência de zero ou mais letras juntas. Vejamos alguns exemplos.

string_vazia = ''
uma_letra = 'a'
varias_letras = 'abacate'
print(type(string_vazia))
print(type(uma_letra))
print(type(varias_letras))

# Você deve ter percebido que nos exemplos acima, a sequência de letras das strings aparece entre aspas simples. Em Python, assim como em outras linguagens, precisamos das aspas para declarar uma variável do tipo string. Tanto aspas simples quanto aspas duplas funcionam. A razão da necessidade das aspas é simples: elas diferenciam uma declaração de uma variável do string de uma atribuição entre duas variáveis. O exemplo abaixo vai deixar isso mais claro.

v = 'var'
s = v
print(v)
print(s)

# Declara uma variável cujo nome é v e atribui o valor var a essa variável.
# Diz que o valor da variável s é o mesmo da variável v (atribuição).
