<?php

namespace App\Http\Controllers;

use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;

class BarcodeController extends Controller
{
    public function generateCode()
    {
    	//DNS1D: This is used for generating one-dimensional (1D) barcodes
    	//DNS2D: This is used for generating two-dimensional (2D) barcodes.

        $qrcode = new DNS2D();

        $qrcode->setStorPath(__DIR__.'/cache/');

        $html = $qrcode->getBarcodeHTML('https://youtube.com/C/AllAboutLaravel', 'QRCODE');

        return view('codes', compact('html'));
    }
}
