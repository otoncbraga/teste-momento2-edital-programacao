matriz = []

for linha in range(3):
    matriz.append([])
    for coluna in range(3):
        matriz[linha].append(linha+1 + coluna+1)

for i in matriz:
    print(i)