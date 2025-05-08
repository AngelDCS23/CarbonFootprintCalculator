<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmisionesIndirectasDatos;
use App\Http\Controllers\GuardarConsumoEnergeticoController;
use App\Models\EmisionesAño;
use App\Models\EmisionesIndirectasUsuario;
use Illuminate\Support\Facades\Log;
class GuardarEmisionesIndirectasController extends Controller{

    public function ObtenerIdEmiIndirec(){
        $idHotel = session()->get("IdHotel");
        $idEmiIndirec = EmisionesAño::where('fk_idHotel', $idHotel)->value('fk_idEmisionesIndirectas');
        $registroEmiIndi = EmisionesIndirectasUsuario::where('id', $idEmiIndirec)->first();
        \Log::info('EN LA FUNCIÓN DE OBTENER ID EMISIONES INDIRECTAS');
        Log::info($registroEmiIndi);
        \Log::info('EN LA FUNCIÓN DE OBTENER ID EMISIONES INDIRECTAS');
        return $registroEmiIndi;
    }

    public function AlmacenarEmiIndi(request $request){
        
        $idhotel = session()->get('IdHotel');
  
        $nombre = $request->tipoIndi;
        $cantidad = $request->cantidadEmi;

        $registro = $this->ObtenerIdEmiIndirec();

        if($nombre == 'Actividades administrativas y servicios auxiliares'){
            $registro->update([
                'Actividades_administrativas_servicios_aux' => $cantidad
            ]);
        }else if($nombre == 'Actividades financieras y de seguros'){
            $registro->update([
                'Actividades_financieras_seguros' => $cantidad
            ]);
        }else if($nombre == 'Actividades inmobiliarias'){
            $registro->update([
                'Actividades_inmobiliarias' => $cantidad
            ]);
        }else if($nombre == 'Actividades profesionales, cieníficas y técnicas'){
            $registro->update([
                'Actividades_prof_cien_tec' => $cantidad
            ]);
        }else if($nombre == 'Alimentación'){
            $registro->update([
                'Alimentacion' => $cantidad
            ]);
        }else if($nombre == 'Arrendamientos de edificios y otras construcciones'){
            $registro->update([
                'Arrendamientos_edi_const' => $cantidad
            ]);
        }else if($nombre == 'Arrendamientos de maquinaria, instalaciones y utillaje'){
            $registro->update([
                'Arrendamientos_maqui_instala' => $cantidad
            ]);
        }else if($nombre == 'Arrendamientos de mobiliario y enseres'){
            $registro->update([
                'Arrendamientos_de_mobiliario_y_enseres' => $cantidad
            ]);
        }else if($nombre == 'Atenciones protocolarias y representativas'){
            $registro->update([
                'Atenciones_protocolarias_y_representativas' => $cantidad
            ]);
        }else if($nombre == 'Cánones'){
            $registro->update([
                'Canones' => $cantidad
            ]);
        }else if($nombre == 'Construcción'){
            $registro->update([
                'Construccion' => $cantidad
            ]);
        }else if($nombre == 'Dietas'){
            $registro->update([
                'Dietas' => $cantidad
            ]);
        }else if($nombre == 'Educación'){
            $registro->update([
                'Educacion' => $cantidad
            ]);
        }else if($nombre == 'Equipos para procesos de la información'){
            $registro->update([
                'Equipos_procesos__info' => $cantidad
            ]);
        }else if($nombre == 'Estudios y trabajos técnicos'){
            $registro->update([
                'Estudios_y_trabajos_tecnicos' => $cantidad
            ]);
        }else if($nombre == 'Hostelería'){
            $registro->update([
                'Hosteleria' => $cantidad
            ]);
        }else if($nombre == 'Jurídicos, contenciosos'){
            $registro->update([
                'Juridicos_contenciosos' => $cantidad
            ]);
        }else if($nombre == 'Limpieza y aseo'){
            $registro->update([
                'Limpieza_y_aseo' => $cantidad
            ]);
        }else if($nombre == 'Locomoción'){
            $registro->update([
                'Locomocion' => $cantidad
            ]);
        }else if($nombre == 'Material informático no inventariable'){
            $registro->update([
                'Material_informaticoNo_inven' => $cantidad
            ]);
        }else if($nombre == 'Mobiliario y enseres'){
            $registro->update([
                'Mobiliario_y_enseres' => $cantidad
            ]);
        }else if($nombre == 'Obras'){
            $registro->update([
                'Obras' => $cantidad
            ]);
        }else if($nombre == 'Ordinario no inventariable'){
            $registro->update([
                'Ordinario_no_inventariable' => $cantidad
            ]);
        }else if($nombre == 'Otras indemnizaciones'){
            $registro->update([
                'Otras_indemnizaciones' => $cantidad
            ]);
        }else if($nombre == 'Otros suministros'){
            $registro->update([
                'Otros_suministros' => $cantidad
            ]);
        }else if($nombre == 'Postales y mensajería'){
            $registro->update([
                'Postales_y_mensajeria' => $cantidad
            ]);
        }else if($nombre == 'Prensa, revistas, libros y otras publicaciones'){
            $registro->update([
                'Prensa_revistas_libros_publi' => $cantidad
            ]);
        }else if($nombre == 'Productos farmacéuticos y material sanitario'){
            $registro->update([
                'Prod_farma_material_sani' => $cantidad
            ]);
        }else if($nombre == 'Publicidad y propaganda'){
            $registro->update([
                'Publicidad_y_propaganda' => $cantidad
            ]);
        }else if($nombre == 'Reuniones, conferencias y cursos'){
            $registro->update([
                'Reuniones_confe_cursos' => $cantidad
            ]);
        }else if($nombre == 'Seguridad'){
            $registro->update([
                'Seguridad' => $cantidad
            ]);
        }else if($nombre == 'Seguridad social obligatoria'){
            $registro->update([
                'Seguridad_social_obligatoria' => $cantidad
            ]);
        }else if($nombre == 'Servicios de telecomunicaciones'){
            $registro->update([
                'Servicios_de_telecomunicaciones' => $cantidad
            ]);
        }else if($nombre == 'Suministro de agua'){
            $registro->update([
                'Suministro_de_agua' => $cantidad
            ]);
        }else if($nombre == 'Suministros de material electrónico, eléctrico y de comunicaciones'){
            $registro->update([
                'SuministroMaterial_elec_comu' => $cantidad
            ]);
        }else if($nombre == 'Suministros de repuestos de maquinaria, utillaje y elementos de transporte'){
            $registro->update([
                'SRMUET' => $cantidad
            ]);
        }else if($nombre == 'Transportes no icluidos en alcance 1'){
            $registro->update([
                'Transpo_no_iclu_alcance_1' => $cantidad
            ]);
        }else if($nombre == 'Vestuario'){
            $registro->update([
                'Vestuario' => $cantidad
            ]);
        }else if($nombre == 'Vidrio'){
            $registro->update([
                'Vidrio' => $cantidad
            ]);
        }else if($nombre == 'Envases'){
            $registro->update([
                'Envases' => $cantidad
            ]);
        }else if($nombre == 'Papel'){
            $registro->update([
                'Papel' => $cantidad
            ]);
        }else if($nombre == 'Matería Orgánica'){
            $registro->update([
                'Materia_Organica' => $cantidad
            ]);
        }else if($nombre == 'Resto'){
            $registro->update([
                'Resto' => $cantidad
            ]);
        }
    }
}