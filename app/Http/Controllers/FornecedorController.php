<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '00.000.000/000-00', 'ddd' => '11', 'telefone' => '00000-0000'],
            1 => ['nome' => 'Fornecedor 2', 'status' => 'S', 'ddd' => '13', 'telefone' => '14521-9895'],
            2 => ['nome' => 'Fornecedor 3', 'status' => 'n', 'ddd' => '99', 'telefone' => '87878-9895']
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
