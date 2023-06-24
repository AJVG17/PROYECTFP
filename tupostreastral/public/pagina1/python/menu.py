from config.conexionmsql import Conexion
from config.productos import DAOProducto
import funciones
import time

def menuPrincipal():
    continuar=True
    while(continuar):
        opcionCorrecta = False
        while(not opcionCorrecta):
            print("====================== MENÚ PRINCIPAL ======================")
            print("1.- Listar productos")
            print("2.- Registrar productos")
            print("3.- Actualizar productos")
            print("4.- Eliminar productos")
            print("5.- Salir")
            print("============================================================")
            opcion = int(input("Selecione una opcion: "))

            if opcion < 1 or opcion > 5:
                print("Opcion incorrecta, ingrese nuevamente...")
                time.sleep(2)
            elif opcion == 5:
                continuar = False
                print("Gracias por usar este sistema!")
                break
            else:
                opcionCorrecta = True
                ejecutarOpcion(opcion)


def ejecutarOpcion(opcion):
    dao= DAOProducto()
    if opcion == 1:
        try:
            productos = dao.listarProductos()
            if len(productos) > 0:
                funciones.listarProductos(productos)
            else:
                print("No hay productos registrados")
        except:
            print("Ocurrio un error")

    elif opcion == 2:
        producto = funciones.pedirDatosRegistro()
        try:
            dao.registrarProducto(producto)
        except:
            print("Ocurrio un error al registrar")

    elif (opcion == 3): 
        try:
            productos = dao.listarProductos()
            if len(productos) > 0:
                producto = funciones.pedirDatoActualizacion(productos)
                if producto:
                    dao.actualizarProducto(producto)
                else:
                    print("Codigo del producto no encontrado...")
            else:
                print("No hay datos para editar")
        except:
            print("Ocurrio un error...")

    elif (opcion == 4): 
        try:
            productos = dao.listarProductos()
            if len(productos) > 0:
                id= funciones.pedirDatoEliminacion(productos)
                if not(id == ""):
                    dao.eliminarProducto(id)
                else:
                    print("Codigo del producto no encontrado...")
            else:
                print("No hay datos para eliminar")
        except:
            print("Ocurrio un error...")
    else: 
        print("Opción no valida")

    # funciones: 
menuPrincipal()



