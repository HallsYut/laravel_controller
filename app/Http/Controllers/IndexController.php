<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $courses = array('HTML','PHP','LARAVEL');
        return view('index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $value)
    {
        $course = $value;
        if($course == 'HTML'){
            $info = 'คือภาษาที่ใช้ในการแสดงผลของหน้าเว็บไซต์';
        }elseif($course == 'PHP'){
            $info = 'คือภาษาที่ใช้ในการประมวลผลฝั่ง server';
        }else{
            $info = 'คือรูปแบบที่ถูกพัฒนาขึ้นเพื่อความสะดวก';
        }
        return view('index_detail', compact('course','info'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
