<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id','desc')->paginate();

        return $cursos;

        return view('cursos.index', compact('cursos'));
    }
    public function create(){
        return view('cursos.create');
    }
    /* con el metodo store, utiliza request para poder almacenar los datos obtenidos del
    formulario,
    se llama la instancia $curso, para almacenar la informacion dentro de la tabla curso
    se guarda el nombre (name) descripcion y cateogira.
    Mirar create.blade.php, ahi esta el formulario*/

    public function store(StoreCurso $request){
        // valida el formulario, para que antes de que los campos se guarden, verifique
// Si funciona
        // $curso = new Curso();

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // Con este metodo, todos los campos que pueda haber en el formulario seran tomados
           $curso = Curso::create($request->all());
           return redirect()->route('cursos.show', $curso);


    }

    public function show(Curso $curso){

        return view('cursos.show', compact('curso'));
    }
    /*Al poner Curso delante de la id, laravel automaticamente hace que traiga el
    registro que  */
    public function edit(Curso $curso){

        return view('cursos.edit', compact('curso'));
    }
    public function update(Request $request, Curso $curso){

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);


        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();
        $curso->update($request->all());

        return view('cursos.show', $curso);
    }

    public function distroy(Curso $curso){

        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
