<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Commune;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Región de Arica y Parinacota (id: 1)
            ['name' => 'Arica', 'region_id' => 1],
            ['name' => 'Camarones', 'region_id' => 1],
            ['name' => 'Putre', 'region_id' => 1],
            ['name' => 'General Lagos', 'region_id' => 1],

            // Región de Tarapacá (id: 2)
            ['name' => 'Iquique', 'region_id' => 2],
            ['name' => 'Alto Hospicio', 'region_id' => 2],
            ['name' => 'Pozo Almonte', 'region_id' => 2],
            ['name' => 'Camiña', 'region_id' => 2],
            ['name' => 'Colchane', 'region_id' => 2],
            ['name' => 'Huara', 'region_id' => 2],
            ['name' => 'Pica', 'region_id' => 2],

            // Región de Antofagasta (id: 3)
            ['name' => 'Antofagasta', 'region_id' => 3],
            ['name' => 'Mejillones', 'region_id' => 3],
            ['name' => 'Sierra Gorda', 'region_id' => 3],
            ['name' => 'Taltal', 'region_id' => 3],
            ['name' => 'Calama', 'region_id' => 3],
            ['name' => 'Ollagüe', 'region_id' => 3],
            ['name' => 'San Pedro de Atacama', 'region_id' => 3],
            ['name' => 'Tocopilla', 'region_id' => 3],
            ['name' => 'María Elena', 'region_id' => 3],

            // Región de Atacama (id: 4)
            ['name' => 'Copiapó', 'region_id' => 4],
            ['name' => 'Caldera', 'region_id' => 4],
            ['name' => 'Tierra Amarilla', 'region_id' => 4],
            ['name' => 'Chañaral', 'region_id' => 4],
            ['name' => 'Diego de Almagro', 'region_id' => 4],
            ['name' => 'Vallenar', 'region_id' => 4],
            ['name' => 'Freirina', 'region_id' => 4],
            ['name' => 'Huasco', 'region_id' => 4],
            ['name' => 'Alto del Carmen', 'region_id' => 4],

            // Región de Coquimbo (id: 5)
            ['name' => 'La Serena', 'region_id' => 5],
            ['name' => 'Coquimbo', 'region_id' => 5],
            ['name' => 'Andacollo', 'region_id' => 5],
            ['name' => 'La Higuera', 'region_id' => 5],
            ['name' => 'Paihuano', 'region_id' => 5],
            ['name' => 'Vicuña', 'region_id' => 5],
            ['name' => 'Illapel', 'region_id' => 5],
            ['name' => 'Canela', 'region_id' => 5],
            ['name' => 'Los Vilos', 'region_id' => 5],
            ['name' => 'Salamanca', 'region_id' => 5],
            ['name' => 'Ovalle', 'region_id' => 5],
            ['name' => 'Combarbalá', 'region_id' => 5],
            ['name' => 'Monte Patria', 'region_id' => 5],
            ['name' => 'Punitaqui', 'region_id' => 5],
            ['name' => 'Río Hurtado', 'region_id' => 5],

            // Región de Valparaíso (id: 6)
            ['name' => 'Valparaíso', 'region_id' => 6],
            ['name' => 'Viña del Mar', 'region_id' => 6],
            ['name' => 'Concón', 'region_id' => 6],
            ['name' => 'Quintero', 'region_id' => 6],
            ['name' => 'Puchuncaví', 'region_id' => 6],
            ['name' => 'Quilpué', 'region_id' => 6],
            ['name' => 'Villa Alemana', 'region_id' => 6],
            ['name' => 'Limache', 'region_id' => 6],
            ['name' => 'Olmué', 'region_id' => 6],
            ['name' => 'Quillota', 'region_id' => 6],
            ['name' => 'La Calera', 'region_id' => 6],
            ['name' => 'Hijuelas', 'region_id' => 6],
            ['name' => 'Nogales', 'region_id' => 6],
            ['name' => 'San Antonio', 'region_id' => 6],
            ['name' => 'Cartagena', 'region_id' => 6],
            ['name' => 'El Quisco', 'region_id' => 6],
            ['name' => 'El Tabo', 'region_id' => 6],
            ['name' => 'Algarrobo', 'region_id' => 6],
            ['name' => 'Santo Domingo', 'region_id' => 6],
            ['name' => 'San Felipe', 'region_id' => 6],
            ['name' => 'Catemu', 'region_id' => 6],
            ['name' => 'Llaillay', 'region_id' => 6],
            ['name' => 'Panquehue', 'region_id' => 6],
            ['name' => 'Putaendo', 'region_id' => 6],
            ['name' => 'Santa María', 'region_id' => 6],
            ['name' => 'Los Andes', 'region_id' => 6],
            ['name' => 'Calle Larga', 'region_id' => 6],
            ['name' => 'Rinconada', 'region_id' => 6],
            ['name' => 'San Esteban', 'region_id' => 6],
            // region metropolitana

            // Región Metropolitana de Santiago (id: 7)
            ['name' => 'Santiago', 'region_id' => 7],
            ['name' => 'Cerrillos', 'region_id' => 7],
            ['name' => 'Cerro Navia', 'region_id' => 7],
            ['name' => 'Conchalí', 'region_id' => 7],
            ['name' => 'El Bosque', 'region_id' => 7],
            ['name' => 'Estación Central', 'region_id' => 7],
            ['name' => 'Huechuraba', 'region_id' => 7],
            ['name' => 'Independencia', 'region_id' => 7],
            ['name' => 'La Cisterna', 'region_id' => 7],
            ['name' => 'La Florida', 'region_id' => 7],
            ['name' => 'La Granja', 'region_id' => 7],
            ['name' => 'La Pintana', 'region_id' => 7],
            ['name' => 'La Reina', 'region_id' => 7],
            ['name' => 'Las Condes', 'region_id' => 7],
            ['name' => 'Lo Barnechea', 'region_id' => 7],
            ['name' => 'Lo Espejo', 'region_id' => 7],
            ['name' => 'Lo Prado', 'region_id' => 7],
            ['name' => 'Macul', 'region_id' => 7],
            ['name' => 'Maipú', 'region_id' => 7],
            ['name' => 'Ñuñoa', 'region_id' => 7],
            ['name' => 'Pedro Aguirre Cerda', 'region_id' => 7],
            ['name' => 'Peñalolén', 'region_id' => 7],
            ['name' => 'Providencia', 'region_id' => 7],
            ['name' => 'Pudahuel', 'region_id' => 7],
            ['name' => 'Quilicura', 'region_id' => 7],
            ['name' => 'Quinta Normal', 'region_id' => 7],
            ['name' => 'Recoleta', 'region_id' => 7],
            ['name' => 'Renca', 'region_id' => 7],
            ['name' => 'San Joaquín', 'region_id' => 7],
            ['name' => 'San Miguel', 'region_id' => 7],
            ['name' => 'San Ramón', 'region_id' => 7],
            ['name' => 'Vitacura', 'region_id' => 7],
            ['name' => 'Puente Alto', 'region_id' => 7],
            ['name' => 'Pirque', 'region_id' => 7],
            ['name' => 'San José de Maipo', 'region_id' => 7],

            // Región del Libertador General Bernardo O'Higgins (id: 8)
            ['name' => 'Rancagua', 'region_id' => 8],
            ['name' => 'Codegua', 'region_id' => 8],
            ['name' => 'Coinco', 'region_id' => 8],
            ['name' => 'Coltauco', 'region_id' => 8],
            ['name' => 'Doñihue', 'region_id' => 8],
            ['name' => 'Graneros', 'region_id' => 8],
            ['name' => 'Las Cabras', 'region_id' => 8],
            ['name' => 'Machalí', 'region_id' => 8],
            ['name' => 'Malloa', 'region_id' => 8],
            ['name' => 'Mostazal', 'region_id' => 8],
            ['name' => 'Olivar', 'region_id' => 8],
            ['name' => 'Peumo', 'region_id' => 8],
            ['name' => 'Pichidegua', 'region_id' => 8],
            ['name' => 'Quinta de Tilcoco', 'region_id' => 8],
            ['name' => 'Rengo', 'region_id' => 8],
            ['name' => 'Requínoa', 'region_id' => 8],
            ['name' => 'San Vicente', 'region_id' => 8],
            ['name' => 'Pichilemu', 'region_id' => 8],
            ['name' => 'La Estrella', 'region_id' => 8],
            ['name' => 'Litueche', 'region_id' => 8],
            ['name' => 'Marchigüe', 'region_id' => 8],
            ['name' => 'Navidad', 'region_id' => 8],
            ['name' => 'Paredones', 'region_id' => 8],
            ['name' => 'San Fernando', 'region_id' => 8],
            ['name' => 'Chépica', 'region_id' => 8],
            ['name' => 'Chimbarongo', 'region_id' => 8],
            ['name' => 'Lolol', 'region_id' => 8],
            ['name' => 'Nancagua', 'region_id' => 8],
            ['name' => 'Palmilla', 'region_id' => 8],
            ['name' => 'Peralillo', 'region_id' => 8],
            ['name' => 'Placilla', 'region_id' => 8],
            ['name' => 'Pumanque', 'region_id' => 8],
            ['name' => 'Santa Cruz', 'region_id' => 8],


            // Región del Maule (id: 9)
            ['name' => 'Talca', 'region_id' => 9],
            ['name' => 'Constitución', 'region_id' => 9],
            ['name' => 'Curepto', 'region_id' => 9],
            ['name' => 'Empedrado', 'region_id' => 9],
            ['name' => 'Maule', 'region_id' => 9],
            ['name' => 'Pelarco', 'region_id' => 9],
            ['name' => 'Pencahue', 'region_id' => 9],
            ['name' => 'Río Claro', 'region_id' => 9],
            ['name' => 'San Clemente', 'region_id' => 9],
            ['name' => 'San Rafael', 'region_id' => 9],
            ['name' => 'Cauquenes', 'region_id' => 9],
            ['name' => 'Chanco', 'region_id' => 9],
            ['name' => 'Pelluhue', 'region_id' => 9],
            ['name' => 'Curicó', 'region_id' => 9],
            ['name' => 'Hualañé', 'region_id' => 9],
            ['name' => 'Licantén', 'region_id' => 9],
            ['name' => 'Molina', 'region_id' => 9],
            ['name' => 'Rauco', 'region_id' => 9],
            ['name' => 'Romeral', 'region_id' => 9],
            ['name' => 'Sagrada Familia', 'region_id' => 9],
            ['name' => 'Teno', 'region_id' => 9],
            ['name' => 'Vichuquén', 'region_id' => 9],
            ['name' => 'Linares', 'region_id' => 9],
            ['name' => 'Colbún', 'region_id' => 9],
            ['name' => 'Longaví', 'region_id' => 9],
            ['name' => 'Parral', 'region_id' => 9],
            ['name' => 'Retiro', 'region_id' => 9],
            ['name' => 'San Javier', 'region_id' => 9],
            ['name' => 'Villa Alegre', 'region_id' => 9],
            ['name' => 'Yerbas Buenas', 'region_id' => 9],

            // Región de Ñuble (id: 10)
            ['name' => 'Chillán', 'region_id' => 10],
            ['name' => 'Chillán Viejo', 'region_id' => 10],
            ['name' => 'El Carmen', 'region_id' => 10],
            ['name' => 'Pemuco', 'region_id' => 10],
            ['name' => 'Quillón', 'region_id' => 10],
            ['name' => 'San Carlos', 'region_id' => 10],
            ['name' => 'Yungay', 'region_id' => 10],
            ['name' => 'Bulnes', 'region_id' => 10],
            ['name' => 'Cobquecura', 'region_id' => 10],
            ['name' => 'Ninhue', 'region_id' => 10],
            ['name' => 'San Ignacio', 'region_id' => 10],
            ['name' => 'Cunco', 'region_id' => 10],
            ['name' => 'Coihueco', 'region_id' => 10],
            ['name' => 'Ránquil', 'region_id' => 10],
            ['name' => 'Treguaco', 'region_id' => 10],
            ['name' => 'Pemuco', 'region_id' => 10],
            ['name' => 'San Nicolás', 'region_id' => 10],
            ['name' => 'Pinto', 'region_id' => 10],
            ['name' => 'Coltauco', 'region_id' => 10],


            // Región del Biobío (id: 11)
            ['name' => 'Concepción', 'region_id' => 11],
            ['name' => 'Talcahuano', 'region_id' => 11],
            ['name' => 'San Pedro de la Paz', 'region_id' => 11],
            ['name' => 'Chiguayante', 'region_id' => 11],
            ['name' => 'Hualqui', 'region_id' => 11],
            ['name' => 'Penco', 'region_id' => 11],
            ['name' => 'Tomé', 'region_id' => 11],
            ['name' => 'Florida', 'region_id' => 11],
            ['name' => 'San Nicolás', 'region_id' => 11],
            ['name' => 'Lota', 'region_id' => 11],
            ['name' => 'Tirúa', 'region_id' => 11],
            ['name' => 'Cañete', 'region_id' => 11],
            ['name' => 'Contulmo', 'region_id' => 11],
            ['name' => 'Lumaco', 'region_id' => 11],
            ['name' => 'Negrete', 'region_id' => 11],
            ['name' => 'Quilleco', 'region_id' => 11],
            ['name' => 'San Rosendo', 'region_id' => 11],
            ['name' => 'Yumbel', 'region_id' => 11],
            ['name' => 'Antuco', 'region_id' => 11],
            ['name' => 'Cabrero', 'region_id' => 11],
            ['name' => 'Nacimiento', 'region_id' => 11],
            ['name' => 'San Javier', 'region_id' => 11],
            ['name' => 'Mulchén', 'region_id' => 11],
            ['name' => 'Quilaco', 'region_id' => 11],
            ['name' => 'Renaico', 'region_id' => 11],
            ['name' => 'Victoria', 'region_id' => 11],
            ['name' => 'Nacimientos', 'region_id' => 11],
            ['name' => 'Curanilahue', 'region_id' => 11],
            ['name' => 'Arauco', 'region_id' => 11],
            ['name' => 'Los Álamos', 'region_id' => 11],
            ['name' => 'Laja', 'region_id' => 11],
            ['name' => 'San Rosendo', 'region_id' => 11],


            // Región de La Araucanía (id: 12)
            ['name' => 'Temuco', 'region_id' => 12],
            ['name' => 'Padre Las Casas', 'region_id' => 12],
            ['name' => 'Arauco', 'region_id' => 12],
            ['name' => 'Cañete', 'region_id' => 12],
            ['name' => 'Gorbea', 'region_id' => 12],
            ['name' => 'Lautaro', 'region_id' => 12],
            ['name' => 'Los Sauces', 'region_id' => 12],
            ['name' => 'Melipeuco', 'region_id' => 12],
            ['name' => 'Nueva Imperial', 'region_id' => 12],
            ['name' => 'Pitrufquén', 'region_id' => 12],
            ['name' => 'Freire', 'region_id' => 12],
            ['name' => 'Villarrica', 'region_id' => 12],
            ['name' => 'Pucón', 'region_id' => 12],
            ['name' => 'Curarrehue', 'region_id' => 12],
            ['name' => 'Temuco', 'region_id' => 12],
            ['name' => 'Cunco', 'region_id' => 12],
            ['name' => 'Traiguén', 'region_id' => 12],
            ['name' => 'Victoria', 'region_id' => 12],
            ['name' => 'Renaico', 'region_id' => 12],
            ['name' => 'Ercilla', 'region_id' => 12],
            ['name' => 'Loncoche', 'region_id' => 12],
            ['name' => 'Colipilli', 'region_id' => 12],
            ['name' => 'Pucón', 'region_id' => 12],

            // Región de Los Ríos (id: 13)
            ['name' => 'Valdivia', 'region_id' => 13],
            ['name' => 'Corral', 'region_id' => 13],
            ['name' => 'Lanco', 'region_id' => 13],
            ['name' => 'Los Lagos', 'region_id' => 13],
            ['name' => 'Máfil', 'region_id' => 13],
            ['name' => 'Mariquina', 'region_id' => 13],
            ['name' => 'Paillaco', 'region_id' => 13],
            ['name' => 'Panguipulli', 'region_id' => 13],
            ['name' => 'Río Bueno', 'region_id' => 13],

            // Región de Los Lagos (id: 14)
            ['name' => 'Puerto Montt', 'region_id' => 14],
            ['name' => 'Puerto Varas', 'region_id' => 14],
            ['name' => 'Calbuco', 'region_id' => 14],
            ['name' => 'Cochamó', 'region_id' => 14],
            ['name' => 'Fresia', 'region_id' => 14],
            ['name' => 'Frutillar', 'region_id' => 14],
            ['name' => 'Los Muermos', 'region_id' => 14],
            ['name' => 'Maullín', 'region_id' => 14],
            ['name' => 'Osorno', 'region_id' => 14],
            ['name' => 'Puerto Octay', 'region_id' => 14],
            ['name' => 'Purranque', 'region_id' => 14],
            ['name' => 'Río Negro', 'region_id' => 14],
            ['name' => 'San Pablo', 'region_id' => 14],
            ['name' => 'Ancud', 'region_id' => 14],
            ['name' => 'Castro', 'region_id' => 14],
            ['name' => 'Chonchi', 'region_id' => 14],
            ['name' => 'Curaco de Vélez', 'region_id' => 14],
            ['name' => 'Dalcahue', 'region_id' => 14],
            ['name' => 'Puqueldón', 'region_id' => 14],
            ['name' => 'Queilén', 'region_id' => 14],
            ['name' => 'Quinchao', 'region_id' => 14],

            // Región de Aysén (id: 15)
            ['name' => 'Coyhaique', 'region_id' => 15],
            ['name' => 'Chile Chico', 'region_id' => 15],
            ['name' => 'Cisnes', 'region_id' => 15],
            ['name' => 'Guaitecas', 'region_id' => 15],
            ['name' => 'Aysén', 'region_id' => 15],
            ['name' => 'Lago Verde', 'region_id' => 15],
            ['name' => 'Marble', 'region_id' => 15],
            ['name' => 'Puerto Aysén', 'region_id' => 15],
            ['name' => 'Puyuhuapi', 'region_id' => 15],
            ['name' => 'Río Ibáñez', 'region_id' => 15],
            ['name' => 'Tortel', 'region_id' => 15],

            // Región de Magallanes (id: 16)
            ['name' => 'Punta Arenas', 'region_id' => 16],
            ['name' => 'Puerto Natales', 'region_id' => 16],
            ['name' => 'Porvenir', 'region_id' => 16],
            ['name' => 'Cerro Castillo', 'region_id' => 16],
            ['name' => 'Timaukel', 'region_id' => 16],
            ['name' => 'Natales', 'region_id' => 16],
            ['name' => 'Río Verde', 'region_id' => 16],
            ['name' => 'San Gregorio', 'region_id' => 16],
            ['name' => 'Laguna Blanca', 'region_id' => 16],
            ['name' => 'Torres del Paine', 'region_id' => 16],
            ['name' => 'Primavera', 'region_id' => 16],

        ];


        Commune::insert($data);
    }
}
