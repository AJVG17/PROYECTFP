from config import conexionmsql
from config.conexionmsql import Conexion



def listarPropietarios(propietarios):
    print("\n Propietarios: \n")
    contador = 1
    for pro in propietarios: 
        datos = "{0}.id:{1}|Nombre_Propietario:{2}|CC_Propietario:{3}|Image_cc:{4}"
        print(datos.format(contador, pro[0], pro[1], pro[2], pro[3]))
        contador +=1
    print("")

def listarPropiedades(propiedades):
    print("\n Propiedades: \n")
    contadorpd = 1
    for propd in propiedades: 
        datospd = "{0}.id:{1}|Direccion:{2}|Estado:{3}"
        print(datospd.format(contadorpd, propd[0], propd[1], propd[2]))
        contadorpd +=1
    print("")

def listarContratos(contratos):
    print("\n Contratos: \n")
    contadorc = 1
    for proc in contratos: 
        datosc = "{0}.id_contrato:{1}| id_propietario:{2}| id_propiedad:{3}| nom_arrendatario:{4}| cc_arrendatario:{5}| image_c2:{6}| num_arrendatario:{7}| email_arrendatario:{8}| nom_fiador:{9}| cc_fiador:{10}| image_c3:{11}| num_fiador:{12}| email_fiador:{13}| date_star:{14}| image_contrato:{15}"
        print(datosc.format(contadorc, proc[0], proc[1], proc[2], proc[3], proc[4], proc[5], proc[6], proc[7], proc[8], proc[9], proc[10], proc[11], proc[12], proc[13], proc[14]))
        contadorc +=1
    print("")

def pedirDatosRegistroContrato(self, id_propietario, id_propiedad, nom_arrendatario, cc_arrendatario, image_c2, num_arrendatario, email_arrendatario, nom_fiador, cc_fiador, image_c3, num_fiador, email_fiador, date_star, image_contrato):
    cur = self.conexion.cursor()
    sql =INSERT INTO contratos (id_propietario, id_propiedad, nom_arrendatario, cc_arrendatario, image_c2, num_arrendatario, email_arrendatario, nom_fiador, cc_fiador, image_c3, num_fiador, email_fiador, date_star, image_contrato)
    values()

    idCorrecto = False
    while (not idCorrecto):
        id = input("Ingrese id: \n")
        if len(id)==7: 
            idCorrecto = True
        else:
            print("Id Incorrecto: Debe tener 7 digitos")
    nombre_producto = input("Ingrese el nombre del producto: \n")
    descripcion = input("Ingrese la descripcion: \n")
    
    while True:
        precio=input("Ingrese el precio del producto: \n")
        if precio.isnumeric():
            if (float(precio)>0):
                precio=float(precio)
                break
            else:
                print("Precio incorrecto: Debe ser un dato numerico")

    while True:
        existencia=input("Ingrese las existencias del producto: \n")
        if existencia.isnumeric():
            existencia=int(existencia)
            break
        else:
            print("Dato incorrecto: Debe ser solo numerico")

    while True:
        precio_venta=input("Ingrese el precio de venta del producto: \n")
        if precio_venta.isnumeric():
            if float(precio_venta)>0:
                precio_venta=float(precio_venta)
                break
            else:
                print("Dato incorrecto: Debe ser solo numerico")

    while True:
        stock_minimo=input("Ingrese el stock minimo del producto: \n")
        if stock_minimo.isnumeric():
            stock_minimo=float(stock_minimo)
            break
        else:
            print("Dato incorrecto: Debe ser solo numerico")
        

    while True:
        categoria = input("Ingrese la categoria del producto: \n")
        if categoria!="":
            categoria=str(categoria)
            break
        else:
            print("Ingrese una categoria para el producto")


    while True:
        estado=input("Ingrese estado del producto: \n")
        if estado.isnumeric():
            estado=int(estado)
            break
        else:
            print("Dato incorrecto: Debe ser solo numerico")    

    producto = (id, nombre_producto, descripcion, precio, existencia, precio_venta, stock_minimo, categoria, estado)
    return producto


def pedirDatoActualizacion(productos):
    listarProductos(productos)
    existeid=False
    id=input("Ingrese id a editar: ")
    for pro in productos:
        if pro[0] == id:
            existeid = True
            break

    if existeid:
        nombre_producto = input("Ingrese nombre a editar: \n")
        descripcion = input("Ingrese la descripcion del producto: \n")

        while True:
            precio= input("Ingrese el precio actualizado: \n")
            if precio.isnumeric():
                precio = True
                precio= float(precio)
                break
            else:
                print("Precio incorrecto: Debe ser numérico")

        while True:
            existencia= input("Ingrese existencias actualizadas: \n")
            if existencia.isnumeric():
                existencia = True
                existencia= int(existencia)
                break
            else:
                print("Dato incorrecto: Debe ser numérico")
        
        while True:
            precio_venta= input("Ingrese el precio de venta actualizado: \n")
            if precio_venta.isnumeric():
                precio_venta= float(precio_venta)
                break
            else:
                print("Precio incorrecto: Debe ser numérico")

        while True:
            stock_minimo= input("Ingrese el stock minimo actualizado: \n")
            if stock_minimo.isnumeric():
                stock_minimo= int(stock_minimo)
                break
            else:
                print("Dato incorrecto: Debe ser numérico")

        categoria = input("Ingrese la categoria del producto: \n")
    
        while True:
            estado= input("Ingrese el estado actualizado: \n")
            if estado.isnumeric():
                estado= int(estado)
                break
            else:
                print("Dato incorrecto: Debe ser numérico")
            

        producto = (id, nombre_producto, descripcion, precio, existencia, precio_venta, stock_minimo, categoria, estado)
    else: 
        producto = None
    return producto

def pedirDatoEliminacion(productos):
    listarProductos(productos)
    existeid=False
    idEliminar= input("Ingrese codigo a eliminar: \n")
    for pro in productos:
        if pro[0] == idEliminar:
            existeid=True
            break
    if (not existeid):
        idEliminar = ""
    return idEliminar    
    