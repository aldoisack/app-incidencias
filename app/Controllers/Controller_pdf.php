<?php

namespace App\Controllers;

use App\Models\Model_incidencias;
use CodeIgniter\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;

class Controller_pdf extends Controller
{
    public function generatePdf($id_incidencia)
    {
        // Crear instancia de Dompdf
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Habilitar recursos remotos (imágenes, CSS externos, etc.)
        $dompdf = new Dompdf($options);

        // Datos para pasar a la vista
        $incidencia["incidencia"] = (new Model_incidencias())->buscar_incidencia($id_incidencia);

        // Cargar vista y pasar los datos
        $html = view('pdf_template', $incidencia);

        // Definir tamaño de papel y orientación
        $dompdf->setPaper('A4', 'portrait');

        // Cargar contenido HTML
        $dompdf->loadHtml($html);

        // Renderizar PDF
        $dompdf->render();

        // Salida del PDF en el navegador
        $dompdf->stream('documento.pdf', array("Attachment" => 0)); // Cambia a 1 para forzar la descarga
    }
}
