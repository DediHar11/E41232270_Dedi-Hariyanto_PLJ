<?php

namespace App\Http\Controllers;
use Image;
use File;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload()
    {
        return view('upload');
    }
    public function proses_upload(Request $request)
    {
        $this->validate($request,[
            'file' => 'required',
            'keterangan' => 'required',
        ]);
        $file = $request->file('file');
        echo 'File Name: '.$file->getClientOriginalName().'<br>';
        echo 'File Real Path: '.$file->getRealPath().'<br>';
        echo 'File Size: '.$file->getSize().'<br>';
        echo 'File Mime Type: '.$file->getMimeType();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $file->getClientOriginalName());
    }
    public function resize_upload(Request $request)
    {
        $this->validate($request,[
            'file' => 'required',
            'keterangan' => 'required',
        ]);
        $path = public_path('img/logo');
        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true);
        }
        $file = $request->file('file');
        $fileName = 'logo_'. uniqid() . '.' . $file->getClientOriginalExtension();
        $canvas = Image::canvas(200,200);

        $resizeImage = Image::make($file)->resize(null, 200, function($constraint){
            $constraint->aspectRatio();
        });
        $canvas->insert($resizeImage, 'center');
        if($canvas->save($path . '/' . $fileName)){
            return redirect(route('upload'))->with('success','Data berhasil ditambahkan !');
        } else {
            return redirect(route('upload'))->with('error','Data gagal ditambahkan !');
        }
    }
    public function dropzone()
    {
        return view('dropzone');
    }
    public function dropzone_store(Request $request)
    {
        $image = $request->file('file');

        $imageName = time().'.'.$image->extension();
        $image->move(public_path('img/dropzone'), $imageName);
        return response()->json(['success' => $imageName]);
    }
    public function pdf_upload()
    {
        return view('pdf_upload');
    }
    public function pdf_store(Request $request)
    {
        $pdf = $request->file('file');
        $pdfName = 'pdf_'.time().'.'.$pdf->extension();
        $pdf->move(public_path('pdf/dropzone'), $pdfName);
        return response()->json(['success'=> $pdfName]);
    }
}
