<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class AllowedlistsController extends AppController
{

    public $quickFilterFields = ['name'];
    public $filterFields = ['name'];

    public function index()
    {
        $this->CRUD->index([
            'filters' => $this->filterFields,
            'quickFilters' => $this->quickFilterFields
        ]);
        $responsePayload = $this->CRUD->getResponsePayload();
        if (!empty($responsePayload)) {
            return $responsePayload;
        }
    }

    public function add()
    {
        $this->CRUD->add();
        $responsePayload = $this->CRUD->getResponsePayload();
        if (!empty($responsePayload)) {
            return $responsePayload;
        }
    }

    public function edit($id = null)
    {
        $this->CRUD->edit($id);
        $responsePayload = $this->CRUD->getResponsePayload();
        if (!empty($responsePayload)) {
            return $responsePayload;
        }
        $this->render('add');
    }

    public function delete($id = null)
    {
        $this->CRUD->delete($id);
        $responsePayload = $this->CRUD->getResponsePayload();
        if (!empty($responsePayload)) {
            return $responsePayload;
        }
    }
}
