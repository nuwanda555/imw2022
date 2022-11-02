numero = int(input("Introduzca su DNI: "))
letras = "TRWAGMYFPDXBNJZSQVHLCKE";
print ("Su DNI es", numero, letras[numero % 23])