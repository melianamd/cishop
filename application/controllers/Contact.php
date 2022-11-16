<?php

class Contact extends MY_Controller
{

    public function index()
    {
        $data['title'] = 'Contact Us';
        //$data['content'] = $this->contact->where('id', $this->id)->first();
        $data['page']       = 'pages/contact/index';

        $this->view($data);
    }
}
