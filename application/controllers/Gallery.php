<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gallery
 *
 * @author a00894773
 */
class Gallery extends CI_Controller{
    public function index()
	{
            $this->load->view('gallery');
	}
}