<?php

namespace App\Http\Controllers;

use DB;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $course = Course::all();
        return view('listCourse', [
            'courses' => $course
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('addCourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $course = new Course();
        $course->nome = $request->nome;
        $course->horas = $request->horas;
        $course->escolaridade = $request->escolaridade;
        $course->serie = $request->serie;
        $course->save();
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course){
        return view('showCourse', [
            'course' => $course
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course){
        return view('updateCourse', [
            'course' => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course){
        $course->nome = $request->nome;
        $course->horas = $request->horas;
        $course->escolaridade = $request->escolaridade;
        $course->serie = $request->serie;
        $course->save();

        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course){
        $course->delete();
        return redirect()->route('course.index');
    }

    public function formBusca(){
        return view('buscarCourse');
    }

    public function search(Request $request){
        $courses = DB::select("select * from courses where nome like '%$request->nome%'");
        //dd($courses);
        //dd($request);

        return view('buscarCourse', ['courses' => $courses]);
    }
}
