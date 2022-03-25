<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;
use App\Validation\CustomRules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
		CustomRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $lapharian = [
        'riksa' => [
			'rules'  => 'required',
			'errors' => [
				'required' => 'Group Riksa Tidak Boleh Kosong.'
			]
		],
        'terminal' => [
			'rules'  => 'required',
			'errors' => [
				'required' => 'Terminal Tidak Boleh Kosong.'
			]
		],
        'waktu' => [
			'rules'  => 'required',
			'errors' => [
				'required' => 'Tanggal & jam Tidak Boleh Kosong.'
			]
		],
		'no_flight'    => [
			'rules'  => 'required',
			'errors' => [
				'required' => 'Nomer Flight Tidak Boleh Kosong.'
			]
		],
		'rute'    => [
			'rules'  => 'required',
			'errors' => [
				'required' => 'rute Tidak Boleh Kosong.'
			]
		],
		'doc'    => [
			'rules'  => 'uploaded[doc]|max_size[doc,5000]|ext_in[doc,pdf]',
			'errors' => [
				'uploaded' => 'Lampiran Tidak boleh kosong.',
				'max_size' => 'Lampiran Maksimal size 5 MB',
				'ext_in' => 'Lampiran File Harus Berupa PDF'
			]
		],
	];
	public $login = [
		'password' => [
			'rules' => 'required|min_length[4]|max_length[50]|isLogin[password]',
			'errors' => [
				'required' => '{field} Harus diisi',
				'min_length' => '{field} Minimal 4 Karakter',
				'max_length' => '{field} Maksimal 50 Karakter',
				'isLogin' => '{field} Salah'
			]
		],
	];

    // public $removeLapharian = [
		
	// 	'id' => [
	// 		'rules' => 'isSeksi[id]|isYourData[id]',
	// 		'errors' => [
	// 			'isSeksi' => 'Hanya untuk user seksi',
	// 			'isYourData' => 'Hanya Untuk User Seksi Yang berwenang',
	// 		]
	// 	]
	// ];
}
