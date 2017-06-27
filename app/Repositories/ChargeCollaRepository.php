<?php

namespace App\Repositories;

use App\ChargeColla;

class ChargeCollaRepository
{

    protected $chargeColla;

    public function __construct(ChargeColla $chargeColla)
	{
		$this->chargeColla = $chargeColla;
	}

	private function save(chargeColla $chargeColla, Array $inputs)
	{

    $chargeColla->Collaborateur_TCa = $inputs['Collaborateur_TCa'];
    $chargeColla->Date_TCc = $inputs['Date_TCc'];
    $chargeColla->Prime_TCc = $inputs['Prime_TCc'];
    $chargeColla->PE_TCc = $inputs['PE_TCc'];
    $chargeColla->Total_Cot_TCc = $inputs['Total_Cot_TCc'];
    $chargeColla->Total_Ret_TCc = $inputs['Total_Ret_TCc'];
    $chargeColla->Total_Salaire_TCc = $inputs['Total_Salaire_TCc'];

    $chargeColla->save();
	}

	public function getPaginate($n)
	{
		return $this->chargeColla->paginate($n);
	}

	public function store(Array $inputs)
	{
		$chargeColla = new $this->chargeColla;
		// $chargeColla->password = bcrypt($inputs['password']);

		$this->save($chargeColla, $inputs);

		return $chargeColla;
	}

	public function getById($Id_TFCl)
	{
		return $this->chargeColla->findOrFail($Id_TFCl);
	}

	public function update($Id_TFCl, Array $inputs)
	{
		$this->save($this->getById($Id_TFCl), $inputs);
	}

	public function destroy($Id_TFCl)
	{
		$this->getById($Id_TFCl)->delete();
	}

}
