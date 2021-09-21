# Para remover um elemento de um conjunto em Python, podemos usar a função remove ou a função discard.

nums = set([1, 2, 2, 3, 3, 3])
nums.remove(2)
print("Números: ", nums)

# A função remove deve ser usada somente se tivermos certeza que o elemento está presente no conjunto, pois se o elemento não estiver presente, a função remove causa uma exceção, como mostramos abaixo.

# nums2 = set([1, 2, 2, 3, 3, 3])
# nums2.remove(4)
