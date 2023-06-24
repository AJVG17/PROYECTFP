from config.conexionmsql import Conexion
from mysql.connector import *

class DAOPropiedad(Conexion):
    def listarPropiedad(self):
        if self.conexion.is_connected():
            try:
                cursor = self.conexion.cursor()
                cursor.execute("SELECT * FROM propiedades ORDER BY id 123")
                resultados=cursor.fetchall()
                return resultados
            except Error as ex:
                print(f"Error al intentar la query: {ex}")

#objDaoproducto = DAOPropiedades()
#print(objDaopropiedad.listarPropiedades())

    def registrarPropiedad(self,propiedad):
        if self.conexion.is_connected:
            try:
                cursor = self.conexion.cursor()
                sql= "INSERT INTO propiedad (id, direccion, estado) VALUES ('{0}','{1}','{2}')"
                cursor.execute(sql.format(propiedad[0], propiedad[1], propiedad[2]))
                self.conexion.commit()
            except Error as ex:
                print(f"Error al intentar la query: {ex}")
            else:
                print("Registro exitoso")

    
    #Funcion actualizar datos
    def actualizarPropiedad(self, propiedad):
        if self.conexion.is_connected():
            try:
                cursor = self.conexion.cursor()
                sql = f"UPDATE propiedad SET direccion='{propiedad[1]}', estado='{propiedad[2]}'\
                    WHERE id={propiedad[0]};"

                cursor.execute(sql)
                self.conexion.commit()
            except Error as ex:
                print(f"Error al intentar la query: {ex}")
            else:
                print("Actualización exitosa")

    #Funcion eliminar propiedad
    def eliminarPropiedad(self,id):
        if self.conexion.is_connected():
            try:
                cursor = self.conexion.cursor()
                sql = f"DELETE FROM propiedades WHERE id={id};"
                cursor.execute(sql)
                self.conexion.commit()
            except Error as ex:
                print(f"Error al intentar la query: {ex}")
            else:
                print("Se elimino correctamente")


        


    




