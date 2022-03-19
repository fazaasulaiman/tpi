<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

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
		'doc'    => [
			'rules'  => 'uploaded[doc]|max_size[doc,5000]|ext_in[doc,pdf]',
			'errors' => [
				'uploaded' => 'Tidak boleh kosong.',
				'max_size' => 'Maksimal size 5 MB',
				'ext_in' => 'File Harus Berupa PDF'
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
