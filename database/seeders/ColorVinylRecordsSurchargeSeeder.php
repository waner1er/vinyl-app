<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ColorVinylRecordsSurcharge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColorVinylRecordsSurchargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colorVynils = [
            [
                'title' => 'CVRS-7-001',
                'description' => 'Surcharge for 7" colored vinyl records - standard colors except #1,5,12, P4, P15, P16, P18',
                'disc_size' => '7',
                'price' => 0.31,
                'isFixedPrice' => false,
                'fixed_price' => null
            ],
            [
                'title' => 'CVRS-7-002',
                'description' => 'Surcharge for NEON colours - 7" Violet, Green, Yellow, Orange, Pink, Magenta + P21-25',
                'disc_size' => '7',
                'price' => 0.44,
                'isFixedPrice' => false,
                'fixed_price' => null
            ],
            [
                'title' => 'CVRS-7-003',
                'description' => 'Surcharge for 7" colored vinyl records - colors #1,5,12, P4, P15, P16, P18, P26',
                'disc_size' => '7',
                'price' => 0.47,
                'isFixedPrice' => false,
                'fixed_price' => null
            ],
            [
                'title' => 'CVRS-7-004',
                'description' => 'Surcharge for 7" colored vinyl records - colors #1,5,12, P4, P15, P16, P18, P26',
                'disc_size' => '7',
                'price' => null,
                'isFixedPrice' => true,
                'fixed_price' => 109.00,
            ],
            [
                'title' => 'CVRS-10-001',
                'description' => 'Surcharge for 10" colored vinyl records - standard colors except #1,5,12, P4, P15, P16, P18',
                'disc_size' => '10',
                'price' => 0.466,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-002',
                'description' => 'Surcharge for 10" colored vinyl records - colors #1,5,12, P4, P15, P16, P18,P26',
                'disc_size' => '10',
                'price' => 0.620,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-003',
                'description' => 'Surcharge for 10" 2-colored vinyl records - standard colors except #1,5,12, P4, P15,
                                  P16, P18 - (half-half, color in color, A side B side, )',
                'disc_size' => '10',
                'price' => 0.854,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-004',
                'description' => 'Surcharge for 10" 2-colored vinyl records - colors #1,5,12,
                                  P4, P15, P16, P18, P26 N1-N6 (half-half, color in color, A side B side, )',
                'disc_size' => '10',
                'price' => 1.009,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-005',
                'description' => 'Surcharge for CORNETTO Effect - 10" 2-colored vinyl records
                                  (7" size not available); std colors except #1, #5, #12, P4, P15, P16, P18',
                'disc_size' => '10',
                'price' => 1.921,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-006',
                'description' => 'Surcharge for CORNETTO Effect - 10" 2-colored vinyl records
                (7" size not available); colors #1, #5, #12, P4, P15, P16, P18, P26, N1-N6',
                'disc_size' => '10',
                'price' => 2.196,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-007',
                'description' => 'Surcharge for QUAD Effect - 10" 2-colored vinyl records
                                 (7" size not available); std colors except #1, #5, #12, P4, P15, P16, P18',
                'disc_size' => '10',
                'price' => 1.921,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-008',
                'description' => 'Surcharge for QUAD Effect - 10" 2-colored vinyl records
                                 (7" size not available); colors #1, #5, #12, P4, P15, P16, P18, P26, N1-N6',
                'disc_size' => '10',
                'price' => 2.196,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-009',
                'description' => 'Surcharge for QUAD Effect - 10" 3-colored vinyl records
                                  (7" size not available); std colors except #1, #5, #12, P4, P15, P16, P18',
                'disc_size' => '12',
                'price' => 2.232,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-010',
                'description' => 'Surcharge for QUAD Effect - 10" 3-colored vinyl records
                                  (7" size not available); colors #1, #5, #12, P4, P15, P16, P18, P26, N1-N6',
                'disc_size' => '10',
                'price' => 2.507,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-011',
                'description' => 'Surcharge for 10 3-colored vinyl records - standard colors
                                  except #1,5,12, P4, P15, P16, P18 -  (colored stripes, 120° segments)',
                'disc_size' => '10',
                'price' => 1.165,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-012',
                'description' => 'Surcharge for 10 3-colored vinyl records -
                                  colors  #1,5,12, P4, P15, P16, P18,P26,  N1-N6 + P21-25 -  (colored stripes, 120° segments)',
                'disc_size' => '10',
                'price' => 1.320,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-013',
                'description' => 'Surcharge for CLOUDY Effect - 10" 3-colored vinyl records std colors
                                  except #1, #5, #12, P4, P15, P16, P18',
                'disc_size' => '10',
                'price' => 1.243,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-014',
                'description' => 'Surcharge for CLOUDY Effect - 10" 3-colored vinyl records;
                                  colors #1, #5, #12, P4, P15, P16, P18, P26, N1-N6 + P21-25
                ',
                'disc_size' => '10',
                'price' => 1.397,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-015',
                'description' => 'Surcharge for NEON colours - 10" Violet, Green, Yellow, Orange,
                                Pink, Magenta + P21-25',
                'disc_size' => '10',
                'price' => 0.585,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-016',
                'description' => 'Surcharge for MARBLE records  10"',
                'disc_size' => '10',
                'price' => 0.659,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-017',
                'description' => 'Surcharge for GLOW IN THE DARK - Green',
                'disc_size' => '10',
                'price' => 1.304,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-018',
                'description' => 'Surcharge for DD GALAXY',
                'disc_size' => '10',
                'price' => 0.659,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-019',
                'description' => 'Surcharge for 10" Splatters - 1 color',
                'disc_size' => '10',
                'price' => 0.389,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-020',
                'description' => 'Surcharge for 10" Splatters - 2-3 colors',
                'disc_size' => '10',
                'price' => 0.389,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-021',
                'description' => 'Surcharge for 10" Splatters - 1  neon color',
                'disc_size' => '10',
                'price' => 0.489,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-022',
                'description' => 'Surcharge for 10" Splatters - 2-3  neon color',
                'disc_size' => '10',
                'price' => 0.489,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-023',
                'description' => 'Surcharge for 10" Splatters - 1 glow in the dark - green',
                'disc_size' => '10',
                'price' => 1.025,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-024',
                'description' => 'Setup Surcharge for colored records',
                'disc_size' => '10',
                'price' => null,
                'isFixedPrice' => true,
                'fixed_price' => 109,
            ],
            [
                'title' => 'CVRS-10-024',
                'description' => 'Setup Surcharge for Splatters - 2-3 colors',
                'disc_size' => '10',
                'price' => null,
                'isFixedPrice' => true,
                'fixed_price' => 32,
            ],
            [
                'title' => 'CVRS-10-024',
                'description' => 'Setup Surcharge for split orders - each colored configuration',
                'disc_size' => '10',
                'price' => null,
                'isFixedPrice' => true,
                'fixed_price' => 39,
            ],


            [
                'title' => 'CVRS-12-001',
                'description' => 'Surcharge for 12" colored vinyl records - standard colors except #1,5,12, P4, P15, P16, P18',
                'disc_size' => '12',
                'price' => 0.466,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-002',
                'description' => 'Surcharge for 12" colored vinyl records - colors #1,5,12, P4, P15, P16, P18,P26',
                'disc_size' => '12',
                'price' => 0.620,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-003',
                'description' => 'Surcharge for 12" 2-colored vinyl records - standard colors except #1,5,12, P4, P15,
                                  P16, P18 - (half-half, color in color, A side B side, )',
                'disc_size' => '12',
                'price' => 0.854,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-004',
                'description' => 'Surcharge for 12" 2-colored vinyl records - colors #1,5,12,
                                  P4, P15, P16, P18, P26 N1-N6 (half-half, color in color, A side B side, )',
                'disc_size' => '12',
                'price' => 1.009,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-005',
                'description' => 'Surcharge for CORNETTO Effect - 12" 2-colored vinyl records
                                  (7" size not available); std colors except #1, #5, #12, P4, P15, P16, P18',
                'disc_size' => '12',
                'price' => 1.921,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-006',
                'description' => 'Surcharge for CORNETTO Effect - 12" 2-colored vinyl records
                (7" size not available); colors #1, #5, #12, P4, P15, P16, P18, P26, N1-N6',
                'disc_size' => '12',
                'price' => 2.196,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-007',
                'description' => 'Surcharge for QUAD Effect - 12" 2-colored vinyl records
                                 (7" size not available); std colors except #1, #5, #12, P4, P15, P16, P18',
                'disc_size' => '12',
                'price' => 1.921,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-008',
                'description' => 'Surcharge for QUAD Effect - 10" 2-colored vinyl records
                                 (7" size not available); colors #1, #5, #12, P4, P15, P16, P18, P26, N1-N6',
                'disc_size' => '12',
                'price' => 2.196,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-009',
                'description' => 'Surcharge for QUAD Effect - 12" 3-colored vinyl records
                                  (7" size not available); std colors except #1, #5, #12, P4, P15, P16, P18',
                'disc_size' => '12',
                'price' => 2.232,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-010',
                'description' => 'Surcharge for QUAD Effect - 12" 3-colored vinyl records
                                  (7" size not available); colors #1, #5, #12, P4, P15, P16, P18, P26, N1-N6',
                'disc_size' => '12',
                'price' => 2.507,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-011',
                'description' => 'Surcharge for 12 3-colored vinyl records - standard colors
                                  except #1,5,12, P4, P15, P16, P18 -  (colored stripes, 120° segments)',
                'disc_size' => '12',
                'price' => 1.165,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-012',
                'description' => 'Surcharge for 12 3-colored vinyl records -
                                  colors  #1,5,12, P4, P15, P16, P18,P26,  N1-N6 + P21-25 -  (colored stripes, 120° segments)',
                'disc_size' => '12',
                'price' => 1.320,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-013',
                'description' => 'Surcharge for CLOUDY Effect - 12" 3-colored vinyl records std colors
                                  except #1, #5, #12, P4, P15, P16, P18',
                'disc_size' => '12',
                'price' => 1.243,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-014',
                'description' => 'Surcharge for CLOUDY Effect - 12" 3-colored vinyl records;
                                  colors #1, #5, #12, P4, P15, P16, P18, P26, N1-N6 + P21-25
                ',
                'disc_size' => '12',
                'price' => 1.397,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-015',
                'description' => 'Surcharge for NEON colours - 12" Violet, Green, Yellow, Orange,
                                Pink, Magenta + P21-25',
                'disc_size' => '12',
                'price' => 0.585,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-016',
                'description' => 'Surcharge for MARBLE records  12"',
                'disc_size' => '12',
                'price' => 0.659,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-017',
                'description' => 'Surcharge for GLOW IN THE DARK - Green',
                'disc_size' => '12',
                'price' => 1.304,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-018',
                'description' => 'Surcharge for DD GALAXY',
                'disc_size' => '12',
                'price' => 0.659,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-019',
                'description' => 'Surcharge for 12" Splatters - 1 color',
                'disc_size' => '12',
                'price' => 0.389,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-10-020',
                'description' => 'Surcharge for 10" Splatters - 2-3 colors',
                'disc_size' => '10',
                'price' => 0.389,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-021',
                'description' => 'Surcharge for 12" Splatters - 1  neon color',
                'disc_size' => '12',
                'price' => 0.489,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-022',
                'description' => 'Surcharge for 12" Splatters - 2-3  neon color',
                'disc_size' => '12',
                'price' => 0.489,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-023',
                'description' => 'Surcharge for 12" Splatters - 1 glow in the dark - green',
                'disc_size' => '12',
                'price' => 1.025,
                'isFixedPrice' => false,
                'fixed_price' => null,
            ],
            [
                'title' => 'CVRS-12-024',
                'description' => 'Setup Surcharge for colored records',
                'disc_size' => '12',
                'price' => null,
                'isFixedPrice' => true,
                'fixed_price' => 109,
            ],
            [
                'title' => 'CVRS-12-024',
                'description' => 'Setup Surcharge for Splatters - 2-3 colors',
                'disc_size' => '12',
                'price' => null,
                'isFixedPrice' => true,
                'fixed_price' => 32,
            ],
            [
                'title' => 'CVRS-12-024',
                'description' => 'Setup Surcharge for split orders - each colored configuration',
                'disc_size' => '12',
                'price' => null,
                'isFixedPrice' => true,
                'fixed_price' => 39,
            ],
        ];

        foreach ($colorVynils as $colorVynil) {
            ColorVinylRecordsSurcharge::create($colorVynil);
        }

    }
}
