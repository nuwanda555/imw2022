

def cambiar(frase, palabra1, palabra2):
    frase = frase.replace(palabra1, palabra2)
    return frase

frase=cambiar("hola mama", "mama", "papa")
print(frase)