<?php 
class About extends Controller{
    public function index($nama = 'Singgih', $pekerjaan = 'design')
    {
        $data['judul'] = 'About';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {   
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
?>