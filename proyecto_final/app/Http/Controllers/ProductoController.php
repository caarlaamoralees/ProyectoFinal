<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Response;

class ProductoController extends Controller
{
    public function descargarXML()
    {
        $productos = Producto::all();

        $xml = new \SimpleXMLElement('<?xml version="1.0"?><productos></productos>');

        foreach ($productos as $producto) {
            $productoXML = $xml->addChild('producto');
            $productoXML->addChild('id', $producto->ID);
            $productoXML->addChild('marca', htmlspecialchars($producto->MARCA ?? ''));
            $productoXML->addChild('modelo', htmlspecialchars($producto->MODELO ?? ''));
            $productoXML->addChild('color', htmlspecialchars($producto->COLOR ?? ''));
            $productoXML->addChild('peso', htmlspecialchars($producto->PESO ?? ''));
            $productoXML->addChild('precio', $producto->PRECIO ?? 0);
            $productoXML->addChild('descripcion', htmlspecialchars($producto->DESCRIPCION ?? ''));
            // Si quieres incluir imagen, descomenta esta línea:
            // $productoXML->addChild('imagen', htmlspecialchars($producto->IMAGEN ?? ''));
        }

        return Response::make($xml->asXML(), 200, [
            'Content-Type' => 'application/xml',
            'Content-Disposition' => 'attachment; filename="productos.xml"',
        ]);
    }
}