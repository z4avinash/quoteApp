<?php
class User_model extends CI_model
{
    function create($formArray)
    {
        $this->db->insert('quotes', $formArray);
    }

    function all()
    {
        return $quotes = $this->db->get('quotes')->result_array();
    }

    function getQuote($quoteId)
    {
        $this->db->where('quote_id', $quoteId);
        return $quote = $this->db->get('quotes')->row_array();
    }

    function updateQuote($quoteId, $formArray)
    {
        $this->db->where('quote_id', $quoteId);
        $this->db->update('quotes', $formArray);
    }
}
