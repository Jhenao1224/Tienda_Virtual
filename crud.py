import firebase_admin
from firebase_admin import db, credentials
import datetime

productos_ref = db.reference('Producto')
usuarios_ref = db.reference('Usuario')
id_contador_ref = db.reference('Contadores')  # Nodo que almacenará los últimos IDs usados

# Función para obtener el siguiente ID autoincremental
def obtener_nuevo_id(tipo):
    # Verifica si ya existe un contador para el tipo (Producto o Usuario)
    contador = id_contador_ref.child(tipo).get()
    
    if contador is None:
        contador = 1
    else:
        contador += 1
    
    # Actualiza el contador en la base de datos
    id_contador_ref.child(tipo).set(contador)
    
    return str(contador)

# CRUD para "Producto"

# Crear un nuevo producto con ID autoincremental
def crear_producto(datos):
    id_producto = obtener_nuevo_id("Producto")
    productos_ref.child(id_producto).set(datos)
    print(f"Producto {id_producto} creado con éxito.")

# Leer un producto
def leer_producto(id_producto):
    producto = productos_ref.child(id_producto).get()
    if producto:
        print(f"Producto {id_producto}: {producto}")
    else:
        print("Producto no encontrado.")
    return producto

# Actualizar un producto
def actualizar_producto(id_producto, nuevos_datos):
    productos_ref.child(id_producto).update(nuevos_datos)
    print(f"Producto {id_producto} actualizado con éxito.")

# Eliminar un producto
def eliminar_producto(id_producto):
    productos_ref.child(id_producto).delete()
    print(f"Producto {id_producto} eliminado con éxito.")

# CRUD para "Usuario"

# Crear un nuevo usuario con ID autoincremental
def crear_usuario(datos):
    id_usuario = obtener_nuevo_id("Usuario")
    usuarios_ref.child(id_usuario).set(datos)
    print(f"Usuario {id_usuario} creado con éxito.")

# Leer un usuario
def leer_usuario(id_usuario):
    usuario = usuarios_ref.child(id_usuario).get()
    if usuario:
        print(f"Usuario {id_usuario}: {usuario}")
    else:
        print("Usuario no encontrado.")
    return usuario

# Actualizar un usuario
def actualizar_usuario(id_usuario, nuevos_datos):
    usuarios_ref.child(id_usuario).update(nuevos_datos)
    print(f"Usuario {id_usuario} actualizado con éxito.")

# Eliminar un usuario
def eliminar_usuario(id_usuario):
    usuarios_ref.child(id_usuario).delete()
    print(f"Usuario {id_usuario} eliminado con éxito.")