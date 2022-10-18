<?php

class Countries extends Controller
{
    // properties
    private $countryModel;

    // dit is de constructor van de controller
    public function __construct()
    {
        $this->countryModel = $this->model('Country');
    }

    public function index($land = 'Nederland', $age = 8998889)
    {
        // echo "hoi, ik al $age in $land. ";

        $records = $this->countryModel->getCountries();
        //  var_dump($records);

        $rows = '';

        foreach ($records as $items) {
            $rows .= "<tr>
                        <td>$items->id</td>
                        <td>$items->name</td>
                        <td>$items->capital</td>
                        <td>$items->continent</td>
                        <td>$items->population</td>
                      </tr>";
        }

        $data = [
            'title' => "Overzicht landen",
            'rows' => $rows
        ];

        $this->view('countries/index', $data);
    }
}
