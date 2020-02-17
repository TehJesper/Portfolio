<?php

namespace App\Http\Controllers;

use App\Article;
use App\Assignment;
use App\Course;
use App\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $grades = Assignment::all();
//        dd($grades);
        return view('dashboard.index', ['courses' => $courses, 'grades' => $grades]);
    }

    public function createcourse()
    {
        return view('dashboard.createcourse');
    }

    public function createassignment()
    {
        return view('dashboard.createassignment');
    }

    public function store()
    {
        Course::create($this->validateDashboard());

        return redirect(route('dashboard.index'));
    }

    public function edit(Dashboard $dashboard)
    {
        return view('dashboard.edit', ['dashboard' => $dashboard]);
    }

    public function update(Dashboard $dashboard)
    {
        $dashboard->update($this->validateDashboard());

        return redirect(route('dashboard.index'));
    }

    public function destroy(Dashboard $dashboard)
    {
        $dashboard->delete();

        return redirect(route('dashboard.index'));
    }

    protected function validateDashboard()
    {
        return request()->validate([
            'naam' => 'required',
            'ecs' => 'required',
        ]);
    }
}
