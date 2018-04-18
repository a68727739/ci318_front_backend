<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Document extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(MODULE . '/Documentcate_model');
        $this->load->model(MODULE . '/Document_model');
    }
    // 列表
    public function index()
    {
        $data = array();
        $where = array();
		$suffix='';
        $documentcate_id = $this->input->get('documentcate_id', 0);
        //p($documentcate_id);

        if (!empty($documentcate_id)) {
			$where[C.'.documentcate_id'] = $documentcate_id;
			$suffix='?documentcate_id='.$documentcate_id;
        }
        // 關鍵字like
        $like = array();
        $name = $this->input->get('name', null);
        if (!empty($name)) {
			// $like[C.'.name'] = $name;
			$like['ci_document.name'] = $name;
			$suffix.=empty($suffix)?'?name='.$name:'&name='.$name;
        }
        //分頁
        $config['base_url'] = str_replace(config_item('url_suffix'),'',site_url(MODULE.'/'.C.'/'.M));
        $config['total_rows'] = $this->Document_model->total_rows($where, $like);
		$config['per_page'] = 3;
		$config['num_links'] =8;
		$config['uri_segment'] =4;
		$config['suffix'] =$suffix;
        $this->load->library('pagination');
        $this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
		//分頁
		$offset=$this->uri->segment($config['uri_segment'],0);
        $data['lists'] = $this->Document_model->lists($config['per_page'],$offset,$where, $like);
        $data['documentcate'] = $this->_cate_level($this->Documentcate_model->lists());
        $this->load->view(MODULE . '/' . C . '/' . M, $data);
    }
    // 編輯
    public function edit()
    {
        $data = array();
        $id = $this->uri->segment(4, 0);

        if (empty($id)) {
            exit('參數非法');
        }
        $where = array('id' => $id);
        if (!empty($_POST)) {
            $affected_rows = $this->Document_model->edit($where);
            if (empty($affected_rows)) {
                echo '<script>alert("修改數據失敗");history.back();</script>';
            } else {
                echo '<script>alert("修改數據成功");location.href="' . site_url(MODULE . '/' . C . '/index') . '"</script>';
            }
            exit();
        }
        $data['row'] = $this->Document_model->row($where);
        if (empty($data['row'])) {
            exit('數據非法');
        }
        $data['documentcate'] = $this->_cate_level($this->Documentcate_model->lists());
        $this->load->view(MODULE . '/' . C . '/' . M, $data);
        //exit();
    }
    // 添加
    public function add()
    {
        $data = array();
        if (!empty($_POST)) {
            $insert_id = $this->Document_model->add();
            if (empty($insert_id)) {
                echo '<script>alert("添加數據失敗");history.back();</script>';
            } else {
                echo '<script>alert("添加數據成功");location.href="' . site_url(MODULE . '/' . C . '/' . M.'/'.$this->input->post('documentcate_id',0)) . '"</script>';
            }
            exit();
        }
        $data['documentcate'] = $this->_cate_level($this->Documentcate_model->lists());
        $this->load->view(MODULE . '/' . C . '/' . M, $data);
    }
    // 刪除
    public function del()
    {
        $id = $this->uri->segment(4, 0);

        if (empty($id)) {
            exit('參數非法');
        }
        $where = array('id' => $id);
        $affected_rows = $this->Document_model->del($where);
        if (empty($affected_rows)) {
            echo '<script>alert("刪除數據失敗");history.back();</script>';
            exit();
        }
        redirect(MODULE . '/' . C . '/index');
    }
}
