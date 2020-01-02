<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	private function renderPage($pageName, ...$parameters) {
		$this->load->view('master/header');
		$this->load->view("page/$pageName", $parameters);
		$this->load->view('master/footer');
	}

	public function home()
	{
		$this->renderPage('home');
	}

	public function kidsworkshops()
	{
		$this->renderPage('kidsworkshops');
	}

	public function masterclasses()
	{
		$this->renderPage('masterclasses');
	}

	public function mission()
	{
		$this->renderPage('mission');
	}

	public function contactus()
	{
		$this->renderPage('contactus');
	}
}
