# Uma alternativa à função remove é a função discard, que remove um elemento do conjunto se o elemento estiver presente mas não faz nada caso contrário.

nums = set([1, 2, 2, 3, 3, 3])
nums.discard(4)
nums.discard(2)
print(nums)
