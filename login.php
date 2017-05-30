<?php
session_start();
class Jobs extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('user');
                $this->load->helper('url_helper');
                $this->load->library('session');
        }

        public function check()
        {
                $data = array(
                        'email' => $this->input->post('email'),
                        'password' => $this->input->post('password')
                        );
                $result = $this->user->login($data);
                if ($result == TRUE) {

                        $username = $this->input->post('email');
                        $result = $this->user->read_user_information($username);
                        if ($result != false) {
                                $session_data = array(
                                        'email' => $result[0]->Email,
                                        'user_id' => $result[0]->User_ID,
                                        'type' => $result[0]->Type,
                                        );
                                $this->session->set_userdata('logged_in', $session_data);
                        }
                        $Type = ($this->session->userdata['logged_in']['type']);
                        if($Type == 'emp')
                        {
                                $this->load->view('jobs');

                        }
                        else
                        {
                                $this->load->view('pages/recuriter_main');
                        }
                }
                else
                {
                        $data['title'] = 'Wrong Email/Password';
                        $this->load->view('pages/index', $data);
                }
                $this->load->view('pages/index');
        }
}