<?php
class User extends CI_Controller
{

    //to show the list of quotes
    public function index()
    {
        $this->load->model('User_model');
        $quotes = $this->User_model->all();
        $data = array();
        $data['quotes'] = $quotes;
        $this->load->view('list', $data);
    }

    //to create a qutoe
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

    //edit a quote
    public function edit($quoteId)
    {
        $this->load->model('User_model');
        $quote = $this->User_model->getQuote($quoteId);
        $data = array();
        $data['quote'] = $quote;

        $this->form_validation->set_rules('quote', 'Quote', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('edit', $data);
        } else {
            //update the database
            $formArray = array();
            $formArray['quote_body'] = $this->input->post('quote');
            $formArray['quote_author'] = $this->input->post('author');
            $this->User_model->updateQuote($quoteId, $formArray);
            $this->session->set_flashdata('success', 'Quote updated successfully');
            redirect(base_url() . 'index.php/User/index');
        }
    }
}
