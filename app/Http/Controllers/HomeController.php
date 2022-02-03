<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Electronic;
use App\Models\Geology;
use App\Models\Industrial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpParser\Comment\Doc;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        if ($request->input('query')) {

            $name = $request->input('query');

            $query = Document::where('keywords', 'LIKE', '%' . $name . '%')
                ->get();

            return view('filter', compact('query', 'name'));
        }

        return view('index');
    }

    public function show($name, $id, Request $request)
    {
        if ($request->input('query')) {

            $name = $request->input('query');

            $query = Document::where('keywords', 'LIKE', '%' . $name . '%')
                ->get();

            return view('filter', compact('query', 'name'));
        }

        $doc = Document::findOrFail($id);
        if ($doc->carrer === 'Electronica') {
            $carrer = 'electronica';
            return view('components.show-file', compact('doc', 'carrer'));
        }
        if ($doc->carrer === 'Geologica') {
            $carrer = 'geologia';
            return view('components.show-file', compact('doc', 'carrer'));
        }
        if ($doc->carrer === 'Industrial') {
            $carrer = 'industrial';
            return view('components.show-file', compact('doc', 'carrer'));
        }
    }
    public function showLines(Request $request)
    {
        return Document::where("keywords", 'LIKE', '%' . $request->lineas . '%')->get();
    }

    public function about()
    {
        return view('about');
    }

    public function homeLibrary(Request $request)
    {
        if ($request->input('query')) {

            $name = $request->input('query');

            $query = Document::where('keywords', 'LIKE', '%' . $name . '%')
                ->get();

            return view('filter', compact('query', 'name'));
        }

        return view('library.home');
    }

    /**Archivos de Ingenieria Electronica */
    public function electronicFiles(Request $request)
    {
        if ($request->input('query')) {

            $name = $request->input('query');

            $query = Document::where('keywords', 'LIKE', '%' . $name . '%')
                ->get();

            return view('filter', compact('query', 'name'));
        }

        $docs = Document::where('carrer', 'Electronica')->paginate(4);

        return view('library.electronica.files', compact('docs'));
    }

    /**Archivos de Ingenieria Electronica */

    /**Archivos de Ingenieria Industrial */
    public function industrialFiles(Request $request)
    {
        if ($request->input('query')) {

            $name = $request->input('query');

            $query = Document::where('keywords', 'LIKE', '%' . $name . '%')
                ->get();

            return view('filter', compact('query', 'name'));
        }

        $docs = Document::where('carrer', 'Industrial')->paginate(4);

        return view('library.industrial.files', compact('docs'));
    }

    /**Archivos de Ingenieria Industrial */


    /**Archivos de Ingenieria Geologia */
    public function geologyFiles(Request $request)
    {
        if ($request->input('query')) {

            $name = $request->input('query');

            $query = Document::where('keywords', 'LIKE', '%' . $name . '%')
                ->get();

            return view('filter', compact('query', 'name'));
        }

        $docs = Document::where('carrer', 'Geologica')->paginate(4);

        return view('library.geologia.files', compact('docs'));
    }
    /**Archivos de Ingenieria Geologia */
}
