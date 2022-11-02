#Crear la función cambiar(frase, palabra1,palabra2) que devuelve frase pero cambiando todas las veces que aparece palabra1 por palabra2.

def cambiar(frase, palabra1, palabra2):
    palabras = frase.split()
    for i in range(len(palabras)):
        if palabras[i] == palabra1:
            palabras[i] = palabra2
    return " ".join(palabras)

frase = "mi mama me mima y yo mimo a mi mama" #input("Introduce una frase: ")
palabra1 = "mama" #input("Introduce una palabra: ")
palabra2 = "perro" #input("Introduce otra palabra: ")
print(cambiar(frase, palabra1, palabra2))