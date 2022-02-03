<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFileRequest;
use App\Models\Document;
use App\Models\Electronic;
use App\Models\Geology;
use App\Models\Industrial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        # code...
    }

    public function renderFilesGeology()
    {
        $geologia = count(Storage::allFiles('geologia'));
        $docsGeologia =  Geology::all();

        return view('admin.docs.file-show-geology', compact('geologia', 'docsGeologia'));
    }
    public function renderFilesElectronic()
    {
        $electronica = count(Storage::allFiles('electronica'));
        $docsElectronica = Electronic::all();

        return view('admin.docs.file-show-electronic', compact('electronica', 'docsElectronica'));
    }

    public function renderFilesIndustrial()
    {
        $industrial = count(Storage::allFiles('industrial'));
        $docsIndustrial = Industrial::all();

        return view('admin.docs.file-show-industrial', compact('industrial', 'docsIndustrial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.docs.file-upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFileRequest $request)
    {
        $nameFake = Str::random(40);
        
        $file = $request->file('file')
            ->storeAs(lcfirst($request->carrer) . '/' . lcfirst($request->category), $nameFake . '.' . $request->file('file')
                ->extension());
        $document = Document::create([
            'name' => $request->name,
            'original_name' => $request->file('file')->getClientOriginalName(),
            'carrer' => $request->carrer,
            'type' => $request->file('file')->extension(),
            'date' => $request->date,
            'keywords' => $request->name . ',' . $request->carrer . ',' . $request->category . ',' . $request->authors . ',' . $request->line,
        ]);

        switch ($request->carrer) {
            case 'Electronica':
                $document->electronica()->create([
                    'name' => $nameFake,
                    'keywords' => $request->name . ',' . $request->carrer . ',' . $request->category . ',' . $request->authors . ',' . $request->line,
                    'url' => Storage::url($file),
                    'category' => lcfirst($request->category),
                    'authors' => $request->authors,
                    'description' => $request->description,
                    'line' => $request->line,
                    'size' => round((Storage::size($file) / 1000000), 2) . ' MB',
                ]);
                break;
            case 'Industrial':
                $document->industrial()->create([
                    'name' => $nameFake,
                    'keywords' => $request->name . ',' . $request->carrer . ',' . $request->category . ',' . $request->authors . ',' . $request->line,
                    'url' =>  Storage::url($file),
                    'category' => lcfirst($request->category),
                    'authors' => $request->authors,
                    'description' => $request->description,
                    'line' => $request->line,
                    'size' => round((Storage::size($file) / 1000000), 2) . ' MB',
                ]);
                break;

            case 'Geologica':
                $document->geologia()->create([
                    'name' => $nameFake,
                    'keywords' => $request->name . ',' . $request->carrer . ',' . $request->category . ',' . $request->authors . ',' . $request->line,
                    'url' =>  Storage::url($file),
                    'category' => lcfirst($request->category),
                    'authors' => $request->authors,
                    'description' => $request->description,
                    'line' => $request->line,
                    'size' => round((Storage::size($file) / 1000000), 2) . ' MB',
                ]);
                break;

            default:
                # code...
                break;
        }

        return redirect()->route('admin.file-upload')
            ->with(['success' => 'El archivo "' . $request->name . '" se ha cargado con exito en ' . $request->category . ' de la carrera de Ingeniería ' . $request->carrer]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $id)
    {
        $doc = $id;

        if ($doc->electronica) {
            $carrer = 'electronica';
            return view('admin.docs.file-edit', compact('doc', 'carrer'));
        }
        if ($doc->industrial) {
            $carrer = 'industrial';
            return view('admin.docs.file-edit', compact('doc', 'carrer'));
        }
        if ($doc->geologia) {
            $carrer = 'geologia';
            return view('admin.docs.file-edit', compact('doc', 'carrer'));
        }

        /*  return view('admin.docs.file-edit', compact('doc', 'carrer')); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $doc)
    {
        $doc->update($request->all());
        if ($doc->electronica) {
            $doc->electronica->update($request->all());
        }
        if ($doc->industrial) {
            $doc->industrial->update($request->all());
        }
        if ($doc->geologia) {
            $doc->geologia->update($request->all());
        }

        return redirect()->route('admin.home')
            ->with(['success' => 'Se ha actualizado un archivo']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $id)
    {
        switch ($id->carrer) {
            case 'Electrónica':
                Storage::delete(strtolower($id->carrer) . '/' . $id->electronica->category . '/' . $id->electronica->name . '.pdf');
                $id->delete();
                break;

            case 'Industrial':
                Storage::delete(strtolower($id->carrer) . '/' . $id->industrial->category . '/' . $id->industrial->name . '.pdf');
                $id->delete();
                break;

            case 'Geológica':
                Storage::delete(strtolower($id->carrer) . '/' . $id->geologia->category . '/' . $id->geologia->name . '.pdf');
                $id->delete();
                break;

            default:
                return 'No hay nada';
                break;
        }

        return redirect()->back()
            ->with(['success' => 'Se ha borrado el archivo']);
    }
}
