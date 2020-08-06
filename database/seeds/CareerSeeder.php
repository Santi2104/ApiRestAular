<?php

use Illuminate\Database\Seeder;
use App\Career;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carreras = new Career;
        $carreras->name = "Tecnicatura Universitaria en Sistemas";
        $carreras->code = "ETI";
        $depto = \App\Department::find(1);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Tecnicatura Universitaria en Biogenetica";
        $carreras->code = "ETB";
        $depto = \App\Department::find(1);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Bioquimica";
        $carreras->code = "BBI";
        $depto = \App\Department::find(1);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Farmacia";
        $carreras->code = "BFA";
        $depto = \App\Department::find(1);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Ingenieria en Sistemas de Informacion";
        $carreras->code = "ISI";
        $depto = \App\Department::find(1);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Sistemas de Informacion";
        $carreras->code = "LSI";
        $depto = \App\Department::find(1);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Diseño y Produccion Multimedia";
        $carreras->code = "EPM";
        $depto = \App\Department::find(1);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Ingenieria Mecatronica";
        $carreras->code = "EIM";
        $depto = \App\Department::find(1);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Ciencias Biologicas";
        $carreras->code = "ECB";
        $depto = \App\Department::find(1);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Tecnicatura en Electro Electronica";
        $carreras->code = "ATE";
        $depto = \App\Department::find(2);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Arquitectura";
        $carreras->code = "AAR";
        $depto = \App\Department::find(2);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Geologia";
        $carreras->code = "AG";
        $depto = \App\Department::find(2);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Ingenieria Agropecuaria";
        $carreras->code = "EGA";
        $carreras->description = "Esta no tiene el codigo correcto";
        $depto = \App\Department::find(2);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Ingenieria Civil";
        $carreras->code = "AIC";
        $depto = \App\Department::find(2);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Ingenieria Industrial";
        $carreras->code = "AII";
        $depto = \App\Department::find(2);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Ingenieria en Recursos Renovables para Zonas Aridas";
        $carreras->code = "EAA";
        $carreras->description = "Esta no tiene el codigo correcto";
        $depto = \App\Department::find(2);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Ingenieria Agroindustrial";
        $carreras->code = "AIA";
        $depto = \App\Department::find(2);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Ingenieria en Alimentos";
        $carreras->code = "AAL";
        $depto = \App\Department::find(2);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Produccion Vegetal";
        $carreras->code = "ELV";
        $carreras->description = "Esta no tiene el codigo correcto";
        $depto = \App\Department::find(2);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Hidrogeologia";
        $carreras->code = "ELH";
        $carreras->description = "Esta no tiene el codigo correcto";
        $depto = \App\Department::find(2);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Veterinaria";
        $carreras->code = "EV";
        $carreras->description = "Esta no tiene el codigo correcto";
        $depto = \App\Department::find(2);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Ingenieria Agronomica";
        $carreras->code = "AAG";
        $depto = \App\Department::find(2);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Enfermeria";
        $carreras->code = "CLE";
        $depto = \App\Department::find(5);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Produccion de Bioimagenes";
        $carreras->code = "CLB";
        $depto = \App\Department::find(5);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Terapia Ocupacional";
        $carreras->code = "CLT";
        $depto = \App\Department::find(5);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Medicina";
        $carreras->code = "CME";
        $depto = \App\Department::find(5);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Odontologia";
        $carreras->code = "SOD";
        $depto = \App\Department::find(5);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Ciencias de la Educacion";
        $carreras->code = "CED";
        $depto = \App\Department::find(5);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Profesorado en Ciencias de la Educacion";
        $carreras->code = "CPE";
        $carreras->description = "Esta no tiene el codigo correcto";
        $depto = \App\Department::find(5);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Educacion Fisica";
        $carreras->code = "SEF";
        $carreras->description = "Esta no tiene el codigo correcto";
        $depto = \App\Department::find(5);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Profesorado en Educacion Fisica";
        $carreras->code = "PEF";
        $carreras->description = "Esta no tiene el codigo correcto";
        $depto = \App\Department::find(5);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Tecnicatura Supererior Universitaria En Gestion Juridica";
        $carreras->code = "SGJ";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Tecnicatura Supererior Universitaria En Gestion y Administracion Contable";
        $carreras->code = "SGA";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Tecnicatura Supererior Universitaria En Subastador y Martillero Publico";
        $carreras->code = "SSM";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Tecnicaura Supererior Universitaria En Tasador y Corredor Inmobiliario";
        $carreras->code = "STC";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Tecnicaura Supererior Universitaria En Guia de Turismo";
        $carreras->code = "SGT";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Tecnicaura Supererior Universitaria En Seguridad Urbana";
        $carreras->code = "STS";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Tecnicaura Supererior Universitaria En Television Digital";
        $carreras->code = "STD";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Abogacia";
        $carreras->code = "SAB";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Contador Publico";
        $carreras->code = "SCO";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Escribania";
        $carreras->code = "SES";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Administracion";
        $carreras->code = "SLA";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Economia";
        $carreras->code = "SLE";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura Ciencias Politicas";
        $carreras->code = "SCP";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Turismo";
        $carreras->code = "SLT";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Comunicacion Social";
        $carreras->code = "SCS";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Trabajo Social";
        $carreras->code = "CTS";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Criminalistica";
        $carreras->code = "SLC";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Procuracion";
        $carreras->code = "SPR";
        $depto = \App\Department::find(4);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Tecnico Universitario en Bibliotecologia";
        $carreras->code = "HTB";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Tecnico Universitario en Administracion de Documentos y Archivos";
        $carreras->code = "HTD";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Tecnico Universitario en Museologia";
        $carreras->code = "HTM";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Profesorado Universitario en Historia para el Nivel Secundario Superior";
        $carreras->code = "HPH";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura y Profesorado en Letras";
        $carreras->code = "HLL";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura y Profesora en Lengua y Literatura Inglesa";
        $carreras->code = "SLI";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura y Profesorado en Artes Plasticas";
        $carreras->code = "HPA";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Historia";
        $carreras->code = "HLH";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Musica";
        $carreras->code = "HMGUI";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Arte Escenico";
        $carreras->code = "EVVV";
        $carreras->description = "Esta no tiene el codigo correcto y aparece en SIU con dos ID distintas";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Teologia y Religiones Comparadas";
        $carreras->code = "HTE";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura y Profesorado en Psicopedagogia";
        $carreras->code = "CPP";
        $carreras->description = "Esta tiene el codigo correcto pero son carreras distintas";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Traductorado Publico Nacional en Lengua Inglesa";
        $carreras->code = "STI";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Traductorado Publico Nacional en Lengua Francesa";
        $carreras->code = "EVVA";
        $carreras->description = "Esta no tiene el codigo correcto";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Traductorado Publico Nacional en Lengua Portuguesa";
        $carreras->code = "EVVB";
        $carreras->description = "Esta no tiene el codigo correcto";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();

        $carreras = new Career;
        $carreras->name = "Licenciatura en Gestion Organizacional y Recursos Humanos";
        $carreras->code = "EVVC";
        $carreras->description = "Esta no tiene el codigo correcto";
        $depto = \App\Department::find(3);
        $carreras->department()->associate($depto);
        $carreras->save();
    }
}
