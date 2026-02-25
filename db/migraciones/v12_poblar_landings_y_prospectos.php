<?php

/**
 * Migración v12: Poblar landings y prospectos
 * Inserta landings y prospectos reales del sistema anterior
 */
class V12PoblarLandingsYProspectos {

    
    public function descripcion() {
        return "Insertar landings y prospectos reales del sistema anterior";
    }
    
    public function ejecutar() {
        // Insertar landings adicionales
        $this->insertarLandings();
        
        // Insertar prospectos de ejemplo
        $this->insertarProspectos();
        
        logger()->info("Landings y prospectos insertados correctamente");
    }
    
    private function insertarLandings() {
        $landings = [
            ['keyword' => 'Pulido+Pisos', 'h1' => 'Pulido de pisos', 'h2' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'meta_titulo' => 'Pulido de pisos', 'meta_descripcion' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'activa' => 1],
            ['keyword' => 'Pulido-Pisos', 'h1' => 'Pulido de pisos', 'h2' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'meta_titulo' => 'Pulido - Pisos', 'meta_descripcion' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'activa' => 1],
            ['keyword' => 'Pisos-Cemento-Pulidos', 'h1' => 'Pisos pulidos de cemento', 'h2' => 'Calidad y variedad de sistemas de recubrimientos, pulido y abrillantado de pisos.', 'meta_titulo' => 'Pisos - Cemento - Pulidos', 'meta_descripcion' => 'Calidad y variedad de sistemas de recubrimientos, pulido y abrillantado de pisos.', 'activa' => 1],
            ['keyword' => 'Abrillantado-Pisos', 'h1' => 'Abrillantado de pisos', 'h2' => 'Tenemos el equipo y producto perfecto para atender necesidades específicas en tu empresa.', 'meta_titulo' => 'Abrillantado - Pisos', 'meta_descripcion' => 'Tenemos el equipo y producto perfecto para atender necesidades específicas en tu empresa.', 'activa' => 1],
            ['keyword' => 'Pulido-Pisos-m2', 'h1' => 'Pulido de pisos por m²', 'h2' => 'Garantía integra resistencia ante agresiones químicas, antiadherentes y descontaminantes.', 'meta_titulo' => 'Pulido - Pisos - m2', 'meta_descripcion' => 'Garantía integra resistencia ante agresiones químicas, antiadherentes y descontaminantes.', 'activa' => 1],
            ['keyword' => 'Servicio-Pulido-Pisos', 'h1' => 'Servicio de pulido de pisos', 'h2' => 'Brindamos a nuestros clientes servicios que superen las más exigentes expectativas.', 'meta_titulo' => 'Servicio - Pulido - Pisos', 'meta_descripcion' => 'Brindamos a nuestros clientes servicios que superen las más exigentes expectativas.', 'activa' => 1],
            ['keyword' => 'Limpieza-Pulido-Pisos', 'h1' => 'Limpieza y pulido de pisos', 'h2' => 'Tenemos el equipo y producto perfecto para atender necesidades específicas en tu empresa.', 'meta_titulo' => 'Limpieza - Pulido - Pisos', 'meta_descripcion' => 'Tenemos el equipo y producto perfecto para atender necesidades específicas en tu empresa.', 'activa' => 1],
            ['keyword' => 'Pisos-Epóxicos', 'h1' => 'Pisos epóxicos', 'h2' => 'Servicios de pulido, abrillantado, recubrimientos y morteros epóxicos industriales.', 'meta_titulo' => 'Pisos - Epóxicos', 'meta_descripcion' => 'Servicios de pulido, abrillantado, recubrimientos y morteros epóxicos industriales.', 'activa' => 1],
            ['keyword' => 'Pisos-Epoxicos', 'h1' => 'Pisos epóxicos', 'h2' => 'Tenemos el equipo y producto perfecto para atender necesidades específicas en tu empresa.', 'meta_titulo' => 'Pisos - Epoxicos', 'meta_descripcion' => 'Tenemos el equipo y producto perfecto para atender necesidades específicas en tu empresa.', 'activa' => 1],
            ['keyword' => 'Recubrimientos-Pisos', 'h1' => 'Recubrimientos para pisos', 'h2' => 'Servicios de pulido, abrillantado, recubrimientos y morteros epóxicos industriales.', 'meta_titulo' => 'Recubrimientos - Pisos', 'meta_descripcion' => 'Servicios de pulido, abrillantado, recubrimientos y morteros epóxicos industriales.', 'activa' => 1],
            ['keyword' => 'Recubrimientos-Epoxicos', 'h1' => 'Recubrimientos epóxicos', 'h2' => 'Brindamos a nuestros clientes servicios que superen las más exigentes expectativas.', 'meta_titulo' => 'Recubrimientos - Epoxicos', 'meta_descripcion' => 'Brindamos a nuestros clientes servicios que superen las más exigentes expectativas.', 'activa' => 1],
            ['keyword' => 'Pisos-Epoxicos-Industriales', 'h1' => 'Pisos epóxicos industriales', 'h2' => 'Calidad y variedad de sistemas de recubrimientos, pulido y abrillantado de pisos.', 'meta_titulo' => 'Pisos - Epoxicos - Industriales', 'meta_descripcion' => 'Calidad y variedad de sistemas de recubrimientos, pulido y abrillantado de pisos.', 'activa' => 1],
            ['keyword' => 'Pisos-Epóxicos-Industriales', 'h1' => 'Pisos epóxicos industriales', 'h2' => 'Calidad y variedad de sistemas de recubrimientos, pulido y abrillantado de pisos.', 'meta_titulo' => 'Pisos - Epóxicos - Industriales', 'meta_descripcion' => 'Calidad y variedad de sistemas de recubrimientos, pulido y abrillantado de pisos.', 'activa' => 1],
            ['keyword' => 'Revestimientos-Pisos', 'h1' => 'Revestimientos para pisos', 'h2' => 'Servicios de pulido, abrillantado, recubrimientos y morteros epóxicos industriales.', 'meta_titulo' => 'Revestimientos - Pisos', 'meta_descripcion' => 'Servicios de pulido, abrillantado, recubrimientos y morteros epóxicos industriales.', 'activa' => 1],
            ['keyword' => 'Morteros-Epoxicos', 'h1' => 'Morteros epóxicos', 'h2' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'meta_titulo' => 'Morteros - Epoxicos', 'meta_descripcion' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'activa' => 1],
            ['keyword' => 'Morteros-Industriales', 'h1' => 'Morteros industriales', 'h2' => 'Garantía integra resistencia ante agresiones químicas, antiadherentes y descontaminantes.', 'meta_titulo' => 'Morteros - Industriales', 'meta_descripcion' => 'Garantía integra resistencia ante agresiones químicas, antiadherentes y descontaminantes.', 'activa' => 1],
            ['keyword' => 'Curva-Epoxica', 'h1' => 'Curva epóxica', 'h2' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'meta_titulo' => 'Curva - Epoxica', 'meta_descripcion' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'activa' => 1],
            ['keyword' => 'Señalizacion-Industrial', 'h1' => 'Señalización industrial', 'h2' => 'Tenemos el equipo y producto perfecto para atender necesidades específicas en tu empresa.', 'meta_titulo' => 'Señalizacion - Industrial', 'meta_descripcion' => 'Tenemos el equipo y producto perfecto para atender necesidades específicas en tu empresa.', 'activa' => 1],
            ['keyword' => 'Senalizacion-industrial', 'h1' => 'Señalización + Industrial', 'h2' => 'Brindamos a nuestros clientes servicios que superen las más exigentes expectativas.', 'meta_titulo' => 'Senalizacion - industrial', 'meta_descripcion' => 'Brindamos a nuestros clientes servicios que superen las más exigentes expectativas.', 'activa' => 1],
            ['keyword' => 'Senalamientos-Industrial', 'h1' => 'Señalamientos Industriales', 'h2' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'meta_titulo' => 'Senalamientos - Industrial', 'meta_descripcion' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'activa' => 1],
            ['keyword' => 'SenalamientosIndustrial', 'h1' => 'Señalamientos industriales', 'h2' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'meta_titulo' => 'Señalamientos industriales', 'meta_descripcion' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'activa' => 1],
            ['keyword' => 'Senaletica-Seguridad-Industrial', 'h1' => 'Señalética de seguridad industrial', 'h2' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'meta_titulo' => 'Señalética de seguridad industrial', 'meta_descripcion' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'activa' => 1],
            ['keyword' => 'Senaleticaindustrial', 'h1' => 'Señalética industrial', 'h2' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'meta_titulo' => 'Señalética industrial', 'meta_descripcion' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'activa' => 1],
            ['keyword' => 'pisos-epoxicos-autonivelantes', 'h1' => 'Pisos Epóxicos Autonivelantes', 'h2' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'meta_titulo' => 'pisos - epoxicos - autonivelantes', 'meta_descripcion' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'activa' => 1],
            ['keyword' => 'pisosepoxicosautonivelantes', 'h1' => 'Pisos Epóxicos Autonivelantes', 'h2' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'meta_titulo' => 'pisos epoxicos autonivelantes', 'meta_descripcion' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'activa' => 1],
            ['keyword' => 'Pisos-Epoxicos-Autonivelantes', 'h1' => 'Pisos Epóxicos Autonivelantes', 'h2' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'meta_titulo' => 'Pisos-Epoxicos-Autonivelantes', 'meta_descripcion' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'activa' => 1],
            ['keyword' => 'Pisos-Epoxicos-Garajes', 'h1' => 'Pisos Epóxicos para Garajes', 'h2' => 'Calidad y variedad de sistemas de recubrimientos, pulido y abrillantado de pisos.', 'meta_titulo' => 'Pisos-Epoxicos-Garajes', 'meta_descripcion' => 'Calidad y variedad de sistemas de recubrimientos, pulido y abrillantado de pisos.', 'activa' => 1],
            ['keyword' => 'Pisos-Epoxicos-Hospitales', 'h1' => 'Pisos Epóxicos para Hospitales', 'h2' => 'Tenemos el equipo y producto perfecto para atender necesidades específicas en tu empresa.', 'meta_titulo' => 'Pisos-Epoxicos-Hospitales', 'meta_descripcion' => 'Tenemos el equipo y producto perfecto para atender necesidades específicas en tu empresa.', 'activa' => 1],
            ['keyword' => 'Mantenimiento-Pisos-Epoxicos', 'h1' => 'Mantenimiento de Pisos Epóxicos', 'h2' => 'Garantía integra resistencia ante agresiones químicas, antiadherentes y descontaminantes.', 'meta_titulo' => 'Mantenimiento-Pisos-Epoxicos', 'meta_descripcion' => 'Garantía integra resistencia ante agresiones químicas, antiadherentes y descontaminantes.', 'activa' => 1],
            ['keyword' => 'Pulido-Pisos', 'h1' => 'Pulido de Pisos', 'h2' => 'Gran experiencia en el sector automotriz, plantas de producción, tecnologías y mucho más.', 'meta_titulo' => 'Pulido de Pisos', 'meta_descripcion' => 'Servicios profesionales de pulido de pisos industriales.', 'activa' => 1]
        ];
        
        foreach ($landings as $landing) {
            $sql = "INSERT IGNORE INTO landings (keyword, h1, h2, meta_titulo, meta_descripcion, activa) 
                    VALUES (:keyword, :h1, :h2, :meta_titulo, :meta_descripcion, :activa)";
            db()->ejecutarConsulta($sql, [
                ':keyword' => $landing['keyword'],
                ':h1' => $landing['h1'],
                ':h2' => $landing['h2'],
                ':meta_titulo' => $landing['meta_titulo'],
                ':meta_descripcion' => $landing['meta_descripcion'],
                ':activa' => $landing['activa']
            ]);
        }
    }
    
