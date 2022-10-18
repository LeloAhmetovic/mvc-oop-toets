<?php

class RichPeoples extends Controller
{
    // properties
    private $RichPeoplesModel;

    // dit is de constructor van de controller
    public function __construct()
    {
        $this->RichPeoplesModel = $this->model('People');
    }

    public function index($MyName = 'Sadio Mané', $age = 30)
    {
    

        $records = $this->RichPeoplesModel->getRichPeoples();
        //  var_dump($records);

        $rows = '';

        foreach ($records as $items) {
            $rows .= "<tr>
                        <td>$items->Id</td>
                        <td>$items->MyName</td>
                        <td>$items->Networth</td>
                        <td>$items->Age</td>
                        <td>$items->Company</td>
                      </tr>";
        }

        $data = [
            'title' => "Overzicht rijkste mensen",
            'rows' => $rows
        ];

        $this->view('richestpeople/index', $data);
    }
}