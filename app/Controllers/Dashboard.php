<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\UsersModel;
use App\Models\ReportModel;

class Dashboard extends BaseController
{
    protected $db;
    protected $newsModel;
    protected $usersModel;
    protected $reportModel;
    protected $usersAuth;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->newsModel = new NewsModel();
        $this->usersModel = new UsersModel();
        $this->reportModel = new ReportModel();
        $this->usersAuth = new \Myth\Auth\Models\UserModel();
    }
    public function index()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
            'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'li_1' => 'Dashboard'])
        ];
        return view('dashboard/dashboard', $data);
    }
    public function admin_contact_list()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $builder = $this->db->table('users');
        $builder->select('users.id as userid, username, fullname, email, name, user_image, active, banned');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'User Management']),
            'page_title' => view('partials/page-title', ['title' => 'User Management', 'li_1' => 'Dashboard', 'li_2' => 'User Management']),
            'users' => $query->getResult()
        ];
        return view('dashboard/admin-contact-list-user', $data);
    }
    public function admin_member_ban_action($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $banned = 1;
        $this->usersModel->save([
            'id' => $id,
            'banned' => $banned
        ]);
        session()->setFlashdata('pesan', 'Success to ban a member');
        return redirect()->to('/admin-contact-list');
    }
    public function admin_member_unban_action($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $banned = 0;
        $this->usersModel->save([
            'id' => $id,
            'banned' => $banned
        ]);
        session()->setFlashdata('pesan', 'Success to unban a member');
        return redirect()->to('/admin-contact-list');
    }
    public function admin_member_activate_action($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $active = 1;
        $this->usersModel->save([
            'id' => $id,
            'active' => $active
        ]);
        session()->setFlashdata('pesan', 'Success to activate a member');
        return redirect()->to('/admin-contact-list');
    }
    public function admin_member_deactivate_action($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $active = 0;
        $this->usersModel->save([
            'id' => $id,
            'active' => $active
        ]);
        session()->setFlashdata('pesan', 'Success to deactivate a member');
        return redirect()->to('/admin-contact-list');
    }
    public function contact_list()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Contact KEKL19']),
            'page_title' => view('partials/page-title', ['title' => 'Contact KEKL19', 'li_1' => 'Dashboard', 'li_2' => 'Contact List']),
            'users' => $this->usersModel->getUsers(),
            'usercount' => $this->usersModel->count()
        ];
        return view('dashboard/contact-list-user', $data);
    }
    public function contact_grid()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $users = $this->usersModel->search($keyword);
        } else {
            $users = $this->usersModel;
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Contact KEKL19']),
            'page_title' => view('partials/page-title', ['title' => 'Contact KEKL19', 'li_1' => 'Dashboard', 'li_2' => 'Contact Grid']),
            'users' => $users->paginate(10, 'users'),
            'pager' => $this->usersModel->pager
        ];
        return view('dashboard/contact-grid-user', $data);
    }
    public function contact_profile($username)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $userdata = $this->usersModel->getUsers($username);
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Contact Profile']),
            'page_title' => view('partials/page-title', ['title' => 'Contact Profile', 'li_1' => 'Contact List', 'li_2' => $userdata['username']]),
            'users' => $userdata
        ];
        return view('dashboard/contact-profile', $data);
    }
    public function profile()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $usersdata = $this->usersAuth->find(user_id());
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'My Profile']),
            'page_title' => view('partials/page-title', ['title' => 'My Profile', 'li_1' => 'Dashboard', 'li_2' => 'My Profile']),
            'users' => $usersdata
        ];
        return view('dashboard/profile', $data);
    }
    public function profile_edit_data_action($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        if (!$this->validate([
            'fullname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Fullname must be filled'
                ]
            ],
            'birthdate' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Birthdate must be filled'
                ]
            ],
            'kelasx' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Class X must be filled'
                ]
            ],
            'kelasxi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Class XI must be filled'
                ]
            ],
            'kelasxii' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Class XII must be filled'
                ]
            ],
            'tempatstudikerja' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat Studi / Kerja must be filled'
                ]
            ],
            'jurusanbagian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jurusan / Bagian must be filled'
                ]
            ],
            'location' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Location must be filled'
                ]
            ]
        ])) {
            return redirect()->to('/profile-form')->withInput();
        }
        $this->usersModel->save([
            'id' => $id,
            'fullname' => $this->request->getVar('fullname'),
            'birthdate' => $this->request->getVar('birthdate'),
            'kelasx' => $this->request->getVar('kelasx'),
            'kelasxi' => $this->request->getVar('kelasxi'),
            'kelasxii' => $this->request->getVar('kelasxii'),
            'tempatstudikerja' => $this->request->getVar('tempatstudikerja'),
            'jurusanbagian' => $this->request->getVar('jurusanbagian'),
            'mobilenumber' => $this->request->getVar('mobilenumber'),
            'line' => $this->request->getVar('line'),
            'instagram' => $this->request->getVar('instagram'),
            'facebook' => $this->request->getVar('facebook'),
            'twitter' => $this->request->getVar('twitter'),
            'youtube' => $this->request->getVar('youtube'),
            'linkedin' => $this->request->getVar('linkedin'),
            'website' => $this->request->getVar('website'),
            'sec_email' => $this->request->getVar('sec_email'),
            'location' => $this->request->getVar('location'),
            'bio' => $this->request->getVar('bio'),
        ]);
        session()->setFlashdata('pesan', 'Success Edit Profile');
        return redirect()->to('/profile');
    }
    public function profile_edit_image_action($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        if (!$this->validate([
            'file' => [
                'rules' => 'max_size[file,2048]|is_image[file]|mime_in[file,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Image size is too big',
                    'is_image' => 'What you choose is not a picture!',
                    'mime_in' => 'What you choose is not a picture! mime'
                ]
            ]
        ])) {
            return redirect()->to('/profile-form')->withInput();
        }
        $fileImage_post = $this->request->getFile('file');
        if ($fileImage_post->getError() == 4) {
            $filenameImage_post = $this->request->getVar('oldfiles');
        } else {
            $filenameImage_post = $fileImage_post->getRandomName();
            $fileImage_post->move('assets/images/users', $filenameImage_post);
            if ($this->request->getVar('oldfiles') != 'default-user-profile.jpg') {
                unlink('assets/images/users/' . $this->request->getVar('oldfiles'));
            }
        }
        $this->usersModel->save([
            'id' => $id,
            'user_image' => $filenameImage_post
        ]);
        session()->setFlashdata('pesan', 'Success Upload Profile Picture');
        return redirect()->to('/profile');
    }
    public function profile_form()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $usersdata = $this->usersAuth->find(user_id());
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Edit Profile']),
            'page_title' => view('partials/page-title', ['title' => 'Edit Profile', 'li_1' => 'My Profile', 'li_2' => 'Edit Profile']),
            'validation' => \Config\Services::validation(),
            'users' => $usersdata
        ];
        return view('dashboard/profile-form', $data);
    }

    //news
    public function admin_news()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'News / Event Management']),
            'page_title' => view('partials/page-title', ['title' => 'News / Event Management', 'li_1' => 'Dashboard', 'li_2' => 'Post List']),
            'news' => $this->newsModel->getNews()
        ];
        return view('dashboard/admin-news', $data);
    }
    public function admin_news_detail($slug)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'News / Event Management Detail']),
            'page_title' => view('partials/page-title', ['title' => 'News / Event Management Detail', 'li_1' => 'Dashboard', 'li_2' => 'Post Detail']),
            'news' => $this->newsModel->getNews($slug)
        ];
        return view('dashboard/admin-news', $data);
    }
    public function admin_news_add()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Add News / Event']),
            'page_title' => view('partials/page-title', ['title' => 'Add News / Event', 'li_1' => 'Post List', 'li_2' => 'Add Post']),
            'validation' => \Config\Services::validation()
        ];
        return view('dashboard/admin-news-add', $data);
    }
    public function admin_news_add_action()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[news.title]',
                'errors' => [
                    'required' => 'Title post must be filled',
                    'is_unique' => 'Title post already added'
                ]
            ],
            'body' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Body post must be filled'
                ]
            ],
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'More info link must be filled'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Post status must be filled'
                ]
            ],
            'post_image' => [
                'rules' => 'uploaded[post_image]|max_size[post_image,2048]|is_image[post_image]|mime_in[post_image,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Choose cover image first',
                    'max_size' => 'Image size is too big',
                    'is_image' => 'What you choose is not a picture!',
                    'mime_in' => 'What you choose is not a picture! mime'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/admin-news/add')->withInput()->with('validation', $validation);
            return redirect()->to('/admin-news/add')->withInput();
        }
        $fileImage_post = $this->request->getFile('post_image');
        if ($fileImage_post->getError() == 4) {
            $filenameImage_post = 'news-default.png';
        } else {
            $filenameImage_post = $fileImage_post->getRandomName();
            $fileImage_post->move('assets/images', $filenameImage_post);
            // $filenameImage_post = $fileImage_post->getName();
        }
        $slug = url_title($this->request->getVar('title'), '-', true);
        $status = 'Published';
        if ($this->request->getVar('status') == 'publish') {
            $status = 'Published';
        }
        if ($this->request->getVar('status') == 'hidden') {
            $status = 'Hidden';
        }
        $this->newsModel->save([
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'body' => $this->request->getVar('body'),
            'moreinfo_link' => $this->request->getVar('link'),
            'status' => $status,
            'post_image' => $filenameImage_post
        ]);
        session()->setFlashdata('pesan', 'Success Add News');
        return redirect()->to('/admin-news');
    }
    public function admin_news_delete($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $news = $this->newsModel->find($id);
        if ($news['post_image'] != 'news-default.png') {
            unlink('assets/images/' . $news['post_image']);
        }
        $this->newsModel->delete($id);
        session()->setFlashdata('pesan', 'Success Delete News');
        return redirect()->to('/admin-news');
    }
    public function admin_news_edit($slug)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'News / Event Edit']),
            'page_title' => view('partials/page-title', ['title' => 'News / Event Edit', 'li_1' => 'News List', 'li_2' => 'News Edit']),
            'validation' => \Config\Services::validation(),
            'news' => $this->newsModel->getNews($slug)
        ];
        return view('dashboard/admin-news-edit', $data);
    }
    public function admin_news_edit_action($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $rule_title = 'required|is_unique[news.title]';
        $oldnews = $this->newsModel->getNews($this->request->getVar('slug'));
        if ($oldnews['title'] == $this->request->getVar('title')) {
            $rule_title = 'required';
        } else {
            $rule_title = 'required|is_unique[news.title]';
        }
        if (!$this->validate([
            'title' => [
                'rules' => $rule_title,
                'errors' => [
                    'required' => 'Title post must be filled',
                    'is_unique' => 'Title post already added'
                ]
            ],
            'body' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Body post must be filled'
                ]
            ],
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'More info link must be filled'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Post status must be filled'
                ]
            ],
            'post_image' => [
                'rules' => 'max_size[post_image,2048]|is_image[post_image]|mime_in[post_image,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Image size is too big',
                    'is_image' => 'What you choose is not a picture!',
                    'mime_in' => 'What you choose is not a picture! mime'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/admin-news/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('/admin-news/edit/' . $this->request->getVar('slug'))->withInput();
        }
        $fileImage_post = $this->request->getFile('post_image');
        if ($fileImage_post->getError() == 4) {
            $filenameImage_post = $this->request->getVar('oldfiles');
        } else {
            $filenameImage_post = $fileImage_post->getRandomName();
            $fileImage_post->move('assets/images', $filenameImage_post);
            if ($this->request->getVar('oldfiles') != 'news-default.png') {
                unlink('assets/images/' . $this->request->getVar('oldfiles'));
            }
            // $filenameImage_post = $fileImage_post->getName();
        }
        $slug = url_title($this->request->getVar('title'), '-', true);
        $status = 'Published';
        if ($this->request->getVar('status') == 'publish') {
            $status = 'Published';
        }
        if ($this->request->getVar('status') == 'hidden') {
            $status = 'Hidden';
        }
        $this->newsModel->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'body' => $this->request->getVar('body'),
            'moreinfo_link' => $this->request->getVar('link'),
            'status' => $status,
            'post_image' => $filenameImage_post
        ]);
        session()->setFlashdata('pesan', 'Success Edit News');
        return redirect()->to('/admin-news');
    }
    public function admin_news_publish_action($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $status = 'Published';
        $this->newsModel->save([
            'id' => $id,
            'status' => $status
        ]);
        session()->setFlashdata('pesan', 'Success to publish a news');
        return redirect()->to('/admin-news');
    }
    public function admin_news_unpublish_action($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $status = 'Hidden';
        $this->newsModel->save([
            'id' => $id,
            'status' => $status
        ]);
        session()->setFlashdata('pesan', 'Success to publish a news');
        return redirect()->to('/admin-news');
    }
    public function user_news()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $news = $this->newsModel->search($keyword);
        } else {
            $news = $this->newsModel;
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'News / Event']),
            'page_title' => view('partials/page-title', ['title' => 'News / Event', 'li_1' => 'Dashboard', 'li_2' => 'News / Event List']),
            // 'news' => $this->newsModel->getNews()
            'news' => $news->paginate(10, 'news'),
            'pager' => $this->newsModel->pager
        ];
        return view('dashboard/news-event', $data);
    }

    //Report
    public function admin_report()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $builder = $this->db->table('report');
        $builder->select('users.id as userid, report.id as id, username, fullname, title, body, report_image, response, report.status as status');
        $builder->join('users', 'users.id = report.userid');
        $query = $builder->get();
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Report Management']),
            'page_title' => view('partials/page-title', ['title' => 'Report Management', 'li_1' => 'Dashboard', 'li_2' => 'Report List']),
            // 'report' => $this->reportModel->getReport()
            'report' => $query->getResult()
        ];
        return view('dashboard/admin-report', $data);
    }
    public function report()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'My Report']),
            'page_title' => view('partials/page-title', ['title' => 'My Report', 'li_1' => 'Dashboard', 'li_2' => 'Report List']),
            'report' => $this->reportModel->getReportUser(user_id())
        ];
        return view('dashboard/report', $data);
    }
    public function report_add()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Add Report']),
            'page_title' => view('partials/page-title', ['title' => 'Add Report', 'li_1' => 'My Report List', 'li_2' => 'Add Report']),
            'validation' => \Config\Services::validation()
        ];
        return view('dashboard/report-add', $data);
    }
    public function report_add_action()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        if (!$this->validate([
            'userid' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'You are not logged in, please login first!'
                ]
            ],
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Report title must be filled'
                ]
            ],
            'body' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Body report must be filled'
                ]
            ],
            'report_image' => [
                'rules' => 'max_size[report_image,2048]|is_image[report_image]|mime_in[report_image,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Image size is too big',
                    'is_image' => 'What you choose is not a picture!',
                    'mime_in' => 'What you choose is not a picture! mime'
                ]
            ]
        ])) {
            return redirect()->to('/report/add')->withInput();
        }
        $fileImage_post = $this->request->getFile('report_image');
        if ($fileImage_post->getError() == 4) {
            $filenameImage_post = '';
        } else {
            $filenameImage_post = $fileImage_post->getRandomName();
            $fileImage_post->move('assets/images/report', $filenameImage_post);
        }
        $this->reportModel->save([
            'userid' => $this->request->getVar('userid'),
            'title' => $this->request->getVar('title'),
            'body' => $this->request->getVar('body'),
            'report_image' => $filenameImage_post
        ]);
        session()->setFlashdata('pesan', 'Success Add Report');
        return redirect()->to('/report');
    }
    public function admin_report_delete($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $report = $this->reportModel->find($id);
        if ($report['report_image'] != '') {
            unlink('assets/images/report/' . $report['report_image']);
        }
        $this->reportModel->delete($id);
        session()->setFlashdata('pesan', 'Success Delete report');
        return redirect()->to('/admin-report');
    }
    public function admin_report_edit($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Edit Report']),
            'page_title' => view('partials/page-title', ['title' => 'Edit Report', 'li_1' => 'Report List', 'li_2' => 'Edit Report']),
            'validation' => \Config\Services::validation(),
            'report' => $this->reportModel->getReport($id)
        ];
        return view('dashboard/admin-report-edit', $data);
    }
    public function admin_report_edit_action($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        if (!$this->validate([
            'response' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Report response must be filled'
                ]
            ]
        ])) {
            return redirect()->to('/admin-report/edit/' . $this->request->getVar('id'))->withInput();
        }
        $this->reportModel->save([
            'id' => $id,
            'response' => $this->request->getVar('response')
        ]);
        session()->setFlashdata('pesan', 'Success Edit Report');
        return redirect()->to('/admin-report');
    }
    public function admin_report_answer_action($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $status = 'Answered';
        $this->reportModel->save([
            'id' => $id,
            'status' => $status
        ]);
        session()->setFlashdata('pesan', 'Success to change status a report (Answered)');
        return redirect()->to('/admin-report');
    }
    public function admin_report_unanswer_action($id)
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $status = 'Pending';
        $this->reportModel->save([
            'id' => $id,
            'status' => $status
        ]);
        session()->setFlashdata('pesan', 'Success to change status a report (Pending)');
        return redirect()->to('/admin-report');
    }

    // 2016
    public function popsila_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Popsila 2016']),
            'page_title' => view('partials/page-title', ['title' => 'Popsila 2016', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Popsila 2016'])
        ];
        return view('dashboard/popsila-2016', $data);
    }
    public function career_day_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Career Day']),
            'page_title' => view('partials/page-title', ['title' => 'Career Day', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Career Day'])
        ];
        return view('dashboard/career-day-2016', $data);
    }
    public function classmeet_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Classmeet 2016']),
            'page_title' => view('partials/page-title', ['title' => 'Classmeet 2016', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Classmeet 2016'])
        ];
        return view('dashboard/classmeet-2016', $data);
    }
    public function daftar_ulang_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Daftar Ulang']),
            'page_title' => view('partials/page-title', ['title' => 'Daftar Ulang', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Daftar Ulang'])
        ];
        return view('dashboard/daftar-ulang-2016', $data);
    }
    public function dbl_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'DBL']),
            'page_title' => view('partials/page-title', ['title' => 'DBL', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'DBL'])
        ];
        return view('dashboard/dbl-2016', $data);
    }
    public function lc_zone_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'LC Zone 2016']),
            'page_title' => view('partials/page-title', ['title' => 'LC Zone 2016', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'LC Zone 2016'])
        ];
        return view('dashboard/lc-zone-2016', $data);
    }
    public function lef_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'LEF 2016']),
            'page_title' => view('partials/page-title', ['title' => 'LEF 2016', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'LEF 2016'])
        ];
        return view('dashboard/lef-2016', $data);
    }
    public function losaac_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'LOSAAC 2016']),
            'page_title' => view('partials/page-title', ['title' => 'LOSAAC 2016', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'LOSAAC 2016'])
        ];
        return view('dashboard/losaac-2016', $data);
    }
    public function malam_sosial_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Malam Sosial']),
            'page_title' => view('partials/page-title', ['title' => 'Malam Sosial', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Malam Sosial'])
        ];
        return view('dashboard/malam-sosial-2016', $data);
    }
    public function pelantikan_paskibra_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Pelantikan Paskibra']),
            'page_title' => view('partials/page-title', ['title' => 'Pelantikan Paskibra', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Pelantikan Paskibra'])
        ];
        return view('dashboard/pelantikan-paskibra-2016', $data);
    }
    public function pesta_nama_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Pesta Nama 2016']),
            'page_title' => view('partials/page-title', ['title' => 'Pesta Nama 2016', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Pesta Nama 2016'])
        ];
        return view('dashboard/pesta-nama-2016', $data);
    }
    public function pitulasan_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Pitulasan']),
            'page_title' => view('partials/page-title', ['title' => 'Pitulasan', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Pitulasan'])
        ];
        return view('dashboard/pitulasan-2016', $data);
    }
    public function sarasehan_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Sarasehan KKL67']),
            'page_title' => view('partials/page-title', ['title' => 'Sarasehan KKL67', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Sarasehan KKL67'])
        ];
        return view('dashboard/sarasehan-2016', $data);
    }
    public function sarasehan_paskibra_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Sarasehan Paskibra']),
            'page_title' => view('partials/page-title', ['title' => 'Sarasehan Paskibra', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Sarasehan Paskibra'])
        ];
        return view('dashboard/sarasehan-paskibra-2016', $data);
    }
    public function seleksi_loparte_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Seleksi Loparte']),
            'page_title' => view('partials/page-title', ['title' => 'Seleksi Loparte', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Seleksi Loparte'])
        ];
        return view('dashboard/seleksi-loparte-2016', $data);
    }
    public function upacara_2016()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Upacara 2016']),
            'page_title' => view('partials/page-title', ['title' => 'Upacara 2016', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Upacara 2016'])
        ];
        return view('dashboard/upacara-2016', $data);
    }

    // 2017
    public function classmeet_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Classmeet 2017']),
            'page_title' => view('partials/page-title', ['title' => 'Classmeet 2017', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Classmeet 2017'])
        ];
        return view('dashboard/classmeet-2017', $data);
    }
    public function dkkl_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'DKKL']),
            'page_title' => view('partials/page-title', ['title' => 'DKKL', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'DKKL'])
        ];
        return view('dashboard/dkkl-2017', $data);
    }
    public function konser_soepra_jakarta_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Konser Soepra Jakarta']),
            'page_title' => view('partials/page-title', ['title' => 'Konser Soepra Jakarta', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Konser Soepra Jakarta'])
        ];
        return view('dashboard/konser-soepra-jakarta-2017', $data);
    }
    public function konser_soepra_lawangsewu_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Konser Soepra Lawang Sewu']),
            'page_title' => view('partials/page-title', ['title' => 'Konser Soepra Lawang Sewu', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Konser Soepra Lawang Sewu'])
        ];
        return view('dashboard/konser-soepra-lawangsewu-2017', $data);
    }
    public function lc_got_talent_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'LC Got Talent']),
            'page_title' => view('partials/page-title', ['title' => 'LC Got Talent', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'LC Got Talent'])
        ];
        return view('dashboard/lc-got-talent-2017', $data);
    }
    public function lc_zone_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'LC Zone 2017']),
            'page_title' => view('partials/page-title', ['title' => 'LC Zone 2017', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'LC Zone 2017'])
        ];
        return view('dashboard/lc-zone-2017', $data);
    }
    public function leadership_camp_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Leadership Camp']),
            'page_title' => view('partials/page-title', ['title' => 'Leadership Camp', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Leadership Camp'])
        ];
        return view('dashboard/leadership-camp-2017', $data);
    }
    public function lef_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'LEF 2017']),
            'page_title' => view('partials/page-title', ['title' => 'LEF 2017', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'LEF 2017'])
        ];
        return view('dashboard/lef-2017', $data);
    }
    public function live_in_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Live In']),
            'page_title' => view('partials/page-title', ['title' => 'Live In', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Live In'])
        ];
        return view('dashboard/live-in-2017', $data);
    }
    public function losaac_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'LOSAAC 2017']),
            'page_title' => view('partials/page-title', ['title' => 'LOSAAC 2017', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'LOSAAC 2017'])
        ];
        return view('dashboard/losaac-2017', $data);
    }
    public function momento_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Momento']),
            'page_title' => view('partials/page-title', ['title' => 'Momento', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Momento'])
        ];
        return view('dashboard/momento-2017', $data);
    }
    public function pesta_natal_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Pesta Natal 2017']),
            'page_title' => view('partials/page-title', ['title' => 'Pesta Natal 2017', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Pesta Natal 2017'])
        ];
        return view('dashboard/pesta-natal-2017', $data);
    }
    public function popsila_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Popsila 2017']),
            'page_title' => view('partials/page-title', ['title' => 'Popsila 2017', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Popsila 2017'])
        ];
        return view('dashboard/popsila-2017', $data);
    }
    public function rekoleksi_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Rekoleksi']),
            'page_title' => view('partials/page-title', ['title' => 'Rekoleksi', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Rekoleksi'])
        ];
        return view('dashboard/rekoleksi-2017', $data);
    }
    public function suloco_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Suloco 2017']),
            'page_title' => view('partials/page-title', ['title' => 'Suloco 2017', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Suloco 2017'])
        ];
        return view('dashboard/suloco-2017', $data);
    }
    public function teacher_day_2017()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Teacher Day']),
            'page_title' => view('partials/page-title', ['title' => 'Teacher Day', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Teacher Day'])
        ];
        return view('dashboard/teacher-day-2017', $data);
    }

    // 2018
    public function bali_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Bali']),
            'page_title' => view('partials/page-title', ['title' => 'Bali', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Bali'])
        ];
        return view('dashboard/bali-2018', $data);
    }
    public function basket_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Basket']),
            'page_title' => view('partials/page-title', ['title' => 'Basket', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Basket'])
        ];
        return view('dashboard/basket-2018', $data);
    }
    public function classmeet_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Classmeet 2018']),
            'page_title' => view('partials/page-title', ['title' => 'Classmeet 2018', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Classmeet 2018'])
        ];
        return view('dashboard/classmeet-2018', $data);
    }
    public function ekskursi_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Ekskursi']),
            'page_title' => view('partials/page-title', ['title' => 'Ekskursi', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Ekskursi'])
        ];
        return view('dashboard/ekskursi-2018', $data);
    }
    public function fesfias_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Fesfias']),
            'page_title' => view('partials/page-title', ['title' => 'Fesfias', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Fesfias'])
        ];
        return view('dashboard/fesfias-2018', $data);
    }
    public function infinite_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Infinite']),
            'page_title' => view('partials/page-title', ['title' => 'Infinite', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Infinite'])
        ];
        return view('dashboard/infinite-2018', $data);
    }
    public function karnaval_paskah_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Karnaval Paskah']),
            'page_title' => view('partials/page-title', ['title' => 'Karnaval Paskah', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Karnaval Paskah'])
        ];
        return view('dashboard/karnaval-paskah-2018', $data);
    }
    public function konser_lv_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Konser LV 2018']),
            'page_title' => view('partials/page-title', ['title' => 'Konser LV 2018', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Konser LV 2018'])
        ];
        return view('dashboard/konser-lv-2018', $data);
    }
    public function lc_zone_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'LC Zone 2018']),
            'page_title' => view('partials/page-title', ['title' => 'LC Zone 2018', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'LC Zone 2018'])
        ];
        return view('dashboard/lc-zone-2018', $data);
    }
    public function lef_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'LEF 2018']),
            'page_title' => view('partials/page-title', ['title' => 'LEF 2018', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'LEF 2018'])
        ];
        return view('dashboard/lef-2018', $data);
    }
    public function lpl_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'LPL 2018']),
            'page_title' => view('partials/page-title', ['title' => 'LPL 2018', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'LPL 2018'])
        ];
        return view('dashboard/lpl-2018', $data);
    }
    public function malam_musik_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Malam Musik']),
            'page_title' => view('partials/page-title', ['title' => 'Malam Musik', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Malam Musik'])
        ];
        return view('dashboard/malam-musik-2018', $data);
    }
    public function pasar_murah_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Pasar Murah']),
            'page_title' => view('partials/page-title', ['title' => 'Pasar Murah', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Pasar Murah'])
        ];
        return view('dashboard/pasar-murah-2018', $data);
    }
    public function paskibra_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Paskibra']),
            'page_title' => view('partials/page-title', ['title' => 'Paskibra', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Paskibra'])
        ];
        return view('dashboard/paskibra-2018', $data);
    }
    public function pesiri_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Pesiri']),
            'page_title' => view('partials/page-title', ['title' => 'Pesiri', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Pesiri'])
        ];
        return view('dashboard/pesiri-2018', $data);
    }
    public function pesta_nama_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Pesta Nama 2018']),
            'page_title' => view('partials/page-title', ['title' => 'Pesta Nama 2018', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Pesta Nama 2018'])
        ];
        return view('dashboard/pesta-nama-2018', $data);
    }
    public function pesta_natal_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Pesta Natal 2018']),
            'page_title' => view('partials/page-title', ['title' => 'Pesta Natal 2018', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Pesta Natal 2018'])
        ];
        return view('dashboard/pesta-natal-2018', $data);
    }
    public function popsila_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Popsila 2018']),
            'page_title' => view('partials/page-title', ['title' => 'Popsila 2018', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Popsila 2018'])
        ];
        return view('dashboard/popsila-2018', $data);
    }
    public function retret_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Retret']),
            'page_title' => view('partials/page-title', ['title' => 'Retret', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Retret'])
        ];
        return view('dashboard/retret-2018', $data);
    }
    public function sadaco_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Sadaco']),
            'page_title' => view('partials/page-title', ['title' => 'Sadaco', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Sadaco'])
        ];
        return view('dashboard/sadaco-2018', $data);
    }
    public function sadar_lingkungan_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Sadar Lingkungan']),
            'page_title' => view('partials/page-title', ['title' => 'Sadar Lingkungan', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Sadar Lingkungan'])
        ];
        return view('dashboard/sadar-lingkungan-2018', $data);
    }
    public function suloco_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Suloco 2018']),
            'page_title' => view('partials/page-title', ['title' => 'Suloco 2018', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Suloco 2018'])
        ];
        return view('dashboard/suloco-2018', $data);
    }
    public function teloco_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Teloco']),
            'page_title' => view('partials/page-title', ['title' => 'Teloco', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Teloco'])
        ];
        return view('dashboard/teloco-2018', $data);
    }
    public function temu_kolese_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Temu Kolese']),
            'page_title' => view('partials/page-title', ['title' => 'Temu Kolese', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Temu Kolese'])
        ];
        return view('dashboard/temu-kolese-2018', $data);
    }
    public function upacara_2018()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Upacara 2018']),
            'page_title' => view('partials/page-title', ['title' => 'Upacara 2018', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Upacara 2018'])
        ];
        return view('dashboard/upacara-2018', $data);
    }

    // 2019
    public function euforia_2019()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Euforia']),
            'page_title' => view('partials/page-title', ['title' => 'Euforia', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Euforia'])
        ];
        return view('dashboard/euforia-2019', $data);
    }
    public function gelar_karya_2019()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Gelar Karya']),
            'page_title' => view('partials/page-title', ['title' => 'Gelar Karya', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Gelar Karya'])
        ];
        return view('dashboard/gelar-karya-2019', $data);
    }
    public function konser_lv_2019()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Konser LV 2019']),
            'page_title' => view('partials/page-title', ['title' => 'Konser LV 2019', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Konser LV 2019'])
        ];
        return view('dashboard/konser-lv-2019', $data);
    }

    //KKL67
    public function kkl67_1()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KKL67 1']),
            'page_title' => view('partials/page-title', ['title' => 'KKL67 1', 'li_1' => 'KKL67', 'li_2' => '1'])
        ];
        return view('dashboard/kkl67-1', $data);
    }
    public function kkl67_2()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KKL67 2']),
            'page_title' => view('partials/page-title', ['title' => 'KKL67 2', 'li_1' => 'KKL67', 'li_2' => '2'])
        ];
        return view('dashboard/kkl67-2', $data);
    }
    public function kkl67_3()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KKL67 3']),
            'page_title' => view('partials/page-title', ['title' => 'KKL67 3', 'li_1' => 'KKL67', 'li_2' => '3'])
        ];
        return view('dashboard/kkl67-3', $data);
    }
    public function kkl67_4()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KKL67 4']),
            'page_title' => view('partials/page-title', ['title' => 'KKL67 4', 'li_1' => 'KKL67', 'li_2' => '4'])
        ];
        return view('dashboard/kkl67-4', $data);
    }
    public function kkl67_5()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KKL67 5']),
            'page_title' => view('partials/page-title', ['title' => 'KKL67 5', 'li_1' => 'KKL67', 'li_2' => '5'])
        ];
        return view('dashboard/kkl67-5', $data);
    }
    public function kkl67_6()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KKL67 6']),
            'page_title' => view('partials/page-title', ['title' => 'KKL67 6', 'li_1' => 'KKL67', 'li_2' => '6'])
        ];
        return view('dashboard/kkl67-6', $data);
    }
    public function kkl67_7()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KKL67 7']),
            'page_title' => view('partials/page-title', ['title' => 'KKL67 7', 'li_1' => 'KKL67', 'li_2' => '7'])
        ];
        return view('dashboard/kkl67-7', $data);
    }
    public function kkl67_8()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KKL67 8']),
            'page_title' => view('partials/page-title', ['title' => 'KKL67 8', 'li_1' => 'KKL67', 'li_2' => '8'])
        ];
        return view('dashboard/kkl67-8', $data);
    }
    public function kkl67_video()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KKL67 video']),
            'page_title' => view('partials/page-title', ['title' => 'KKL67 video', 'li_1' => 'KKL67', 'li_2' => 'video'])
        ];
        return view('dashboard/kkl67-video', $data);
    }

    //KEKL19
    public function kekl19_bandung()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KEKL19 Bandung']),
            'page_title' => view('partials/page-title', ['title' => 'KEKL19 Bandung', 'li_1' => 'KEKL19', 'li_2' => 'Bandung'])
        ];
        return view('dashboard/kekl19-bandung', $data);
    }
    public function kekl19_jakarta()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KEKL19 Jakarta']),
            'page_title' => view('partials/page-title', ['title' => 'KEKL19 Jakarta', 'li_1' => 'KEKL19', 'li_2' => 'Jakarta'])
        ];
        return view('dashboard/kekl19-jakarta', $data);
    }
    public function kekl19_jogjasolo()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KEKL19 Jogja Solo']),
            'page_title' => view('partials/page-title', ['title' => 'KEKL19 Jogja Solo', 'li_1' => 'KEKL19', 'li_2' => 'Jogja Solo'])
        ];
        return view('dashboard/kekl19-jogjasolo', $data);
    }
    public function kekl19_malang()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KEKL19 Malang']),
            'page_title' => view('partials/page-title', ['title' => 'KEKL19 Malang', 'li_1' => 'KEKL19', 'li_2' => 'Malang'])
        ];
        return view('dashboard/kekl19-malang', $data);
    }
    public function kekl19_semarang()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KEKL19 Semarang']),
            'page_title' => view('partials/page-title', ['title' => 'KEKL19 Semarang', 'li_1' => 'KEKL19', 'li_2' => 'Semarang'])
        ];
        return view('dashboard/kekl19-semarang', $data);
    }
    public function kekl19_surabaya()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KEKL19 Surabaya']),
            'page_title' => view('partials/page-title', ['title' => 'KEKL19 Surabaya', 'li_1' => 'KEKL19', 'li_2' => 'Surabaya'])
        ];
        return view('dashboard/kekl19-surabaya', $data);
    }
    public function kekl19_temukangen()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'KEKL19 Event Temu kangen 2020']),
            'page_title' => view('partials/page-title', ['title' => 'KEKL19 Event Temu kangen 2020', 'li_1' => 'KEKL19', 'li_2' => 'Temu Kangen'])
        ];
        return view('dashboard/kekl19-temukangen', $data);
    }

    // yearbook
    public function yearbook_xiia()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Yearbook XII A']),
            'page_title' => view('partials/page-title', ['title' => 'Yearbook XII A', 'li_1' => 'Yearbook', 'li_2' => 'Yearbook XII A'])
        ];
        return view('dashboard/yearbook-xiia', $data);
    }
    public function yearbook_xiib()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Yearbook XII B']),
            'page_title' => view('partials/page-title', ['title' => 'Yearbook XII B', 'li_1' => 'Yearbook', 'li_2' => 'Yearbook XII B'])
        ];
        return view('dashboard/yearbook-xiib', $data);
    }
    public function yearbook_xiic()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Yearbook XII C']),
            'page_title' => view('partials/page-title', ['title' => 'Yearbook XII C', 'li_1' => 'Yearbook', 'li_2' => 'Yearbook XII C'])
        ];
        return view('dashboard/yearbook-xiic', $data);
    }
    public function yearbook_xiid()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Yearbook XII D']),
            'page_title' => view('partials/page-title', ['title' => 'Yearbook XII D', 'li_1' => 'Yearbook', 'li_2' => 'Yearbook XII D'])
        ];
        return view('dashboard/yearbook-xiid', $data);
    }
    public function yearbook_xiie()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Yearbook XII E']),
            'page_title' => view('partials/page-title', ['title' => 'Yearbook XII E', 'li_1' => 'Yearbook', 'li_2' => 'Yearbook XII E'])
        ];
        return view('dashboard/yearbook-xiie', $data);
    }
    public function yearbook_xiif()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Yearbook XII F']),
            'page_title' => view('partials/page-title', ['title' => 'Yearbook XII F', 'li_1' => 'Yearbook', 'li_2' => 'Yearbook XII F'])
        ];
        return view('dashboard/yearbook-xiif', $data);
    }
    public function yearbook_xiig()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Yearbook XII G']),
            'page_title' => view('partials/page-title', ['title' => 'Yearbook XII G', 'li_1' => 'Yearbook', 'li_2' => 'Yearbook XII G'])
        ];
        return view('dashboard/yearbook-xiig', $data);
    }
    public function yearbook_xiih()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Yearbook XII H']),
            'page_title' => view('partials/page-title', ['title' => 'Yearbook XII H', 'li_1' => 'Yearbook', 'li_2' => 'Yearbook XII H'])
        ];
        return view('dashboard/yearbook-xiih', $data);
    }
    public function yearbook_xiii()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Yearbook XII H']),
            'page_title' => view('partials/page-title', ['title' => 'Yearbook XII H', 'li_1' => 'Yearbook', 'li_2' => 'Yearbook XII H'])
        ];
        return view('dashboard/yearbook-xiii', $data);
    }

    // Video
    public function video_mh()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Video MH']),
            'page_title' => view('partials/page-title', ['title' => 'Video MH', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Video'])
        ];
        return view('dashboard/video-mh', $data);
    }
    public function uncategorized_mh()
    {
        if (user()->fullname == null || user()->fullname == '') {
            return redirect()->to('/welcomegaiss');
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Uncategorized MH']),
            'page_title' => view('partials/page-title', ['title' => 'Uncategorized MH', 'li_1' => 'Moment Hunter Gallery', 'li_2' => 'Uncategorized'])
        ];
        return view('dashboard/uncategorized-mh', $data);
    }
}
