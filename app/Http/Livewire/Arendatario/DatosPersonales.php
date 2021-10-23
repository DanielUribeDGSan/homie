<?php

namespace App\Http\Livewire\Arendatario;

use Livewire\Component;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class DatosPersonales extends Component
{
    use WithFileUploads;

    protected $listeners = ['registrarFormulario'];

    public $identificacion_oficial;
    public $documentacion = [];
    public $transaccion_user;

    public $createForm = [
        'tipo_persona' => "",
        'rfc' => "",
        'fecha_nacimiento' => "",
        'estado_civil' => "",
        'ingresos_netos' => "",
        'identificacion_oficial' => "",
        'direccion_vivienda' => "",
        'institucion_educativa' => "",
        'historial_crediticio' => "",
        'trabajo' => "",
        'empresa' => "",
        'documentacion' => "",
    ];

    protected $rules = [
        'createForm.tipo_persona' => 'required|max:255',
        'createForm.rfc' => 'required|max:13',
        'createForm.fecha_nacimiento' => 'required|max:255',
        'createForm.estado_civil' => 'required|max:255',
        'createForm.ingresos_netos' => 'required|max:255',
        'createForm.identificacion_oficial' => 'required|max:255',
        'createForm.direccion_vivienda' => 'required|max:255',
        'createForm.institucion_educativa' => 'required|max:255',
        'createForm.historial_crediticio' => 'required|max:255',
        'createForm.trabajo' => 'required|max:255',
        'createForm.empresa' => 'required|max:255',
        'createForm.documentacion' => 'required|max:255',
    ];

    protected $validationAttributes = [
        'createForm.tipo_persona' => 'Persona',
        'createForm.rfc' => 'RFC',
        'createForm.fecha_nacimiento' => 'Fecha de nacimiento',
        'createForm.estado_civil' => 'Estado civil',
        'createForm.ingresos_netos' => 'Ingresos netos mensuales',
        'createForm.identificacion_oficial' => 'Identificación oficial',
        'createForm.direccion_vivienda' => 'Dirección de la vivienda',
        'createForm.institucion_educativa' => 'Institución educativa',
        'createForm.historial_crediticio' => 'Historial crediticio',
        'createForm.trabajo' => 'Trabajo',
        'createForm.empresa' => 'Nombre de la empresa',
        'createForm.documentacion' => 'Documentación',
    ];

    public function registrarFormulario()
    {
        $rules['identificacion_oficial'] = 'required';
        $rules['documentacion'] = 'required';

        $this->createForm['identificacion_oficial'] = $this->identificacion_oficial->store('alquilino/identificacion');

        foreach ($this->documentacion as $doc) {
            $doc->store('alquilino/documentos');
        }
    }

    public function render()
    {
        return view('livewire.arendatario.datos-personales');
    }
}
