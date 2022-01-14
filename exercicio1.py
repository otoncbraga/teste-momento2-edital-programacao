lista = [2,0,12,4,20,1]
listaOrdenada = []

# def getIndex(index, subLista, novo, count): 
#     global listaOrdenada
#     print("chamou index", str(index))
#     x = len(subLista) 
#     print("tamanho " + str(x))
#     if x == 1: return index
#     if count > 10: 
#         print("deu merda")
#         return index
#     index = index//2
#     if listaOrdenada[index] > novo:
#         print("menor " + str(listaOrdenada[index]))
#         print(subLista[:x//2])
#         getIndex(index, subLista[:x//2], novo, count + 1)
#     else:
#         print("maior " + str(listaOrdenada[index]))
#         index = index + index//2
#         print(subLista[x//2:])
#         getIndex(index, subLista[x//2:], novo, count + 1)

# def ordenaLista(novo):
#     global listaOrdenada
#     index = len(listaOrdenada) 
#     if index > 0: 
#         index = getIndex(index, listaOrdenada, novo, 0)
#         # getIndex(index, novo, 0)
#         print("index " + str(index))
#         listaOrdenada = listaOrdenada[:index] + [novo] + listaOrdenada[index:]
#         print("lista " + str(listaOrdenada))
#     else:
#         print("deve ser chamado uma vez")
#         listaOrdenada.append(novo)

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