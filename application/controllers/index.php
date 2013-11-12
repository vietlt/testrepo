<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Vietlt
 * Date: 11/12/13
 * Time: 7:44 PM
 * To change this template use File | Settings | File Templates.
 */
class Index extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('model');
    }

    public function index(){
        $data['content'] = $this->model->getAllData('demo_data');
        $data['left'] = 'left_view';
        $data['right'] = 'right_view';
        $this->load->view('master_view', $data);
    }

    public function add_data(){
        $data['content'] = $this->model->getAllData('demo_data');
        $data['left'] = 'add_view';
        $this->load->view('master_view', $data);
    }

    public function insertdata(){
        $data['title'] = $this->input->post('title');
        $data['content'] = $this->input->post('content');
        $insert = $this->model->insert('demo_data', $data);
        if($insert){
            echo ' thanh cong';
        }else{
            echo 'that bai';
        }
    }

    public function edit($id){
        $data['content'] = $this->model->select_by( $id);
        $data['left'] = 'edit_view';
        $this->load->view('master_view', $data);
    }

    public function update_data(){
        $id = $this->input->post('id');
        $data['title'] = intval($this->input->post('title'));
        $data['content'] = $this->input->post('content');
        $update = $this->model->update('demo_data', $data, $id);
        if($update){
            echo ' thanh cong';
        }else{
            echo 'that bai';
        }
    }

    public function delete($id){
        $delete = $this->model->delete($id);
        if($delete){
            echo ' thanh cong';
        }else{
            echo 'that bai';
        }
    }
}