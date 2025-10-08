# AP3-2: MVC con conexión a base de datos usando Singleton

## Descripción

Esta actividad consiste en crear una aplicación sencilla siguiendo el patrón MVC, conectando a una base de datos MySQL
mediante el patrón Singleton para la conexión. Se utiliza una estructura de carpetas más modular y profesional.

## Estructura de archivos

```
AP3-2-MVC-BBDD-Singleton/
├── public/
│   └── index.php                    # Punto de entrada de la aplicación
├── src/
│   ├── controllers/
│   │   └── TareasController.php     # Controlador principal de tareas
│   ├── models/
│   │   └── Tarea.php                # Modelo para gestionar las tareas
│   ├── views/
│   │   └── ListadoTareas.php        # Vista para mostrar las tareas
│   └── core/
│       └── Database.php             # Clase de conexión a la base de datos usando Singleton
├── config/
│   └── dbConfig.json                # Configuración de la base de datos
```

## Requisitos

1. **Base de datos**: Utiliza el script `todolist.sql` para crear la base de datos y la tabla de tareas.
2. **Conexión Singleton**: Implementa la conexión a la base de datos en `src/core/Database.php` usando el patrón
   Singleton.
3. **Modelo**: El modelo (`src/models/Tarea.php`) debe obtener el listado de tareas desde la base de datos.
4. **Controlador**: El controlador (`src/controllers/TareasController.php`) debe gestionar la lógica de obtención de
   tareas y pasarlas a la vista.
5. **Vista**: La vista (`src/views/ListadoTareas.php`) debe mostrar el listado de tareas en una tabla HTML.

## Pasos sugeridos

1. Crea la base de datos ejecutando el script `todolist.sql`.
2. Configura la conexión en `config/dbConfig.json`.
3. Implementa la clase de conexión Singleton en `src/core/Database.php`.
4. Implementa el modelo para obtener las tareas desde la base de datos.
5. Implementa el controlador para pasar los datos a la vista.
6. Implementa la vista para mostrar las tareas en una tabla HTML.

---

**Esta actividad te ayudará a entender cómo estructurar un proyecto MVC profesional en PHP y a integrar una base de
datos usando el patrón Singleton.**
