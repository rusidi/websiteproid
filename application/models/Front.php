<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Front extends CI_Model {
   
    function __construct() {
        parent::__construct();
    }

    function findSocialMedia() {
        $this->db->select('*');
        $this->db->where('is_active', 1);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('cp_social_media', 1);
        if ($query->num_rows() == 1) {
            $result = $query->row_array();
            return $result;
        }
    }

    function findLandingPage() {
        $this->db->select('*');
        $this->db->where('is_active', 1);
        $query = $this->db->get('cp_landing_page',4);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function findCompanyOverview() {
        $this->db->select('*');
        $this->db->where('is_active', 1);
        $query = $this->db->get('cp_company_overview',3);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function findTestimoni() {
        $this->db->select('*');
        $this->db->where('is_active', 1);
        $query = $this->db->get('cp_testimoni',3);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

     function findPartners() {
        $this->db->select('*');
        $this->db->where('is_active', 1);
        $query = $this->db->get('cp_partner',1);
        if ($query->num_rows() == 1) {
            $result = $query->row_array();
            return $result;
        }
    }

    function findAdminSocialMedia($limit = null, $offset = 0){
        $this->db->select('*');        
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('cp_social_media');
        return $query->result_array();
    }

    function createSocialMedia($post){       
        return $this->db->insert('cp_social_media', $post);
    }
    function deleteSocialMedia($id){
        $this->db->where('id',$id);
        $this->db->delete('cp_social_media');
    }
    function findsocialmedia_by_id($id){
        $this->db->where('id',$id);
        return $this->db->get('cp_social_media',1)->row_array();
    }
    function updateSocialMedia($post,$id){       
        $this->db->where('id',$id);
        $this->db->update('cp_social_media',$post);
    }


    function findAdminLandingPage($limit = null, $offset = 0){
        $this->db->select('*');        
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('cp_landing_page');
        return $query->result_array();
    }
    function createLandingPage($post){       
        return $this->db->insert('cp_landing_page', $post);
    }
    function deleteLandingPage($id){
        $this->db->where('id',$id);
        $this->db->delete('cp_landing_page');
    }
    function findLandingPage_by_id($id){
        $this->db->where('id',$id);
        return $this->db->get('cp_landing_page',1)->row_array();
    }
    function updateLandingPage($post,$id){       
        $this->db->where('id',$id);
        $this->db->update('cp_landing_page',$post);
    }



    function findAdminPartners($limit = null, $offset = 0){
        $this->db->select('*');        
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('cp_partner');
        return $query->result_array();
    }
    function createPartners($post){       
        return $this->db->insert('cp_partner', $post);
    }
    function deletePartners($id){
        $this->db->where('id',$id);
        $this->db->delete('cp_partner');
    }
    function findPartners_by_id($id){
        $this->db->where('id',$id);
        return $this->db->get('cp_partner',1)->row_array();
    }
    function updatePartners($post,$id){       
        $this->db->where('id',$id);
        $this->db->update('cp_partner',$post);
    }


    function findAdminCompanyOverview($limit = null, $offset = 0){
        $this->db->select('*');        
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('cp_company_overview');
        return $query->result_array();
    }
    function createCompanyOverview($post){       
        return $this->db->insert('cp_company_overview', $post);
    }
    function deleteCompanyOverview($id){
        $this->db->where('id',$id);
        $this->db->delete('cp_company_overview');
    }
    function findCompanyOverview_by_id($id){
        $this->db->where('id',$id);
        return $this->db->get('cp_company_overview',1)->row_array();
    }
    function updateCompanyOverview($post,$id){       
        $this->db->where('id',$id);
        $this->db->update('cp_company_overview',$post);
    }


    function findAdminTestimoni($limit = null, $offset = 0){
        $this->db->select('*');        
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('cp_testimoni');
        return $query->result_array();
    }
    function createTestimoni($post){       
        return $this->db->insert('cp_testimoni', $post);
    }
    function deleteTestimoni($id){
        $this->db->where('id',$id);
        $this->db->delete('cp_testimoni');
    }
    function findTestimoni_by_id($id){
        $this->db->where('id',$id);
        return $this->db->get('cp_testimoni',1)->row_array();
    }
    function updateTestimoni($post,$id){       
        $this->db->where('id',$id);
        $this->db->update('cp_testimoni',$post);
    }

    function findCompanyAddress(){
        $this->db->select('*');
        $this->db->where('is_active', 1);
        return $this->db->get('cp_address',1)->row_array();
    }

    function findNews($limit = 4, $offset = 0){
        $this->db->select('*');   
        $this->db->where('status', 1);
        $this->db->where('type', 'post');     
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('posts');
        return $query->result_array();
    }

    

}

?>
