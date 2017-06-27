<?php

namespace App\Repositories;

use App\ModeReglement;

class ModeReglementRepository
{

    protected $modeReglement;

    public function __construct(ModeReglement $modeReglement)
	{
		$this->modeReglement = $modeReglement;
	}

	private function save(ModeReglement $modeReglement, Array $inputs)
	{

    $modeReglement->Des_Mdr = $inputs['Des_Mdr'];


		$modeReglement->save();
	}

	public function getPaginate($n)
	{
		return $this->modeReglement->paginate($n);
	}

	public function store(Array $inputs)
	{
		$modeReglement = new $this->modeReglement;
		// $modeReglement->password = bcrypt($inputs['password']);

		$this->save($modeReglement, $inputs);

		return $modeReglement;
	}

	public function getById($Id_Mdr)
	{
		return $this->modeReglement->findOrFail($Id_Mdr);
	}

	public function update($Id_Mdr, Array $inputs)
	{
		$this->save($this->getById($Id_Mdr), $inputs);
	}

	public function destroy($Id_Mdr)
	{
		$this->getById($Id_Mdr)->delete();
	}

}
