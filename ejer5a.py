#Crear la función divisores(lista) a la que se le pasa una lista de números y devuelve una lista de listas de números en donde cada lista tiene los divisores que tiene cada uno de los números de la lista original. 

def divisores(lista):
    lista_divisores = []
    for numero in lista:
        divisores = []
        for i in range(1,numero+1):
            if numero % i == 0:
                divisores.append(i)
        lista_divisores.append(divisores)
    return lista_divisores

l=[20,10,7]

print(divisores(l))

