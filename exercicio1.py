lista = [2,0,12,4,20,1]
listaOrdenada = []

def ordenaLista(novo):
    global listaOrdenada
    if len(listaOrdenada) > 0: 
        for index, valor in enumerate(listaOrdenada):
            if valor > novo:
                listaOrdenada = listaOrdenada[:index] + [novo] + listaOrdenada[index:]
                return
        listaOrdenada.append(novo)
        return
    else:
        listaOrdenada.append(novo)

def maiorMenor():
    global lista
    maior = { "index": 0, "valor": lista[0] }
    menor = { "index": 0, "valor": lista[0] }
    for index, valor  in enumerate(lista):
        if maior["valor"] < valor: maior = {"index": index, "valor": valor }
        if menor["valor"] > valor: menor = {"index": index, "valor": valor }
        ordenaLista(valor)
    print("Maior valor: ")
    print(str(maior["valor"]) + " na posição " + str(maior["index"] + 1))
    print("Menor valor: ")
    print(str(menor["valor"]) + " na posição " + str(menor["index"] + 1))

for i in range(1, 7):
    print("Digite " + str(i) + " de 6")
    lista.append(int(input("-> ")))
print()

print("Lista original: ")
print(lista)
maiorMenor()
print("Lista ordenada: ")
print(listaOrdenada)

# também poderia ser usada o sort() para ordenar a lista: