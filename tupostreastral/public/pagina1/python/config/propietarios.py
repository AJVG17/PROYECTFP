from config.conexionmsql import Conexion
from mysql.connector import *

class DAOPropietario(Conexion):
    def listarPropietarios(self):
        if self.conexion.is_connected():
            try:
                cursor = self.conexion.cursor()
                cursor.execute("SELECT * FROM propietarios ORDER BY nom_propietarios ASC")
                resultados=cursor.fetchall()
                return resultados
            except Error as ex:
                print(f"Error al intentar la query: {ex}")

#objDaopropietario = DAOPropietario()
#print(objDaopropietario.listarPropietario())

    def registrarPropietario(self,propietario):
        if self.conexion.is_connected:
            try:
                cursor = self.conexion.cursor()
                sql= "INSERT INTO propietarios (id, nom_propietario, cc_propietario, image_c1) VALUES ('{0}','{1}','{2}','{3}')"
                cursor.execute(sql.format(propietario[0], propietario[1], propietario[2], propietario[3]))
                self.conexion.commit()
            except Error as ex:
                print(f"Error al intentar la query: {ex}")
            else:
                print("Registro exitoso")

    
    #Funcion actualizar datos
    def actualizarPropietario(self, propietario):
        if self.conexion.is_connected():
            try:
                cursor = self.conexion.cursor()
                sql = f"UPDATE propietarios SET nom_propietario='{propietario[1]}', cc_propietario='{propietario[2]}', img_c1={propietario[3]}\
                    WHERE id={propietario[0]};"

                cursor.execute(sql)
                self.conexion.commit()
            except Error as ex:
                print(f"Error al intentar la query: {ex}")
            else:
                print("Actualización exitosa")

    #Funcion eliminar propietario
    def eliminarPropietario(self,id):
        if self.conexion.is_connected():
            try:
                cursor = self.conexion.cursor()
                sql = f"DELETE FROM propietarios WHERE id={id};"
                cursor.execute(sql)
                self.conexion.commit()
            except Error as ex:
                print(f"Error al intentar la query: {ex}")
            else:
                print("Se elimino correctamente")


        


    




