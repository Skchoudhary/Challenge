<?php

class Pages extends CI_Controller {

        public function view($page = 'home')
        {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $this->load->helper('form');

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->helper('url');
        $this->load->view('pages/'.$page, $data);
        
        }
}