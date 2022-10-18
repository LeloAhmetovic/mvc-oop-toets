<?php
class RichPeoples extends Controller
{
  private $RichPeoplesModel;

  public function __construct()
  {
    $this->RichPeoplesModel = $this->model('People');
  }

  public function delete($id)
  {
    $this->peopleModel->deleteRichPeoples($id);

    $data = [
      'title' => "Delete",
      'status' => "Delete succesfull"
    ];

    $this->view('homepages/delete', $data);
  }
}
