<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePrevisaoRequest;
use App\Http\Requests\UpdatePrevisaoRequest;
use App\Repositories\PrevisaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Response;

class PrevisaoController extends AppBaseController
{
    private $previsaoRepository;

    public function __construct(PrevisaoRepository $previsaoRepo)
    {
        $this->previsaoRepository = $previsaoRepo;
        //$this->middleware('admin');
    }

    public function index(Request $request)
    {
        $logradouro = $request->logradouro;

        $numero = $request->numero;

        $previsaos = $this->previsaoRepository->busca($logradouro,$numero);

        return view('previsaos.index',compact('previsaos'));

    }


    public function create()
    {
        return view('previsaos.create');
    }


    public function store(CreatePrevisaoRequest $request)
    {
        $input = $request->all();

        $previsao = $this->previsaoRepository->create($input);

        Flash::success('Previsao saved successfully.');

        return redirect(route('previsaos.index'));
    }


    public function show($id)
    {
        $previsao = $this->previsaoRepository->find($id);

        if (empty($previsao)) {
            Flash::error('Previsao not found');

            return redirect(route('previsaos.index'));
        }

        return view('previsaos.show')->with('previsao', $previsao);
    }


    public function edit($id)
    {

        $previsao = $this->previsaoRepository->findWithoutFail($id);

        if (empty($previsao)) {
            Flash::error('Previsao not found');

            return redirect(route('previsaos.index'));
        }

        return view('previsaos.edit')->with('previsao', $previsao);
    }


    public function update($id, UpdatePrevisaoRequest $request)
    {
        $previsao = $this->previsaoRepository->findWithoutFail($id);

        if (empty($previsao)) {
            Flash::error('Previsao not found');

            return redirect(route('previsaos.index'));
        }

        $previsao = $this->previsaoRepository->update($request->all(), $id);

        Flash::success('Previsao updated successfully.');

        return redirect(route('previsaos.index'));
    }


    public function destroy($id)
    {
        $previsao = $this->previsaoRepository->findWithoutFail($id);

        if (empty($previsao)) {
            Flash::error('Previsao not found');

            return redirect(route('previsaos.index'));
        }

        $this->previsaoRepository->delete($id);

        Flash::success('Previsao deleted successfully.');

        return redirect(route('previsaos.index'));
    }
}
