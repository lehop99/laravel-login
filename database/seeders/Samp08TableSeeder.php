<?php

namespace Database\Seeders;
use DB;  //khac phuc loi khoi chay php artisan db:seed ma du lieu lai khong them vao table 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Samp08TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function(){
            \DB::table('bcontents') -> insert([
                [
                    'title' => 'テスト1',
                    'contents' => 'ブログ表示テスト1',
                    'tm' => date('Y-m-d'),
                ],
                
                [
                    'title' => 'テスト2',
                    'contents' => 'ブログ表示テスト2',
                    'tm' => date('Y-m-d'),
                ],
                
                [
                    'title' => 'テスト3',
                    'contents' => 'ブログ表示テスト3',
                    'tm' => date('Y-m-d'),
                ],
                
                [
                    'title' => 'テスト4',
                    'contents' => 'ブログ表示テスト4',
                    'tm' => date('Y-m-d'),
                ],
                
                [
                    'title' => 'テスト5',
                    'contents' => 'ブログ表示テスト5',
                    'tm' => date('Y-m-d'),
                ],
                
                [
                    'title' => 'テスト6',
                    'contents' => 'ブログ表示テスト6',
                    'tm' => date('Y-m-d'),
                ],
                
                [
                    'title' => 'テスト7',
                    'contents' => 'ブログ表示テスト7',
                    'tm' => date('Y-m-d'),
                ],
                
                 [
                    'title' => 'テスト8',
                    'contents' => 'ブログ表示テスト8',
                    'tm' => date('Y-m-d'),
                ],
                
                 [
                    'title' => 'テスト9',
                    'contents' => 'ブログ表示テスト9',
                    'tm' => date('Y-m-d'),
                ],
                
                 [
                    'title' => 'テスト10',
                    'contents' => 'ブログ表示テスト10',
                    'tm' => date('Y-m-d'),
                ],
                
                [
                    'title' => 'テスト11',
                    'contents' => 'ブログ表示テスト11',
                    'tm' => date('Y-m-d'),
                ],
                
                [
                    'title' => 'テスト12',
                    'contents' => 'ブログ表示テスト12',
                    'tm' => date('Y-m-d'),
                ],
                
                [
                    'title' => 'テスト13',
                    'contents' => 'ブログ表示テスト13',
                    'tm' => date('Y-m-d'),
                ],
                
                [
                    'title' => 'テスト14',
                    'contents' => 'ブログ表示テスト14',
                    'tm' => date('Y-m-d'),
                ],
                
                [
                    'title' => 'テスト15',
                    'contents' => 'ブログ表示テスト15',
                    'tm' => date('Y-m-d'),
                ]
                
            ]);
         });
    }
}
