#Crear la función comunes(lista1,lista2) que usando conjuntos devuelve una lista con los números comunes a las dos listas


def comunes(lista1,lista2):
    c1=set(lista1)
    c2=set(lista2)
    c=c1.intersection(c2)
    return list(c)


l1=[43,43,4,3,4,5,6,34,34,345,34]
l2=[1,2,3,4,5,6,7,8,9,10]

print(comunes(l1,l2))





