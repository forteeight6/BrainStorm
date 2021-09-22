# Outra operação comum em conjuntos é a interseção, que nos retorna os elementos que aparecem em ambos conjuntos. O exemplo abaixo ilustra essa operação.

A = {0, 1, 3, 5, 7, 9}
B = {0, 2, 4, 6, 8}
C = A & B
print(C)

# Outra forma de escrever esta linha seria:

# C = A.intersect(B).

# Python nos permite realizar muitas outras operações com conjuntos. Na tabela abaixo resumimos as principais.

"""
Símbolo matemático ---------- Operador Python ---------- Descrição
	e∈S 			in 			elemento e é membro de S
	A⊆B			<=			A é um subconjunto de B
	A⊂B			<			A é um subconjunto próprio de B
	A∪B			|			A união com B
	A∩B			&			A interseção com B
	A∖B			-			diferença entre A e B
"""
