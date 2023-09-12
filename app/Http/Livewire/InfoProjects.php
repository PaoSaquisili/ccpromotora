<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project\Category;
use App\Models\Project\Property;

class InfoProjects extends Component
{

    public $projects, $project_aux, $property;


    public function changeProject($name){
        $this->project_aux = Category::where('project_name', 'LIKE', "%".$name."%")->first();
        $this->property = Property::select('price')->where('category_id', $this->project_aux->category_id)->min('price');
    }

    public function render()
    {
        //$this->project_aux = $this->projects[0];
        //$this->property = Property::select('price')->where('category_id', $this->project_aux->category_id)->min('price');

        return view('livewire.info-projects', [
            'project_aux' => $this->project_aux,
            'property' => $this->property
        ]);
    }
}
