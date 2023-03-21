<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class BandsController extends Controller
{
    public function createBandForm() {
        return view('Dash.admin.band-form');
    }

    public function editBandForm(Band $band) {
        return view('Dash.admin.band-edit', [
            'band' => $band
        ]);
    }
    public function storeBand(Request $request) {
        $formField = $request->validate([
            'band_name' => ['required', Rule::unique('bands', 'band_name')],
            'band_members' => 'required',
            'band_image'=> 'required',
        ]);

        $uploadImage = Cloudinary::uploadFile($request->file('band_image')->getRealPath(),[
            'folder' => 'Band Image'
        ])->getSecurePath();

        $formField['band_image'] = $uploadImage;

        Band::create($formField);

        return redirect('/admin/band')->with('message', 'Band created successfuly ^^');
    }
    public function storeEditBand(Request $request, Band $band) {
        $formField = $request->validate([
            'band_name' => 'required',
            'band_members' => 'required',
            'band_image'=> '',
        ]);
        if ($request->hasFile('band_image')) {
            $uploadImage = Cloudinary::uploadFile($request->file('band_image')->getRealPath(),[
                'folder' => 'Band Image'
            ])->getSecurePath();
            $formField['band_image'] = $uploadImage;
        } else {
            $formField['band_image'] = $band->band_image;
        }

        $band->update($formField);

        return redirect('/admin/band')->with('message', 'Band updated successfuly ^^');
    }
    public function deleteBand(Band $band) {
        $band->delete();
        return redirect('/admin/band')->with('message', 'band deleted succesfuly U_u');
    }
}
