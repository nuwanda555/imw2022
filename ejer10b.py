#Crear la función dígitos(lista) a la que se le pasa una lista de números y devuelve una lista de listas en donde cada lista tiene todos los dígitos de cada uno de los números de la lista original.

def digitos(lista):
    l=[]
    for i in lista:
        l.append(list(str(i)))
    return l

l1=[324535,345666,12312]
print(digitos(l1))
