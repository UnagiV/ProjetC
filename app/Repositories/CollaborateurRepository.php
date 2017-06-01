<?php

namespace App\Repositories;

use App\Collaborateur;

class CollaborateurRepository
{

    protected $collaborateur;

    public function __construct(Collaborateur $collaborateur)
	{
		$this->collaborateur = $collaborateur;
	}

	private function save(Collaborateur $collaborateur, Array $inputs)
	{
    // $collaborateur->Id_TCa = $inputs['"Id_TCa"'];
    $collaborateur->Collaborateur_TCa = $inputs['Collaborateur_TCa'];
    $collaborateur->Date_In_TCa = $inputs['Date_In_TCa'];
    $collaborateur->Date_Out_TCa = $inputs['Date_Out_TCa'];
    $collaborateur->Acces_TCa = $inputs['Acces_TCa'];
    $collaborateur->Responsable_TCa = $inputs['Responsable_TCa'];
    $collaborateur->TR_TCa = isset($inputs['TR_TCa']);

		$collaborateur->save();
	}

	public function getPaginate($n)
	{
		return $this->collaborateur->paginate($n);
	}

	public function store(Array $inputs)
	{
		$collaborateur = new $this->collaborateur;
		// $collaborateur->password = bcrypt($inputs['password']);

		$this->save($collaborateur, $inputs);

		return $collaborateur;
	}

	public function getById($Id_TCa)
	{
		return $this->collaborateur->findOrFail($Id_TCa);
	}

	public function update($Id_TCa, Array $inputs)
	{
		$this->save($this->getById($Id_TCa), $inputs);
	}

	public function destroy($Id_TCa)
	{
		$this->getById($Id_TCa)->delete();
	}

}
