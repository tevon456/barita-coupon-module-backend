<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Security;

class SecuritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $securities = [
            ['GUB00616B243', 'Fixed Rate 7.25% USD Benchmark Notes 2016', '2'],
            ['US470160AR34', 'Governmennt of Jamaica 10.625% notes due 2017', '2'],
            ['US470160AS17', 'Government of Jamaica 9.0% notes due 2015', '2'],
            ['US470160AT99', 'Government of Jamaica 9.25% notes due 2025', '2'],
            ['US470160AQ50', 'Government of Jamaica 11.625% notes due 2022', '2'],
            ['USP7807HAP03', 'PETROLEOS DE VENEZUELA SA (Regulation S) Due 11/17/2021 @ 9% S&P CCC+', '2'],
            ['USP71647NAF69', 'PETROBRAS GLOBAL FINANCE 4.375% due 2023', '2'],
            ['USP17625AD98', 'REPUBLIC OF VENEZUELA REG-S, DUE 2031', '2'],
            ['US716558AC52', 'PETROLEOS DE VENEZUELA S 12.75% (144A) DUE 2022', '2'],
            ['JMB201400034', 'Bank of Jamaica $US Certificate of Deposit 20181217', '2'],
            ['JMB201400158', 'Bank of Jamaica $US Certificate of Deposit 20191217', '2'],
            ['JMB201400166', 'Bank of Jamaica $US Certificate of Deposit 20211217', '2'],
            ['GOJ TBILL (2015)', 'GOVERNMENT OF JAMAICA TREASURY BILL 20150119', '2'],
            ['GOJ TBILL -2015', 'GOVERNMENT OF JAMAICA TREASURY BILL 20150320', '2'],
            ['GOJ TBILL2015', 'GOVERNMENT OF JAMAICA TREASURY BILL 20150619', '2'],
            ['USP7807HAM71', 'PETROLEOS DE VENEZUELA S 12.75% (Regulation S) DUE 2022', '2'],
            ['GBF01122D287', 'FR 8.75% BMI Notes 2022', '2'],
            ['US470160BE12', 'Government of Jamaica 8.425% (Regulation S) notes due 2017', '2'],
            ['US470160BD39', 'Government of Jamaica 8.425% (144A) notes due 2017', '2'],
            ['US470160BF86', 'Government of Jamaica 12.625% (144A)notes due 2016', '2'],
            ['US470160BG69', 'Government of Jamaica 12.625% (Regulation S) notes due 2016', '2'],
            ['US470160BC55', 'Government of Jamaica 8.55% (regulation S) notes due 2020', '2'],
            ['US470160BB72', 'Government of Jamaica 8.55% ( 144A) notes due 2020', '2'],
            ['GBF00315B241', 'Fixed Rate 7.20% Benchmark Investment Notes 2015', '2'],
            ['US470160BP68', 'Government of Jamaica 8.5% notes due 2021', '2'],
            ['BJV00216M195', 'Bank of Jamaica variable Rate Certificate of Deposit 20161219', '2'],
            ['BJV36415M183', 'Bank of Jamaica variable Rate Certificate of Deposit 20151218', '2'],
            ['US896292AF68', 'Rep of Trinidad & Tobago USD FGN BD (144A) 9.7500% DUE 07/01/2020', '2'],
            ['USP93960AA38', 'Rep of Trinidad & Tobago USD FGN BD (Regulation S) 9.7500% DUE 07/01/2020', '2'],
            ['GOJ TBILL 2015Z', 'GOVERNMENT OF JAMAICA TREASURY BILL 20150220', '2'],
            ['GOJ TBILL 2015Y', 'GOVERNMENT OF JAMAICA TREASURY BILL 20150522', '2'],
            ['USG6149AAA72', 'Mirant JPSCO Finance Ltd. (Funding Corp), Regulation S,Senior Notes Due 2016', '2'],
            ['US60468AAA43', 'Mirant JPSCO Finance Ltd. (Funding Corp), 144A, Senior Notes Due 2016', '2'],
            ['JMB201500015', 'Bank of Jamaica $US Certificate of Deposit 20220110', '2'],
            ['TREASURY BILL', 'GOJ TBILL', '2'],
            ['BOJ REPO', 'BOJ REPO', '2'],
            ['BJV36416A087', 'Bank of Jamaica Variable Rate Certificate of Deposit 20160108', '2'],
            ['JMB201500106', 'Bank of Jamaica $US Certificate of Deposit 20190119', '2'],
            ['JMB201500205', 'Bank of Jamaica $US Certificate of Deposit 20200109', '2'],
            ['BJU36516B034', '3.25% US-INDEXED NOTE 2016', '2'],
            ['BJU36416B094', '3.25% US-INDEXED NOTE 2016A', '2'],
            ['JMB201500114', 'Bank of Jamaica $US Certificate of Deposit 20220210', '2'],
            ['JMB201500221', 'Bank of Jamaica $US Certificate of Deposit 20200210', '2'],
            ['JMB201500023', 'Bank of Jamaica $US Certificate of Deposit 20221002', '2'],
            ['BJV36516B264', 'Bank of Jamaica Variable Rate Certificate of Deposit 20200216', '2'],
            ['BJV00217B246', 'Bank of Jamaica Variable Rate Certificate of Deposit ', '2'],
            ['BJU00318B268', 'Bank of Jamaica Variable Rate Certificate of Deposit 20180226', '2'],
            ['JMB201500049', 'BOJ USD COD_5 YEARS_20150227', '2'],
            ['JMB201500031', 'BOJ USD COD_7 YEARS_20150227', '2'],
            ['BJV36616B114', 'Bank of Jamaica variable Rate Certificate of Deposit 20160211', '2'],
            ['BJV00217B097', 'Bank of Jamaica variable Rate Certificate of Deposit 20170209', '2']
        ];

        foreach ($securities as $security) {
            DB::table('securities')->insert([
                'isin_code' => $security[0],
                'description' => $security[1],
                'status_id' => $security[2],
            ]);
        }
    }
}
