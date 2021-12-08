<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Exception;

class GalleriesController extends Controller
{


    public function index()
    {
        $galleries = Gallery::paginate(25);

        return view('galleries.index', compact('galleries'));
    }


    public function create()
    {


        return view('galleries.create');
    }


    public function store(Request $request)
    {


            $data = $this->getData($request);

            Gallery::create($data);

            return redirect()->route('galleries.gallery.index')
                ->with('success_message', 'Gallery was successfully added.');

    }


    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('galleries.show', compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);


        return view('galleries.edit', compact('gallery'));
    }


    public function update($id, Request $request)
    {


            $data = $this->getData($request);

            $gallery = Gallery::findOrFail($id);
            $gallery->update($data);

            return redirect()->route('galleries.gallery.index')
                ->with('success_message', 'Gallery was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $gallery = Gallery::findOrFail($id);
            $gallery->delete();

            return redirect()->route('galleries.gallery.index')
                ->with('success_message', 'Gallery was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



    protected function getData(Request $request)
    {
        $rules = [
                'title' => 'string|min:1|max:255|nullable',
            'photo' => ['file','nullable'],
        ];
                if ($request->route()->getAction()['as'] == 'galleries.gallery.store' || $request->has('custom_delete_photo')) {
            array_push($rules['photo'], 'required');
        }
        $data = $request->validate($rules);
        if ($request->has('custom_delete_photo')) {
            $data['photo'] = null;
        }
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->moveFile($request->file('photo'));
        }


        return $data;
    }


    protected function moveFile($file)
    {
        if (!$file->isValid()) {
            return '';
        }

        $path = config('laravel-code-generator.files_upload_path', 'uploads');

        $saved = $file->store('public/' . $path, config('filesystems.default'));

        return substr($saved, 7);
    }
}
