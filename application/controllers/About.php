<?php


defined('BASEPATH') or exit('No direct script access allowed');

class About extends MY_Controller
{

    public function index()
    {
        $data['title'] = 'About';
        $data['page'] = 'pages/about/index';

        $this->view($data);
    }
}

/* End of file About.php */
