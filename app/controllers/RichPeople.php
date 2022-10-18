<?php

class RichPeople extends Controller
{
    // properties
    private $RichPeopleModel;

    // dit is de constructor van de controller
    public function __construct()
    {
        $this->RichPeopleModel = $this->model('People');
    }

    public function index()
    {
    

        $records = $this->RichPeopleModel->getRichPeople();
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