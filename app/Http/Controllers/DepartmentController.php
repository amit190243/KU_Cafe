<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DepartmentController extends Controller
{

    public function __construct(private Department $department){}

    public function index()
    {
        $breadcrumbs = [
            'Dashboard' => route('home'),
            'Department'
        ];
        $departments = $this->department->get();
        return view('department.index', compact('breadcrumbs', 'departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
        ]);
        $note = $this->department->create([
            'name' => $request->name,
        ]);

        return response()->json(['success'=>'Data is successfully added']);
    }

    public function destroy(Department $department)
    {
        try {
            $department->delete();
            $response = [
                'success' => 'Record deleted successfully!'
            ];
        } catch (QueryException $qe) {
            \Log::error($qe->getMessage());
            $response = [
                'error' => 'Unable to delete at this time!'
            ];
        } catch (\Exception $e) {
            \Log::error($e->getFile() . ':' . $e->getLine() . ' ' . $e->getMessage());
            $response = [
                'error' => 'Unable to delete at this time!'
            ];
        }
        return response()->json($response);
    }


}
