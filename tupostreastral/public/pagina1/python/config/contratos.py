from config.conexionmsql import Conexion
from mysql.connector import *

class DAOContrato(Conexion):
    def listarContratos(self):
        if self.conexion.is_connected():
            try:
                cursor = self.conexion.cursor()
                cursor.execute("SELECT * FROM contratos ORDER BY id_contrato")
                resultados=cursor.fetchall()
                return resultados
            except Error as ex:
                print(f"Error al intentar la query: {ex}")

#objDaocontrato = DAOContrato()
#print(objDaocontrato.listarContrato())

    def registrarContrato(self,contrato):
        if self.conexion.is_connected:
            try:
                cursor = self.conexion.cursor()
                sql= "INSERT INTO contratos (id_contrato, id_propietario, id_propiedad, nom_arrendatario, cc_arrendatario, image_c2, num_arrendatario, email_arrendatario, nom_fiador, cc_fiador, image_c3, num_fiador, email_fiador, date_star, image_contrato) VALUES ('{0}','{1}','{2}','{3}','{4}','{5}','{6}','{7}','{8}','{9}','{10}','{11}','{12}','{13}','{14}')"
                cursor.execute(sql.format(contrato[0], contrato[1], contrato[2], contrato[3], contrato[4], contrato[5], contrato[6], contrato[7], contrato[8], contrato[9], contrato[10], contrato[11], contrato[12], contrato[13], contrato[14]))
                self.conexion.commit()
            except Error as ex:
                print(f"Error al intentar la query: {ex}")
            else:
                print("Registro exitoso")

    
    #Funcion actualizar datos
    def actualizarContrato(self, contrato):
        if self.conexion.is_connected():
            try:
                cursor = self.conexion.cursor()
                sql = f"UPDATE contratos SET id_propietario={contrato[1]}, id_propiedad={contrato[2]}, nom_arrendatario='{contrato[3]}', cc_arrendatario='{contrato[4]}', image_c2={contrato[5]}, num_arrendatario={contrato[6]}, email_arrendatario='{contrato[7]}', nom_fiador='{contrato[8]}', cc_fiador='{contrato[9]}', image_c3={contrato[10]}, num_fiador={contrato[11]}, email_fiador='{contrato[12]}', date_star={contrato[13]}, image_contrato={contrato[14]}\
                    WHERE id_contrato={contrato[0]};"

                cursor.execute(sql)
                self.conexion.commit()
            except Error as ex:
                print(f"Error al intentar la query: {ex}")
            else:
                print("Actualización exitosa")

    #Funcion eliminar contrato
    def eliminarContrato(self,id):
        if self.conexion.is_connected():
            try:
                cursor = self.conexion.cursor()
                sql = f"DELETE FROM contratos WHERE id_contrato={id};"
                cursor.execute(sql)
                self.conexion.commit()
            except Error as ex:
                print(f"Error al intentar la query: {ex}")
            else:
                print("Se elimino correctamente")


        


    




