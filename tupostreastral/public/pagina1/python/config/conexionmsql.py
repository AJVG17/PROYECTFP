import mysql.connector  
from mysql.connector import *

class Conexion(object):
    conexion=""
    def __init__(self):
        try:
            self.conexion = mysql.connector.connect(
                host='localhost',
                port=3306,
                user='root',
                password='',
                db='p1'
            )
        except Error as ex:
            print("Error al intentar la conexión: {0}".format(ex))
        else:
            pass
            #print("Conexion exitosa")

    
#conexion=Conexion()