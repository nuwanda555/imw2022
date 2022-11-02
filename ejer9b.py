#Crear la función comunes(lista1,lista2) que devuelve una lista con los números comunes a las dos listas. 

def comunes(lista1,lista2):
    lista_comunes = []
    for numero in lista1:
        if numero in lista2 and numero not in lista_comunes:
            lista_comunes.append(numero)
    return lista_comunes

l1=[43,43,4,3,4,5,6,34,34,345,34]
l2=[1,2,3,4,5,6,7,8,9,10]

print(comunes(l1,l2))