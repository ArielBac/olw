<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeerRequest;
use App\Jobs\ExportJob;
use App\Jobs\SendExportEmailJob;
use App\Jobs\StoreExportDataJob;
use App\Models\Meal;
use App\Services\PunkapiService;
use Inertia\Inertia;

class BeerController extends Controller
{
    public function index(BeerRequest $request, PunkapiService $service)
    {
        // Os ... (spread operator) é usado para passar os parâmetros do request para o método, ele associa o nome do parâmetro com o valor
        $beers = $service->getBeers(...$request->validated()); // validated() passa apenas os parâmetros validados pelo FormRequest
        $meals = Meal::all();
        $filters = $request->validated();

        return Inertia::render('Beers', [
            'beers' => $beers,
            'meals' => $meals,
            'filters' => $filters,
        ]);
    }

    public function export(BeerRequest $request, PunkapiService $service)
    {
        $filename = "cervejas-encontradas-" . now()->format('Y-m-d-H-i-s') . ".xlsx";

        // withchain é pra rodar os jobs nessa ordem
        ExportJob::withChain([
            new SendExportEmailJob($filename),
            new StoreExportDataJob(auth()->user(), $filename)
        ])->dispatch($request->validated(), $filename);

        return redirect()->back()
            ->with('success', 'Exportação iniciada, você receberá um e-mail quando ela estiver pronta.');
    }
}
