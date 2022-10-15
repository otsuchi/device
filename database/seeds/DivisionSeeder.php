<?php

use Illuminate\Database\Seeder;
use App\Division;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::create([
            'id' => '1',
            'name' => 'マーカー',
        ]);
        
        Division::create([
            'id' => '2',
            'name' => 'モード系',
        ]);
        
        Division::create([
            'id' => '3',
            'name' => 'レートレスポンス系',
        ]);
        
        Division::create([
            'id' => '4',
            'name' => '不応期系',
        ]);
        
        Division::create([
            'id' => '5',
            'name' => 'リード系',
        ]);
        
        Division::create([
            'id' => '6',
            'name' => '上限レート系',
        ]);
        
        Division::create([
            'id' => '7',
            'name' => '閾値・出力系',
        ]);
        
        Division::create([
            'id' => '8',
            'name' => '感度系',
        ]);
        
        Division::create([
            'id' => '9',
            'name' => 'PMT予防',
        ]);
        
        Division::create([
            'id' => '10',
            'name' => '心房細動（AF）抑制',
        ]);
        
        Division::create([
            'id' => '11',
            'name' => '自己伝導優先',
        ]);
        
        Division::create([
            'id' => '12',
            'name' => 'レートコントロール',
        ]);
        
        Division::create([
            'id' => '13',
            'name' => 'MRI',
        ]);
        
        Division::create([
            'id' => '14',
            'name' => 'アラート・警報',
        ]);
        
        Division::create([
            'id' => '15',
            'name' => '一次予防と二次予防',
        ]);
        
        Division::create([
            'id' => '16',
            'name' => 'ゾーンとNID',
        ]);
        
        Division::create([
            'id' => '17',
            'name' => '治療',
        ]);
        
        Division::create([
            'id' => '18',
            'name' => 'ショック極性系',
        ]);
        
        Division::create([
            'id' => '19',
            'name' => '識別機能系',
        ]);
        
        Division::create([
            'id' => '20',
            'name' => 'カウンタ系',
        ]);
        
        Division::create([
            'id' => '21',
            'name' => '両室同期系',
        ]);
        
        Division::create([
            'id' => '22',
            'name' => 'ペーシングテスト系',
        ]);
        
        Division::create([
            'id' => '23',
            'name' => '電池残量トラブル',
        ]);
        
        Division::create([
            'id' => '24',
            'name' => '不応期トラブル',
        ]);
        
        Division::create([
            'id' => '25',
            'name' => 'リードトラブル',
        ]);
        
        Division::create([
            'id' => '26',
            'name' => 'ペーシングフェイラー',
        ]);
        
        Division::create([
            'id' => '27',
            'name' => '感度トラブル',
        ]);
        
        Division::create([
            'id' => '28',
            'name' => '不適切作動',
        ]);
        //
    }
}
