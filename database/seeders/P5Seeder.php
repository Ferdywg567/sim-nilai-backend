<?php

namespace Database\Seeders;

use App\Models\P5Dimension;
use App\Models\P5DimensionElement;
use App\Models\P5DimensionSubElement;
use App\Models\P5DimensionSubElementPhase as P5Phase;
use App\Models\P5Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class P5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dimensions = [
            [
                'name'     => 'Beriman, Bertakwa Kepada Tuhan Yang Maha Esa, dan Berahlak Mulia',
                'elements' => [
                    [
                        'name' => 'Akhlak Beragama',
                        'subelements' => [
                            [
                                'name' => 'Mengenal dan Mencintai Tuhan Yang Maha Esa',
                                'phases' => [
                                    [
                                        'description' => 'Menerapkan pemahamannya tentang kualitas atau sifat-sifat tuhan dalam ritual ibadahnya baik ibadah yang bersifat personal maupun sosial',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Pemahaman Agama / Kepercayaan',
                                'phases' => [
                                    [
                                        'description' => 'Memahami struktur organisasi unsur-unsur utama agama / kepercayaan dalam konteks Indonesia, memahami kontribusi agama / kepercayaan terhadap peradaban dunia',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Pelaksanaan Ritual Ibadah',
                                'phases' => [
                                    [
                                        'description' => 'melaksanakan ibadah secara rutin dan mandiri serta menyadari arti penting ibadah tersebut dan berpartisipasi aktif pada kegiatan keagamaan atau kepercayaan',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                        ]
                    ],
                    [
                        'name' => 'Akhlak Pribadi',
                        'subelements' => [
                            [
                                'name' => 'Integritas',
                                'phases' => [
                                    [
                                        'description' => 'Menyadari bahwa aturan agama dan sosial merupakan aturan yang baik dan menjadi bagian dari diri sehingga bisa menerapkannya secara bijak dan kontekstual',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Merawat Diri Secara Fisik, Mental, dan Spiritual',
                                'phases' => [
                                    [
                                        'description' => 'Melakukan aktivitas fisik, sosial, dan ibadah secara seimbang',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                        ]
                    ],
                    [
                        'name' => 'Akhlak Kepada Manusia',
                        'subelements' => [
                            [
                                'name' => 'Mengutamakan Persamaan Dengan Orang Lain dan Menghargai Perbedaan',
                                'phases' => [
                                    [
                                        'description' => 'Mengidentifikasi hal yang menjadi permasalahan bersama memberikan alternatif solusi untuk menjembatani perbedaan dengan mengutamakan kemanusiaan',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Berempati Kepada Orang Lain',
                                'phases' => [
                                    [
                                        'description' => 'Memahami dan menghargai perasaan dan sudut pandang orang dan/atau kelompok lain',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                        ]
                    ],
                    [
                        'name' => 'Akhlak Kepada Alam',
                        'subelements' => [
                            [
                                'name' => 'Memahami Keterhubugan Ekosistem Bumi',
                                'phases' => [
                                    [
                                        'description' => 'Mengidentifikasi masalah lingkungan hidup di tempat ia tinggal dan melakukan langkah-langkah konkret yang bisa dilakukan untuk menghindari kerusakan dan menjaga keharmonisan ekosistem yang ada di lingkungannya',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Menjaga Lingkungan Alam Sekitar',
                                'phases' => [
                                    [
                                        'description' => 'Mewujudkan rasa syukur dengan membangun kesadaran peduli lingkungan alam dengan menciptakan dan mengimplementasikan solusi dari permasalahan lingkungan yang ada',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                        ]
                    ],
                    [
                        'name' => 'Akhlak Bernegara',
                        'subelements' => [
                            [
                                'name' => 'Melaksanakan Hak dan Kewajiban Sebagai Warga Negara Indonesia',
                                'phases' => [
                                    [
                                        'description' => 'Menggunakan hak dan melaksanakan kewajiban kewarganegaraan dan terbiasa mendahulukan kepentingan umum diatas kepentingan pribadi sebagai wujud dari keimanannya kepada Tuhan YME',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                        ]
                    ],
                ],
            ],
            [
                'name'     => 'Berkebhinekaan Global',
                'elements' => [
                    [
                        'name' => 'Mengenal dan menghargai budaya',
                        'subelements' => [
                            [
                                'name' => 'Mendalami Budaya dan Identitas Budaya',
                                'phases' => [
                                    [
                                        'description' => 'Menganalisis pengaruh keanggotaan kelompok lokal, nasional, dan global terhadap pembentukan identitas, termasuk identitas dirinya. <ulai menginternalisasi identitas diri sebagai bagian dari budaya bangsa',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Mengeksplorasi dan Membandingkan Pengetahuan Budaya Kepercayaan Serta Praktiknya',
                                'phases' => [
                                    [
                                        'description' => 'Menganalisis dinamika budaya yang mencakup pemahaman kepercayaan dan praktik keseharian dalam rentang waktu yang panjang dan konteks yang luas',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Menumbuhkan Rasa Menghormati Terhadap Keanekaragaman Budaya',
                                'phases' => [
                                    [
                                        'description' => 'Mempromosikan pertukaran dan kolaborasi dalam dunia yang saling terhubung serta menunjukkannya dalam perilaku',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                        ]
                    ],
                    [
                        'name' => 'Komunikasi dan Interaksi antar Budaya',
                        'subelements' => [
                            [
                                'name' => 'Berkomunikasi Antar Budaya',
                                'phases' => [
                                    [
                                        'description' => 'Menganalisis hubungan antara bahasa, pikiran, dan konteks untuk memahami dan meningkatkan komunikasi antarbudaya yang berbeda-beda',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Mempertimbangkan dan Menumbuhkan Berbagai Perspektif',
                                'phases' => [
                                    [
                                        'description' => 'Menyajikan pandangan yang seimbang mengenai permasalahan yang dapat menimbulkan pertentangan pendapat memposisikan orang lain dan budaya yang berbeda darinya secara setara serta bersedia memberikan pertolongan ketika orang lain berbeda dalam situasi sulit',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                        ]
                    ],
                    [
                        'name' => 'Refleksi dan Bertanggung Jawab Terhadap Pengalaman Kebinekaan',
                        'subelements' => [
                            [
                                'name' => 'Refleksi Terhadap Pengalaman Kebinekaan',
                                'phases' => [
                                    [
                                        'description' => 'Merefleksikan secara kritis dampak dari pengalaman hidup di lingkungan yang beragam terkait dengan perilaku, kepercayaan serta tindakannya terhadap orang lain.',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Menghilangkan Stereotip dan Prasangka',
                                'phases' => [
                                    [
                                        'description' => 'Mengkritik dan menolak stereotip serta prasangka tentang gambaran identitas kelompok dan suku bangsa serta berinisiatif mengajak orang lain untuk menolak stereotip dan prasangka.',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Menyelaraskan Perbedaan Budaya',
                                'phases' => [
                                    [
                                        'description' => 'Mengetahui tantangan dan keuntungan hidup dalam lingkungan dengan budaya yang beragam, serta memahami pentingnya kerukunan antar budaya dalam kehidupan bersama yang harmonis.',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                        ]
                    ],
                    [
                        'name' => 'Berkeadilan Sosial',
                        'subelements' => [
                            [
                                'name' => 'Aktif Membangun Masyarakat yang Inklusif, Adil, dan Berkelanjutan',
                                'phases' => [
                                    [
                                        'description' => 'Berinisiatif melakukan suatu tindakan berdasarkan identifikasi masalah untuk mempromosikan keadilan, keamanan, ekonommi, menopang ekologi, dan demokrasi sambil menghindari kerugian jangka panjang terhadap manusia, alam, ataupun masyarakat.',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Berpatisipasi Dalam Proses Pengambilan Keputusan Bersama',
                                'phases' => [
                                    [
                                        'description' => 'Berpatisipasi menentukan pilihan dan keputusan untuk kepentingan bersama melalui proses bertukar pikiran secara cermat dan terbuka secara mandiri.',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Menyelaraskan Perbedaan Budaya',
                                'phases' => [
                                    [
                                        'description' => 'Mengetahui tantangan dan keuntungan hidup dalam lingkungan dengan budaya yang beragam, serta memahami pentingnya kerukunan antar budaya dalam kehidupan bersama yang harmonis.',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                        ]
                    ],
                ],
            ],
            [
                'name'     => 'Bergotong Royong',
                'elements' => [
                    [
                        'name' => 'Kolaborasi',
                        'subelements' => [
                            [
                                'name' => 'Kerja Sama',
                                'phases' => [
                                    [
                                        'description' => 'Membangun tim dan mengelola kerjasama untuk mencapai tujuan bersama sesuai dengan target yang sudah ditentukan.',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                        ]
                    ],
                    [
                        'name' => 'Kepedulian',
                        'subelements' => [
                            [
                                'name' => 'Berkomunikasi Antar Budaya',
                                'phases' => [
                                    [
                                        'description' => 'Menganalisis hubungan antara bahasa, pikiran, dan konteks untuk memahami dan meningkatkan komunikasi antarbudaya yang berbeda-beda',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                        ]
                    ],
                    [
                        'name' => 'Berbagi',
                        'subelements' => [
                            [
                                'name' => 'Refleksi Terhadap Pengalaman Kebinekaan',
                                'phases' => [
                                    [
                                        'description' => 'Merefleksikan secara kritis dampak dari pengalaman hidup di lingkungan yang beragam terkait dengan perilaku, kepercayaan serta tindakannya terhadap orang lain.',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                        ]
                    ],
                    [
                        'name' => 'Berkeadilan Sosial',
                        'subelements' => [
                            [
                                'name' => 'Aktif Membangun Masyarakat yang Inklusif, Adil, dan Berkelanjutan',
                                'phases' => [
                                    [
                                        'description' => 'Berinisiatif melakukan suatu tindakan berdasarkan identifikasi masalah untuk mempromosikan keadilan, keamanan, ekonommi, menopang ekologi, dan demokrasi sambil menghindari kerugian jangka panjang terhadap manusia, alam, ataupun masyarakat.',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Berpatisipasi Dalam Proses Pengambilan Keputusan Bersama',
                                'phases' => [
                                    [
                                        'description' => 'Berpatisipasi menentukan pilihan dan keputusan untuk kepentingan bersama melalui proses bertukar pikiran secara cermat dan terbuka secara mandiri.',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                            [
                                'name' => 'Menyelaraskan Perbedaan Budaya',
                                'phases' => [
                                    [
                                        'description' => 'Mengetahui tantangan dan keuntungan hidup dalam lingkungan dengan budaya yang beragam, serta memahami pentingnya kerukunan antar budaya dalam kehidupan bersama yang harmonis.',
                                        'phase'       => 'E',
                                    ]
                                ]
                            ],
                        ]
                    ],
                ],
            ],
        ];

        $themes = [
            [
                'name' => 'Gaya Hidup Berkelanjutan',
            ],
            [
                'name' => 'Kearifan Lokal',
            ],
            [
                'name' => 'Bhinneka Tunggal Ika',
            ],
            [
                'name' => 'Bangunlah Jiwa dan Raganya',
            ],
            [
                'name' => 'Suara Demokrasi',
            ],
            [
                'name' => 'Rekayasa dan Teknologi',
            ],
            [
                'name' => 'Kewirausahaan',
            ],
            [
                'name' => 'Kebekerjaan',
            ],
        ];

        foreach ($dimensions as $dimension) {
            $elements = $dimension['elements'];

            unset($dimension['elements']);

            $p5_dimension = P5Dimension::create($dimension);

            foreach ($elements as $element) {
                $subelements = $element['subelements'];

                unset($element['subelements']);

                $p5_element = $p5_dimension->elements()->create($element);

                foreach ($subelements as $sub) {
                    $phases = $sub['phases'];

                    unset($sub['phases']);

                    $p5_subelement = $p5_element->subs()->create($sub);

                    foreach ($phases as $phase) {
                        // $phase['subelement_id'] = $p5_subelement->id;
                        // $phase['element_id']    = $p5_element->id;
                        // $phase['dimension_id']  = $p5_dimension->id;

                        $p5_subelement->phases()->create($phase);
                    }
                }
            }
        }

        P5Theme::insert($themes);
    }
}
