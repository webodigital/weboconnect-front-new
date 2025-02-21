<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CasestudiesModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Get the total number of case_studies
    public function getCasestudiesCount()
    {
        return $this->db->count_all('case_studies');
    }

    public function getAdminCasestudies($limit, $offset, $exclude_id = null)
    {
        $this->db->select('case_studies.*, users.name AS author_name');
        $this->db->from('case_studies');
        $this->db->join('users', 'users.id = case_studies.user_id');
        if ($exclude_id !== null) {
            $this->db->where('case_studies.id !=', $exclude_id);
        }
        //$this->db->where('status' ,'publish');
        //$this->db->order_by('case_studies.created_at', 'DESC');
        $this->db->order_by('case_studies.sequence', 'ASC'); // Sort by sequence
        if($limit != 0){
            $this->db->limit($limit, $offset);    
        }
        $query = $this->db->get();
        $result = $query->result();
        foreach ($result as &$blog) {
            $blog->content = strip_tags($blog->content);
        }
        return $result;
    }

    public function getHomeCasestudies()
    {
        $this->db->select('case_studies.*, users.name AS author_name');
        $this->db->from('case_studies');
        $this->db->join('users', 'users.id = case_studies.user_id');
        $this->db->where('status', 'publish');
        //$this->db->order_by('case_studies.created_at', 'DESC');
        $this->db->order_by('case_studies.sequence', 'ASC'); // Sort by sequence
        $this->db->limit(3, 0);
        $query = $this->db->get();
        // Debugging: Uncomment for debugging in development only.
        // echo $this->db->last_query();
        $result = $query->result();
        // Ensure $result is not empty before processing.
        if (!$result) {
            return [];
        }
        foreach ($result as &$blog) {
            $blog->content = strip_tags($blog->content);
        }
        return $result;
    }

    public function getCasestudies($limit, $offset, $exclude_id = null)
    {
        $this->db->select('case_studies.*');
        $this->db->from('case_studies');
        //$this->db->join('users', 'users.id = case_studies.user_id');
        if ($exclude_id !== null) {
            $this->db->where('case_studies.id !=', $exclude_id);
        }
        //$this->db->where('status' ,'publish');
        //$this->db->order_by('case_studies.created_at', 'DESC');
        $this->db->order_by('case_studies.sequence', 'ASC'); // Sort by sequence
        if($limit != 0){
            $this->db->limit($limit, $offset);    
        }
        $query = $this->db->get();
        $result = $query->result();
        foreach ($result as &$case_study) {
            $case_study->content = strip_tags($case_study->content);
        }
        return $result;
    }
    
    // Insert a new blog into the database
    public function insertCasestudies($data)
    {
        return $this->db->insert('case_studies', $data);
    }
    public function getCasestudiesById($id)
    {
        $this->db->select('case_studies.*, users.name AS author_name');
        $this->db->from('case_studies');
        $this->db->join('users', 'users.id = case_studies.user_id');
        $this->db->where('case_studies.id', $id);
        //$this->db->where('status' ,'publish');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function getCasestudiesBySlug($id)
    {
        $this->db->select('case_studies.*');
        $this->db->from('case_studies');
        //$this->db->join('users', 'users.id = case_studies.user_id');
        $this->db->where('case_studies.slug', $id);
        //$this->db->where('status' ,'publish');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function deleteCasestudiesById($id)
    {
        return $this->db->delete('case_studies', ['id' => $id]);
    }
    public function updateCasestudies($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('case_studies', $data);
    }
    public function slugExists($slug)
    {
        $this->db->where('slug', $slug);
        $query = $this->db->get('case_studies');
        return $query->num_rows() > 0;
    }

    public function getAllCasestudiess() {
        $query = $this->db->select('slug')
                          ->from('case_studies')
                          ->get();
        return $query->result_array();
    }
    
    public function update_sequence($id, $sequence) {
        $this->db->where('id', $id);
        $this->db->update('case_studies', ['sequence' => $sequence]);
    }

    ///////////////////////////////////////////////////////////
    public function getCasestudiesDetailsByIdWithSType($id, $selected_detail='how_does_it_work')
    {
        $this->db->select('case_studies_details.*');
        $this->db->from('case_studies_details');
        $this->db->where('case_studies_details.case_studies_id', $id);
        $this->db->where('case_studies_details.type', $selected_detail);
        //$this->db->where('status' ,'publish');
        $query = $this->db->get();

        //print_r($query);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function getCasestudiesDetailsById($id)
    {
        $this->db->select('case_studies_details.*');
        $this->db->from('case_studies_details');
        $this->db->where('case_studies_details.id', $id);
        //$this->db->where('status' ,'publish');
        $query = $this->db->get();

        //print_r($query);

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    // Insert a new blog into the database
    public function insertCasestudiesDetails($data, $case_studies_details_id)
    {
        if($case_studies_details_id){
            $this->db->where('id', $case_studies_details_id);
            return $this->db->update('case_studies_details', $data);
        }
        return $this->db->insert('case_studies_details', $data);
    }

    public function deleteCasestudiesDetailsById($id)
    {
        return $this->db->delete('case_studies_details', ['id' => $id]);
    }

    ///////////////////////////////////////////////////////////
    public function getCasestudiesTestimonialsByCSId($id)
    {
        $this->db->select('case_studies_testimonials.*');
        $this->db->from('case_studies_testimonials');
        $this->db->where('case_studies_testimonials.case_studies_id', $id);
        //$this->db->where('case_studies_testimonials.type', $selected_detail);
        //$this->db->where('status' ,'publish');
        $query = $this->db->get();

        //print_r($query);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function getCasestudiesTestimonialsById($id)
    {
        $this->db->select('case_studies_testimonials.*');
        $this->db->from('case_studies_testimonials');
        $this->db->where('case_studies_testimonials.id', $id);
        //$this->db->where('status' ,'publish');
        $query = $this->db->get();

        //print_r($query);

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    // Insert a new blog into the database
    public function insertCasestudiesTestimonials($data, $case_studies_testimonials_id)
    {
        if($case_studies_testimonials_id){
            $this->db->where('id', $case_studies_testimonials_id);
            return $this->db->update('case_studies_testimonials', $data);
        }
        return $this->db->insert('case_studies_testimonials', $data);
    }

    public function deleteCasestudiesTestimonialsById($id)
    {
        return $this->db->delete('case_studies_testimonials', ['id' => $id]);
    }
}
