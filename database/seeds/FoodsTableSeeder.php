<?php

use Illuminate\Database\Seeder;
use App\Food;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('foods')->insert([
            [
              'name' => 'ハンバーグ',
              'genre' => 'western',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'ステーキ',
              'genre' => 'western',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'ムニエル',
              'genre' => 'western',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'オムライス',
              'genre' => 'western',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => '焼き鳥',
              'genre' => 'japanese',
              'main_dish' => 'meat',
            ],
            [
              'name' => '肉じゃが',
              'genre' => 'japanese',
              'main_dish' => 'meat',
            ],
            [
              'name' => '焼き魚',
              'genre' => 'japanese',
              'main_dish' => 'fish',
            ],
            [
              'name' => '寿司',
              'genre' => 'japanese',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'たこ焼き',
              'genre' => 'japanese',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'お好み焼き',
              'genre' => 'japanese',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'コロッケ',
              'genre' => 'japanese',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => '鍋',
              'genre' => 'japanese',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => '餃子',
              'genre' => 'chinese',
              'main_dish' => 'meat',
            ],
            [
              'name' => '餃子',
              'genre' => 'chinese',
              'main_dish' => 'meat',
            ],
            [
              'name' => '回鍋肉',
              'genre' => 'chinese',
              'main_dish' => 'meat',
            ],
            [
              'name' => '麻婆豆腐',
              'genre' => 'chinese',
              'main_dish' => 'meat',
            ],
            [
              'name' => '酢豚',
              'genre' => 'chinese',
              'main_dish' => 'meat',
            ],
            [
              'name' => '小籠包',
              'genre' => 'chinese',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'エビチリ',
              'genre' => 'chinese',
              'main_dish' => 'fish',
            ],
            [
              'name' => '炒飯',
              'genre' => 'chinese',
              'main_dish' => 'fish',
            ],
            [
              'name' => '生ハム',
              'genre' => 'italian',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'カルボナーラ',
              'genre' => 'italian',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'ボンゴレ',
              'genre' => 'italian',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'アクアパッツァ',
              'genre' => 'italian',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'ペスカトーレ',
              'genre' => 'italian',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'ボロネーゼ',
              'genre' => 'italian',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'ペペロンチーノ',
              'genre' => 'italian',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'ジェノベーゼ',
              'genre' => 'italian',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'マルゲリータピザ',
              'genre' => 'italian',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'サムギョプサル(焼肉)',
              'genre' => 'korean',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'チキン',
              'genre' => 'korean',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'サムゲタン',
              'genre' => 'korean',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'プルコギ(牛肉の炒め煮)',
              'genre' => 'korean',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'カンジャンケジャン(蟹のしょうゆ漬け)',
              'genre' => 'korean',
              'main_dish' => 'fish',
            ],
            [
              'name' => '海鮮チヂミ',
              'genre' => 'korean',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'ビビンバ',
              'genre' => 'korean',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'チゲ(鍋)',
              'genre' => 'korean',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'チヂミ',
              'genre' => 'korean',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'キンパ(韓国風海苔巻き)',
              'genre' => 'korean',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'ガパオ',
              'genre' => 'thai',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'ガイヤーン（タイ風ローストチキン）',
              'genre' => 'thai',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'ラープ（ひき肉のレモングラス）',
              'genre' => 'thai',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'カオマンガイ',
              'genre' => 'thai',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'エビトースト',
              'genre' => 'thai',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'トムヤムクン',
              'genre' => 'thai',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'プーパッポンカリー(蟹のカレー炒め)',
              'genre' => 'thai',
              'main_dish' => 'fish',
            ],
            [
              'name' => '生春巻き',
              'genre' => 'thai',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => '空芯菜炒め',
              'genre' => 'thai',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'ヤムウンセン(春雨サラダ)',
              'genre' => 'thai',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'ソムタム(青パパイヤのサラダ)',
              'genre' => 'thai',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'フォアグラ',
              'genre' => 'french',
              'main_dish' => 'meat',
            ],
            [
              'name' => '`パテ',
              'genre' => 'french',
              'main_dish' => 'meat',
            ],
            [
              'name' => '鴨のコンフィ',
              'genre' => 'french',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'ビスク',
              'genre' => 'french',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'ムール貝',
              'genre' => 'french',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'ブイヤベース',
              'genre' => 'french',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'ポワレ',
              'genre' => 'french',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'ポトフ',
              'genre' => 'french',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'キッシュ',
              'genre' => 'french',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'アリゴ(ポテト✖︎チーズ)',
              'genre' => 'french',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'オニオンスープ',
              'genre' => 'french',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'ケバブ',
              'genre' => 'turkish',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'キョフテ(トルコ風肉団子)',
              'genre' => 'turkish',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'マントゥ(トルコ風水餃子)',
              'genre' => 'turkish',
              'main_dish' => 'meat',
            ],
            [
              'name' => 'サバサンド',
              'genre' => 'turkish',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'ドルマ(ムール貝のピラフ詰)',
              'genre' => 'turkish',
              'main_dish' => 'fish',
            ],
            [
              'name' => 'ギュヴェッチ(魚の煮込み料理)',
              'genre' => 'turkish',
              'main_dish' => 'fish',
            ],
            [
              'name' => '野菜のスープ',
              'genre' => 'turkish',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'サラダ',
              'genre' => 'turkish',
              'main_dish' => 'vegetable',
            ],
            [
              'name' => 'フムス',
              'genre' => 'turkish',
              'main_dish' => 'vegetable',
            ],
          ]);
    }
}
