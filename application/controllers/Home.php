<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Mylib');
    }

    public function index()
    {

        $this->load->model('model_home');

        //chart

        $bti = $this->model_home->count_ti()->result();
        $bsi = $this->model_home->count_si()->result();

        $ti = $bti[0]->ti;
        $si = $bsi[0]->si;

        $data_ti = array(
            'jumlah' => $ti,
        );

        $data_si = array(
            'jumlah' => $si,
        );
        $this->model_home->updateChart('charts', $data_ti, 1);
        $this->model_home->updateChart('charts', $data_si, 2);
        $isi = array(
            'slider' => $this->model_home->getSliding()->result_array(),
            'berita' => $this->model_home->getBerita()->result_array(),
            'galeri' => $this->model_home->getGaleriHome()->result_array(),
            'profil' => $this->model_home->getTentang()->result_array(),
            'pengumuman' => $this->model_home->getPengumuman()->result_array(),
            'kegiatan' => $this->model_home->getkegiatan()->result_array(),
            'video' => $this->model_home->getVideo()->result_array(),
            'maba_lulus' => $this->model_home->getMaba_lulus()->result_array(),
            'grafik' => $this->model_home->getchart(),
        );

        // $isi = array(
        //     'content' => $this->load->view('content_home', $data, true),

        //     'footer' => $this->footer(),
        // );

        $this->load->view('template/index', $isi);
        // $this->load->view('view_home',$isi );
    }

    public function footer()
    {
        $this->load->model('model_home');
        $data = array();
        return $this->load->view('footer', $data, true);
    }

    public function berita($id)
    {
        $this->load->model('model_home');
        $data = array(
            'berita' => $this->model_home->getBerita("where id = " . $id)->result_array(),
            'profil' => $this->model_home->getTentang()->result_array(),
        );

        $isi = array(
            'content' => $this->load->view('content_berita', $data, true),
            'footer' => $this->footer(),
        );
        $this->load->view('view_home', $isi);

    }

    public function ListBerita()
    {
        $this->load->model('model_home');
        $data = array(
            'listberita' => $this->model_home->getListBerita()->result_array(),
            'profil' => $this->model_home->getTentang()->result_array(),
        );

        $isi = array(
            'content' => $this->load->view('content_berita', $data, true),
            'footer' => $this->footer(),
        );
        $this->load->view('view_home', $isi);
    }

    public function tentang($id)
    {
        $this->load->model('model_home');
        $data = array(
            'tentang' => $this->model_home->getTentang("where id = " . $id)->result_array(),
            'profil' => $this->model_home->getTentang()->result_array(),
        );

        $isi = array(
            'content' => $this->load->view('content_berita', $data, true),
            'footer' => $this->footer(),
        );
        $this->load->view('view_home', $isi);
    }

    public function kampus($nama)
    {
        $this->load->model('model_home');
        $data = array(
            'kampus' => $this->model_home->getKampus("where nama = '" . $nama . "'")->result_array(),
            'profil' => $this->model_home->getTentang()->result_array(),
        );

        $isi = array(
            'content' => $this->load->view('content_berita', $data, true),
            'footer' => $this->footer(),
        );
        $this->load->view('view_home', $isi);
    }

    public function fasilitas()
    {
        $this->load->model('model_home');
        $data = array(
            'profil' => $this->model_home->getTentang()->result_array(),
            'fasilitas' => $this->model_home->getFasilitas()->result_array(),
        );

        $isi = array(
            'content' => $this->load->view('content_berita', $data, true),
            'footer' => $this->footer(),
        );
        $this->load->view('view_home', $isi);
    }

    public function akademik($nama)
    {
        $this->load->model('model_home');
        $data = array(
            'profil' => $this->model_home->getTentang()->result_array(),
            'akademik' => $this->model_home->getAkademik("where nama = '" . $nama . "'")->result_array(),
        );

        $isi = array(
            'content' => $this->load->view('content_berita', $data, true),
            'footer' => $this->footer(),
        );
        $this->load->view('view_home', $isi);
    }

    public function photo()
    {
        $this->load->model('model_home');
        $data = array(
            'profil' => $this->model_home->getTentang()->result_array(),
            'photo' => $this->model_home->getGaleri()->result_array(),
        );

        $isi = array(
            'content' => $this->load->view('photo_view', $data, true),
            'footer' => $this->footer(),
        );
        $this->load->view('view_home', $isi);
    }

    public function video()
    {
        $this->load->model('model_home');
        $data = array(
            'profil' => $this->model_home->getTentang()->result_array(),
            'video' => $this->model_home->getGaleriVideo()->result_array(),

        );

        $isi = array(
            'content' => $this->load->view('video_view', $data, true),
            'footer' => $this->footer(),
        );
        $this->load->view('view_home', $isi);
    }

    public function pengumuman()
    {
        $this->load->model('model_home');
        $data = array(
            'profil' => $this->model_home->getTentang()->result_array(),
            'pengumuman' => $this->model_home->getPengumumanLengkap()->result_array(),

        );

        $isi = array(
            'content' => $this->load->view('content_berita', $data, true),
            'footer' => $this->footer(),
        );
        $this->load->view('view_home', $isi);
    }

    public function document()
    {
        $this->load->model('model_home');
        $data = array(
            'profil' => $this->model_home->getTentang()->result_array(),
            'document' => $this->model_home->getDocument()->result_array(),
        );
        $isi = array(
            'content' => $this->load->view('doc_view', $data, true),
            'footer' => $this->footer(),
        );
        $this->load->view('view_home', $isi);
    }

    public function showChart()
    {
        $isi['content'] = '';
    }

}
