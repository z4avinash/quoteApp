<?php
class User extends CI_Controller
{
    public function create()
    {
        $this->load->model('User_model');
        $this->form_validation->set_rules('quote', 'Quote', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('create');
        } else {
            //save data to database
            $formArray = array();
            $formArray['quote_body'] = $this->input->post('quote');
            $formArray['quote_author'] = $this->input->post('author');
            $formArray['created_at'] = date('Y.m.d');
            $this->User_model->create($formArray);
            $this->session->set_flashdata('success', 'Quote added successfully');
            redirect(base_url() . 'index.php/User/index');
        }
    }
}
