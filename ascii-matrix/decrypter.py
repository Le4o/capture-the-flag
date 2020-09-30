words = []
dictionary = {}

with open('Dicionario.txt') as f:
    for line in f:
        ar = str(line).split('=')
        dictionary[ar[0].strip()] = ar[1].strip()

with open("criptografadoAsciimenosdez.txt") as f:
    words = str(f.read()).split(' ')

code = ""

for word in words:
    if dictionary.has_key(str(word)):
        code += dictionary[str(word)]
    else:
        num = int(word) + 10
        code += chr(num)

print(code)
