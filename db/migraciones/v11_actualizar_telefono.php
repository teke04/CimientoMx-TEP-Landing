<?php

/**
 * Migración v11: Actualizar teléfono y WhatsApp
 * Actualiza los datos de contacto del sistema
 */
class V11ActualizarTelefono {

    public function descripcion() {
        return "Actualizar teléfono y WhatsApp de contacto";
    }
    
    public function ejecutar() {
        // Actualizar teléfono
        $sql = "UPDATE configuraciones SET valor = :valor WHERE clave = :clave";
        
        // Actualizar teléfono principal
        db()->ejecutarConsulta($sql, [
            ':clave' => 'telefono',
            ':valor' => '56 6776 3040'
        ]);
        
        // Actualizar WhatsApp (mismo número con código de país)
        db()->ejecutarConsulta($sql, [
            ':clave' => 'whatsapp_num',
            ':valor' => '525667763040'
        ]);
        
        // Actualizar mensaje predeterminado de WhatsApp
        db()->ejecutarConsulta($sql, [
            ':clave' => 'whatsapp_msg',
            ':valor' => 'Hola, me gustaría obtener más información sobre sus servicios'
        ]);
        
        logger()->info("Teléfono y WhatsApp actualizados correctamente");
    }
}

?>