    private function insertarProspectos() {
        // Primero crear un mapeo de keywords de landing a IDs
        $landingMap = $this->obtenerMapeoLandings();
        
        $prospectos = [
            ['nombre' => 'Dan Arcos', 'correo' => 'daniel@cimientomx.com', 'telefono' => '4423702136', 'landing' => 'Default'],
            ['nombre' => 'Jade Palomo', 'correo' => 'jadepalomo2980@gmail.com', 'telefono' => '7122227431', 'landing' => 'Pisos-Epóxicos'],
            ['nombre' => 'Gabriel rivera cela', 'correo' => 'fernandardv53@gmail.com', 'telefono' => '7711009608', 'landing' => 'Pulido-Pisos-m2'],
            ['nombre' => 'Enrique', 'correo' => 'enriquesineciog@gmail.com', 'telefono' => '3339454007', 'landing' => 'Pulido-Pisos-m2'],
            ['nombre' => 'Juan José', 'correo' => 'im_gto@hotmail.com', 'telefono' => '4291522824', 'landing' => 'Pisos-Epóxicos'],
            ['nombre' => 'Roberto Navarro', 'correo' => 'zuustento@gmail.com', 'telefono' => '4427768816', 'landing' => 'Pisos-Epóxicos'],
            ['nombre' => 'AURELIO MAYO', 'correo' => 'aureliomayo@smnegocio.com', 'telefono' => '2299784838', 'landing' => 'Default'],
            ['nombre' => 'Luis Daniel Garduño', 'correo' => 'luis.garduno@ejecutando.com', 'telefono' => '5512597291', 'landing' => 'Pisos-Epóxicos'],
            ['nombre' => 'Edith Arteaga', 'correo' => 'edith.arteaga@ditekleon.com.mx', 'telefono' => '4792149332', 'landing' => 'Pisos-Epóxicos'],
            ['nombre' => 'COMPRESORES MULTIFLO', 'correo' => 'multiflo@prodigy.net.mx', 'telefono' => '4772661734', 'landing' => 'Limpieza-Pulido-Pisos'],
            ['nombre' => 'Ricardo Sánchez', 'correo' => 'ricardo.sanchez@lubriagsa.com', 'telefono' => '3332504700', 'landing' => 'Limpieza-Pulido-Pisos'],
            ['nombre' => 'Cristina Navarro', 'correo' => 'crsmel@hotmail.com', 'telefono' => '5548983763', 'landing' => 'Senaleticaindustrial'],
            ['nombre' => 'Julieta', 'correo' => 'julcer24@hotmail.com', 'telefono' => '5540888994', 'landing' => 'Pulido-Pisos-m2'],
            ['nombre' => 'Carolina Ordoñez Cambuston', 'correo' => 'cordonez@teleton-gto.org.mx', 'telefono' => '4626968685', 'landing' => 'Servicio-Pulido-Pisos'],
            ['nombre' => 'Jose Tenorio', 'correo' => 'automatizacion@dnchemicals.com', 'telefono' => '4442010526', 'landing' => 'Pisos-Epóxicos'],
            ['nombre' => 'Luis', 'correo' => 'toml79@hotmail.com', 'telefono' => '4441130213', 'landing' => 'Pulido-Pisos-m2'],
            ['nombre' => 'Elisa Santamaria', 'correo' => 'auxiliar2@glifostamp.com', 'telefono' => '7712798749', 'landing' => 'Senaleticaindustrial'],
            ['nombre' => 'MONICA ADRIANA CARRERA', 'correo' => 'anita.oliva@capalab.mx', 'telefono' => '4443066847', 'landing' => 'Servicio-Pulido-Pisos'],
            ['nombre' => 'Rajiv', 'correo' => 'rajivriverarosas@hotmail.com', 'telefono' => '3331425138', 'landing' => 'Pisos-Epóxicos'],
            ['nombre' => 'Carlos Gutierrez', 'correo' => 'cgtz4902@gmail.com', 'telefono' => '4435976098', 'landing' => 'Pisos-Epoxicos-Autonivelantes'],
            ['nombre' => 'karina', 'correo' => 'ventas3@gvdelbajio.com', 'telefono' => '4424676176', 'landing' => 'Limpieza-Pulido-Pisos'],
            ['nombre' => 'Armando Gómez DeLa Vega', 'correo' => 'WEZKAWEZK@GMAIL.COM', 'telefono' => '5548825150', 'landing' => 'Servicio-Pulido-Pisos'],
            ['nombre' => 'victor samano bertaud', 'correo' => 'obrasmcv@hotmail.com', 'telefono' => '4331001228', 'landing' => 'Pisos-Epóxicos'],
            ['nombre' => 'francisco vazquez morales', 'correo' => 'JAVIER.UNACH.CIVIL@GMAIL.COM', 'telefono' => '9617084636', 'landing' => 'Pisos-Epoxicos-Autonivelantes'],
            ['nombre' => 'Oscar Reyes', 'correo' => 'ventas@faese.mx', 'telefono' => '5523172713', 'landing' => 'Pisos-Epóxicos'],
            ['nombre' => 'José Luis', 'correo' => 'lucerdv3@gmail.com', 'telefono' => '4495126400', 'landing' => 'Limpieza-Pulido-Pisos'],
            ['nombre' => 'RICARDO RE', 'correo' => 'greyes@ciensa.com.mx', 'telefono' => '8444276080', 'landing' => 'Pulido-Pisos'],
            ['nombre' => 'ALMA LILIA ZARRAGA', 'correo' => 'alzarragat@gmail.com.mx', 'telefono' => '4421439700', 'landing' => 'Servicio-Pulido-Pisos']
        ];
        
        foreach ($prospectos as $prospecto) {
            // Obtener landing_id del mapeo
            $landing_id = isset($landingMap[$prospecto['landing']]) ? $landingMap[$prospecto['landing']] : 1;
            
            // Asignar interes_id y servicio_id de forma aleatoria (1-5)
            $interes_id = rand(1, 5);
            $servicio_id = rand(1, 5);
            
            $sql = "INSERT INTO prospectos (nombre, telefono, correo, interes_id, servicio_id, landing_id) 
                    VALUES (:nombre, :telefono, :correo, :interes_id, :servicio_id, :landing_id)";
            db()->ejecutarConsulta($sql, [
                ':nombre' => $prospecto['nombre'],
                ':telefono' => $prospecto['telefono'],
                ':correo' => $prospecto['correo'],
                ':interes_id' => $interes_id,
                ':servicio_id' => $servicio_id,
                ':landing_id' => $landing_id
            ]);
        }
    }
    
    /**
     * Obtiene un mapeo de keywords de landing a IDs
     * @return array
     */
    private function obtenerMapeoLandings() {
        $sql = "SELECT id, keyword FROM landings";
        $landings = db()->ejecutarConsulta($sql, []);
        
        $mapa = ['Default' => 1]; // ID 1 es la landing por defecto
        foreach ($landings as $landing) {
            $mapa[$landing['keyword']] = $landing['id'];
        }
        
        return $mapa;
    }
}

?>
