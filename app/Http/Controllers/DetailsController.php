<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $students = Student::all();
        return view('students.details', compact('students')); // compact() pengganti [ 'students' => $students ]
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        // code untuk memasukkan ke database

        // CARA I:

        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nrp = $request->nrp;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        // CARA II:
        // - lebih secure karena tidak sembarang orang bisa mengisi data
        // - menggunakan fillable

        // Student::create([

        //     'nama' => $request->nama,
        //     'nrp' => $request-> nrp,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan,

        // ]);

        // Cara ringkas dari cara ke 2 dengan syarat fillable telah diisi 

        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:9',
            'email' => 'email:rfc,dns',
            'jurusan' => 'required',
        ]);

        Student::create($request->all());

        return redirect('/details')->with('status', 'Data Mahasiswa Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student) // isi method harus sesuai dengan apa yang ingin di return
    {
        //
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {   
        // return $request; // jika yang direturn $student maka data lama

        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:9',
            'email' => 'email:rfc,dns',
            'jurusan' => 'required',
        ]);

        Student::where('id', $student->id)
                ->update([
                    'nama' => $request->nama,
                    'nrp' => $request->nrp,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan,
                ]);
                
        return redirect('/details')->with('status', 'Data Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {   
        Student::destroy($student->id);

        return redirect('/details')->with('status', 'Data Mahasiswa Berhasil Dihapus!');
    }
}
