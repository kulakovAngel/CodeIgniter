<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this -> load -> model('home_model');
    }
    
	public function index() {//http://codeigniter-2/index.php/welcome
		$this -> load -> view('welcome');
	}
    
    public function ItemsList() {//http://codeigniter-2/index.php/welcome/itemslist
        $data['title'] = 'List Of Items';
        $data['items'] = $this -> home_model -> getItems();
        $this -> load -> view('items', $data);
    }
    
    public function getItemInfo($id = null) {
        if (!$id) {
            echo "<b style='color: red'>item id isn't set</b>";
            $this -> ItemsList();
        }
        else {
            $params = $this -> home_model -> getItemById($id);
            $data['id'] = $params['id'];
            $data['name'] = $params['name'];
            $data['cost'] = $params['cost'];
            $data['info'] = $params['info'];
            $this -> load -> view('item', $data);
        }
    }
}