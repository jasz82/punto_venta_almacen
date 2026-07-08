```markdown
# 🛒 Punto de Venta / Almacén

Sistema de punto de venta y gestión de inventario desarrollado con **PHP**, **jQuery** y **Bootstrap**. Gratuito y de código abierto.

---

## 📋 Descripción

Aplicación web para la gestión de ventas, inventario, caja y clientes. Ideal para pequeños negocios, tiendas y almacenes que necesitan un sistema simple, rápido y funcional.

---

## 🚀 Características principales

- **Módulo de ventas** con ticket o comprobante
- **Gestión de inventario** (altas, bajas, ajustes)
- **Control de caja** (apertura y cierre)
- **Módulo de gastos**
- **Administración de usuarios**
- **Familias o categorías de productos**
- **Impresión de tickets** (compatible con impresoras térmicas)
- **Cambio de tema y configuración de impresora**
- **Interfaz responsive** con Bootstrap
- **Código limpio y organizado**

---

## 🛠️ Tecnologías utilizadas

| Tecnología | Propósito |
|------------|-----------|
| **PHP** | Backend y lógica de negocio |
| **MySQL** | Base de datos |
| **jQuery** | Interactividad y peticiones AJAX |
| **Bootstrap** | Frontend responsive |
| **JavaScript** | Funcionalidades dinámicas |
| **HTML / CSS** | Interfaz de usuario |

---

## 📁 Estructura del proyecto

```
PUNTO-VENTA/
│
├── modulos/                      # Módulos del sistema
│   ├── bajas_inventario/         # Bajas de inventario
│   ├── caja/                     # Gestión de caja
│   ├── familias/                 # Categorías de productos
│   ├── gastos/                   # Registro de gastos
│   ├── inventario/               # Gestión de productos y stock
│   ├── ticket/                   # Emisión de tickets
│   ├── usuarios/                 # Gestión de usuarios
│   └── ventas/                   # Módulo de ventas
│
├── inc/                          # Archivos de configuración
├── js/                           # Librerías JavaScript
│   ├── lib/                      # Librerías externas
│   │   ├── bootstrap.js
│   │   ├── jquery.js
│   │   ├── np.js
│   │   └── pnotify.js
│   └── eac.js                    # Lógica principal
│
├── img/                          # Imágenes del sistema
│   ├── favicon.png
│   └── logo.png
│
├── css/                          # Estilos CSS
├── manuales de uso/              # Documentación para usuarios
├── datos_empresa.php             # Configuración de empresa
├── db.php                        # Conexión a base de datos
├── funciones.php                 # Funciones globales
├── ticket.php                    # Visualización de ticket
├── inventario.csv                # Exportación de inventario
├── inventario.xlsx               # Exportación a Excel
├── impresora.ini                 # Configuración de impresora
└── tema.txt                      # Tema seleccionado
```

---

## 🔧 Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/tu_usuario/punto-venta.git
```

### 2. Configurar base de datos

- Crear una base de datos MySQL
- Importar el archivo SQL (si está incluido)

### 3. Configurar conexión

Editar `db.php` con las credenciales de tu base de datos:

```php
$host = 'localhost';
$user = 'tu_usuario';
$password = 'tu_contraseña';
$database = 'nombre_bd';
```

### 4. Configurar empresa

Editar `datos_empresa.php` con los datos de tu negocio:

```php
$nombre_empresa = "Mi Tienda";
$direccion = "Dirección de la tienda";
$telefono = "123456789";
$email = "tienda@correo.com";
```

### 5. Configurar impresora (opcional)

Editar `impresora.ini` para configurar la impresora de tickets.

---

## 📝 Credenciales de prueba

| Rol | Usuario | Contraseña |
|-----|---------|------------|
| Administrador | `admin` | `admin` |


---

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Por favor, abre un issue o pull request para mejorar el proyecto.

---

## 📄 Licencia

Proyecto de código abierto bajo la licencia **MIT**.

---

## 👨‍💻 Autor

**jasz82**  
GitHub: [jasz82](https://github.com/jasz82)

---

⭐ **Si te gusta este proyecto, dale una estrella en GitHub.** 🚀
```