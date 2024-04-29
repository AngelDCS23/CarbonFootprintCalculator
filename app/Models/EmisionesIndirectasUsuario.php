<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmisionesIndirectasUsuario extends Model{
    protected $table = 'emisiones_indirectas_usuarios';

    protected $fillable = [
        'Actividades_administrativas_servicios_aux',
        'Actividades_financieras_seguros',
        'Actividades_inmobiliarias',
        'Actividades_prof_cien_tec',
        'Alimentacion',
        'Arrendamientos_edi_const',
        'Arrendamientos_maqui_instala',
        'Arrendamientos_de_mobiliario_y_enseres',
        'Atenciones_protocolarias_y_representativas',
        'Canones',
        'Construccion',
        'Dietas',
        'Educacion',
        'Equipos_procesos_info',
        'Estudios_y_trabajos_tecnicos',
        'Hosteleria',
        'Juridicos_contenciosos',
        'Limpieza_y_aseo',
        'Locomocion',
        'Material_informaticoNo_inven',
        'Mobiliario_y_enseres',
        'Obras',
        'Ordinario_no_inventariable',
        'Otras_indemnizaciones',
        'Otros_suministros',
        'Postales_y_mensajeria',
        'Prensa_revistas_libros_publi',
        'Prod_farma_material_sani',
        'Publicidad_y_propaganda',
        'Reuniones_confe_cursos',
        'Seguridad',
        'Seguridad_social_obligatoria',
        'Servicios_de_telecomunicaciones',
        'Suministro_de_agua',
        'SuministroMaterial_elec_comu',
        'SRMUET',
        'Transpo_no_iclu_alcance_1',
        'Vestuario',
        'Vidrio',
        'Envases',
        'Papel',
        'Materia_Organica',
    ];

    public $timestamps = false;
}
