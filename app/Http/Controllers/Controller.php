<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function teste(Request $request)
    {
        return redirect('sucesso');
    }
    
    public function testesucesso(Request $request)
    {
        echo "Essa rota foi redirecionada!";
    }
    
    public function usuario(Request $request)
    {
        if (isset($request->id)) {
            return "Este é o usuário " . $request->id;
        } else {
            return "Trata-se de um novo usuário";
        }
    }
        
    public function pagina404(Request $request)
    {
        return 'Essa página não foi encontrada!';
    }
}
