<?php

namespace App\Http\Controllers;

use App\Contracts\CrudInterface;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    private CrudInterface $model;

    public function __construct(CrudInterface $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->model->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $paciente)
    {
        return $this->model->show($paciente);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->model->store($request);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $paciente)
    {
        return $this->model->update($request, $paciente);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($paciente)
    {
        return $this->model->destroy($paciente);
    }

    public function importarCsv(Request $request): string
    {
        return $this->model->importarCsv($request);
    }

    public function buscarPorCpf($cpf)
    {
        return $this->model->buscarPorCpf($cpf);
    }
}
