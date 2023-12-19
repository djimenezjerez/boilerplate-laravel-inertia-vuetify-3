<?php

namespace App\Http\Controllers;


use App\Http\Resources\ModuleResource;
use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Module;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $query = Role::query()->when($request->get('search'), function ($query, $search) {
            return $query->where('name', 'like', "%$search%");
        })->when($request->get('sort'), function ($query, $sortBy) {
            return $query->orderBy($sortBy['key'], $sortBy['order']);
        });

        $data = $query->paginate($request->get('limit', 10))->through(function ($item) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'createdAt' => Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('d/m/y H:i'),
                'updatedAt' => Carbon::createFromFormat('Y-m-d H:i:s', $item->updated_at)->format('d/m/y H:i'),
            ];
        });

        return Inertia::render('Role/Index', [
            'data' => $data,
            'paginationOptions' => [10,30,50,100],
        ]);
    }

    public function create()
    {
        return Inertia::render('Role/Create', [
            'modules' => ModuleResource::collection(Module::orderBy('display_name')->get()),
        ]);
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
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
