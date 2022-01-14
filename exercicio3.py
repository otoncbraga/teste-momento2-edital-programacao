matrizA = []
matrizB = []

def alimentaMatriz(matriz):
    for linha in range(3):
        matriz.append([])
        for coluna in range(2):
            print("Digite a linha " + str(linha + 1) + " e coluna " + str(coluna + 1) + ":")
            matriz[linha].append(int(input("-> ")))
    print()

def imprimeMatriz(matriz, texto):
    print(texto)
    for i in matriz:
        print(i)
    print()

def somaMatriz(matriz1, matriz2):
    matrizResultado = []
    for linha in range(3):
        matrizResultado.append([])
        for coluna in range(2):
            matrizResultado[linha].append(matriz1[linha][coluna] + matriz2[linha][coluna])
    return matrizResultado

print("Matriz A (3x2)")
alimentaMatriz(matrizA)
print("Matriz B (3x2)")
alimentaMatriz(matrizB)
matrizC = somaMatriz(matrizA, matrizB)
imprimeMatriz(matrizA, "Matriz A")
imprimeMatriz(matrizB, "Matriz B")
imprimeMatriz(matrizC, "Matriz C")