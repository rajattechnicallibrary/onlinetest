<?php

class site_mod extends CI_Model {

    function __construct() {
        parent::__construct();
    }

//THIS FUNCTION ADD COLOR1
    public function add($data) {               
        if ($this->db->insert("aa_site", $data)) {
            return true;
        }
    }

//THIS FUNCTION GET city AND SUBcity DATA
    function getdata($attributes, $parent_id = "") {

        $CI = &get_instance();
        $CI->db->select($attributes);
        $CI->db->from('aa_site');
        $CI->db->where('status', 'Active');

        $query = $CI->db->get();
        if ($query->num_rows()) {
            return $query->result();
        }
        return false;
    }

//THIS FUNCTION GET DATA THROUGH ID
    function getdatathroughid($table = "", $attributes = "", $id = "") {
        $CI = &get_instance();
        $CI->db->select($attributes);
        $CI->db->from($table);
        $CI->db->where('site_id', $id);
        $CI->db->where('status', 'active');
        $query = $CI->db->get();
        if ($query->num_rows()) {
            return $query->row_array();
        }
        return false;
    }

//  THIS FUNCTION DELETE city DATA
    function delete_city($id) {
        $data['status'] = 'Delete';
        $this->db->where('site_id', $id);
        $this->db->update('aa_site', $data);
        return true;
    }

//  THIS FUNCTION EDIT city DATA
    function edit($id) {
        $data['site_id'] = $id;//$this->input->post('state_name');
        $postdata = array(
            'name'                              => $_POST['site_name'],           
            'contact_person_name'               => $_POST['contact_person_name'],           
            'contact_person_number'             => $_POST['contact_person_number'],           
            'site_account_no'              => $_POST['site_account_no'],           
            'site_address'                 => $_POST['site_address'],           
            'site_gst_no'                  => $_POST['site_gst_no'],           
            'bank_name'                         => $_POST['bank_name'],           
            'ifsc_code'                         => $_POST['ifsc_code'],           
            'branch_code'                       => $_POST['branch_code'],           
            'pan_card'                          => $_POST['pan_card'],           
            'remark'                            => $_POST['remark'],           
            'status'                            => $_POST['status'],                    
);
        //pr($data); die;
        $this->db->where('site_id', $id);
        $this->db->update('aa_site', $postdata);
    }

//  THIS FUNCTION VIEW city DATA
    function view($id) {
        $this->db->select('*');
        $this->db->where('site_id', $id);
        return $query = $this->db->get("aa_site")->row();
    }

    function count_city_data() {
        $requestData = $this->input->post(null, true);

        $this->db->select('*');
        
        if (isset($_GET['status'])) {
            $this->db->where("status =",$_GET["status"]);
        }
        else {
            $this->db->where("status !=",'Delete');
        }        
        
        if (!empty($requestData['search']['value'])) {
            $search_val = $requestData['search']['value'];
            $this->db->where("(name  LIKE '%$search_val%' OR  status  LIKE '%$search_val%')");
        }
        return $query = $this->db->get('aa_site');
    }

    function get_city_data($parent_id = "") {        
        $requestData = $this->input->post(null, true);
        $columns = array(
            1 => 'wct.name',
            2 => 'wcntry.name',            
            3 => 'wct.status'
        );
        
        $this->db->select('wct.*, wct.site_id,wct.name as city_name,wct.status, wcntry.name as country_name,wcntry.site_id');
        $this->db->from('aa_site as wct');
         $this->db->join('aa_site wcntry','wct.site_id=wcntry.site_id','left');
         
        if (!empty($requestData['search']['value'])) {
            $search_val = $requestData['search']['value'];            
            $this->db->where("(wct.name LIKE '%$search_val%' OR wcntry.name LIKE '%$search_val%' OR wct.status  LIKE '%$search_val%')");
        }
        
        if (isset($_GET['status'])) {
           
            $this->db->where("wct.status =",$_GET["status"]);
        }else {
            $this->db->where("wct.status !=",'Delete');
        }
        
        if (@$requestData['order'][0]['column'] && @$requestData['order'][0]['dir']) {
            $order = @$requestData['order'][0]['dir'];
            $column_name = $columns[@$requestData['order'][0]['column']];
            $this->db->order_by("$column_name", "$order");
        } else {
            $this->db->order_by("wct.site_id", "desc");
        }
        if (@$requestData['length'] && $requestData['length'] != '-1') {
            $this->db->limit($requestData['length'], $requestData['start']);
        }

        $query = $this->db->get();
        //echo $this->db->last_query(); die;
        if ($query->num_rows()) {
            return $query->result();
        } else {
            //return false;
        }
    }

    /**
     * check_preexistance
     *
     * function for check either color name pre exist
     * 
     * @access	public
     * @return	html data
     */
    function check_preexistance($id, $city_name) {
        $this->db->select('*');
        $this->db->where('site_id !=', $id);
        $this->db->where('name ', $city_name);
        $query = $this->db->get('aa_site');
      //  echo $this->db->last_query();
        return $query->num_rows();
        //die();
    }

    /* End of function */
}
