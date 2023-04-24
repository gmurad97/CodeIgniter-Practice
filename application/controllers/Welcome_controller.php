<?php
class Welcome_controller extends CI_Controller
{
    public function home()
    {
        $this->load->view("home_pages/home_page");
    }
    public function contact()
    {
        $this->load->view("contact_pages/contact_page");
    }
    public function about()
    {
        $this->load->view("about_pages/about_page");
    }
}
