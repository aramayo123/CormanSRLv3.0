# 🛠️ CormanWeb 3.0

**CormanWeb** es una aplicación web diseñada para la gestión operativa de tareas técnicas y preventivas. Su principal objetivo es facilitar a los operarios el registro de actividades mediante imágenes, gastos y seguimiento del proceso, todo desde una interfaz clara, con autenticación y administración de usuarios.

---

## 🧾 Funcionalidades Principales

### 🔐 Inicio de Sesión
- Autenticación de usuarios mediante usuario y contraseña administrados.
- Control de acceso seguro para operarios asignados.

### 📋 Gestión de Tareas
- Creación de tareas técnicas o preventivas.
- Selección del tipo de tarea a ejecutar.
- Asignación de personal responsable.
- Registro de información obligatoria en el formulario.

### 📷 Registro Visual y de Insumos
- Subida de imágenes como evidencia del trabajo realizado.
- Inclusión de gastos asociados a la tarea.
- Asociación de materiales utilizados para cada tarea.

> ⚠️ *Si algún material no figura en el listado, debe solicitarse su carga lo antes posible para mantener el inventario actualizado.*

### 🧹 Eliminación de Imágenes
- Posibilidad de eliminar imágenes cargadas.
- Confirmación obligatoria para evitar errores de eliminación.
- Interfaz visual con ícono de eliminación (`X`) en cada imagen.

### 📑 Historial de Movimientos
- Visualización de todas las acciones realizadas dentro de la plataforma.
- Supervisores pueden auditar tareas realizadas por técnicos.
- Técnicos pueden consultar el historial de sus propias intervenciones.
- Mejora del control y trazabilidad de actividades dentro del sistema.

---

## 👷‍♂️ Flujo de Trabajo del Operario

1. **Iniciar sesión** con sus credenciales asignadas.
2. **Crear una nueva tarea**, elegir tipo (técnica o preventiva), asignar personal y completar los campos requeridos.
3. **Completar la tarea** subiendo imágenes del trabajo realizado y agregando los gastos correspondientes.

---

## 🛠️ Tecnologías Utilizadas

> No especificadas en el documento, pero se asume uso de:
- Frontend: HTML, CSS, JavaScript
- Backend: PHP / Framework relacionado
- Base de Datos: MySQL u otra
- Control de acceso: Sistema de login administrado

---

## 📦 Instalación y Despliegue

Sugerencia general:
1. Clonar el repositorio:
   ```bash
   git clone https://github.com/tuusuario/CormanWeb.git
