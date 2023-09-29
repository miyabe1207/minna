<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class SymptomController extends Controller
{
    public function index(Symptom $symptom)
    {
        return view('symptoms.index')->with(['posts' => $symptom->getBysymptoms()]);
    }
}
