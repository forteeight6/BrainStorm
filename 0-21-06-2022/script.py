def pattern_1():
	op = True
	if op:
		return True
	else:
		return False

def pattern_2():
	op = True
	if op:
		return True
	else:
		return False

def pattern_3():
	op = True
	if op:
		return True
	else:
		return False


def function(function_list):
	for function in function_list:
		yield eval(function + '()')

if __name__ == '__main__':

	function_list = ['pattern_1', 'pattern_2', 'pattern_3']
	
	while len(function_list) != 0:
		for i in function(function_list):
			print(i)
			if i:
				function_list.pop()