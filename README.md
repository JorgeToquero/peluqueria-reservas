# Sistema de Reservas para Peluquería

Proyecto desarrollado en PHP y MySQL que permite a los clientes reservar cita 
seleccionando corte, tinte, peinado y fecha.

## 🧱 Tecnologías utilizadas
- PHP (backend)
- HTML + CSS (frontend)
- MySQL (almacenamiento)
- XAMPP (entorno local)

## ✨ Funcionalidades
- Selección de servicios (corte, tinte, peinado)
- Formulario de reserva
- Validación de disponibilidad por fecha
- Inserción en base de datos
- Mensaje de confirmación

## 📂 Estructura del proyecto
peluqueria-reservas/
│── vistaFormulario.php
│── reservar.php
│── estilos.css


Copiar código

## 🗄️ Base de datos
Crear base de datos:
```sql
CREATE DATABASE peluqueria;
Tabla:

sql
Copiar código
CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipoCorte VARCHAR(50),
    tintes VARCHAR(50),
    peinados VARCHAR(50),
    fecha DATE
);
🚀 Ejecución
Colocar el proyecto en htdocs

Iniciar Apache y MySQL en XAMPP

Acceder desde navegador:

Copiar código
http://localhost/peluqueria/vistaFormulario.php

