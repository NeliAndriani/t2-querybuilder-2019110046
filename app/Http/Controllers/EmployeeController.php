<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class EmployeeController extends Controller
{
    public function index(){
        return "Executed Successfully";
    }

    public function insert(){

 $result = DB::table('employees')->insert([
        [
        'nip' => 'IT001',
        'nama_pegawai' => 'Neli Andriani',
        'tanggal_lahir' => '2001-08-06',
        'jabatan' => 'Manajer',
        'tanggal_masuk' =>'2020-10-10' ,
        'status' => '1'
        ],

        [
            'nip' => 'IT002',
            'nama_pegawai' => 'Merry',
            'tanggal_lahir' => '1995-03-01',
            'jabatan' => 'Asisten Manajer',
            'tanggal_masuk' =>'2020-10-10' ,
            'status' => '1'
            ],

            [
                'nip' => 'IT003',
                'nama_pegawai' => 'Saka',
                'tanggal_lahir' => '1989-01-19',
                'jabatan' => 'Kepala',
                'tanggal_masuk' =>'2010-07-15' ,
                'status' => '1'
                ],

                [
                    'nip' => 'IT004',
                    'nama_pegawai' => 'Noah',
                    'tanggal_lahir' => '1990-12-10',
                    'jabatan' => 'Manajer',
                    'tanggal_masuk' =>'2010-07-19' ,
                    'status' => '3'
                    ],

                    [
                        'nip' => 'IT005',
                        'nama_pegawai' => 'David',
                        'tanggal_lahir' => '2003-05-06',
                        'jabatan' => 'Staff',
                        'tanggal_masuk' =>'2022-02-01' ,
                        'status' => '1'
                        ],



        [
        'nip' => 'GU001',
        'nama_pegawai' => 'Steve',
        'tanggal_lahir' => '1995-09-12',
        'jabatan' => 'Supervisor',
        'tanggal_masuk' => '2018-06-23',
        'status' => '1'
        ],

        [
            'nip' => 'GU002',
            'nama_pegawai' => 'Luna',
            'tanggal_lahir' => '1997-05-12',
            'jabatan' => 'Staff',
            'tanggal_masuk' => '2021-04-20',
            'status' => '0'
            ],

            [
                'nip' => 'GU003',
                'nama_pegawai' => 'Ridho',
                'tanggal_lahir' => '1998-11-28',
                'jabatan' => 'Asisten Manajer',
                'tanggal_masuk' => '2018-07-09',
                'status' => '1'
                ],

                [
                    'nip' => 'GU004',
                    'nama_pegawai' => 'Rahmat',
                    'tanggal_lahir' => '1977-06-22',
                    'jabatan' => 'Kepala',
                    'tanggal_masuk' => '2012-08-05',
                    'status' => '1'
                    ],

                    [
                        'nip' => 'GU005',
                        'nama_pegawai' => 'Fajar',
                        'tanggal_lahir' => '1995-04-12',
                        'jabatan' => 'Staff',
                        'tanggal_masuk' => '2019-01-11',
                        'status' => '3'
                        ],


                        [
                            'nip' => 'KU001',
                            'nama_pegawai' => 'Carmen',
                            'tanggal_lahir' => '2001-10-19',
                            'jabatan' => 'Staff',
                            'tanggal_masuk' => '2020-02-20',
                            'status' => '1'
                            ],


        [
            'nip' => 'KU002',
            'nama_pegawai' => 'Cindy',
            'tanggal_lahir' => '1999-07-15',
            'jabatan' => 'Manajer',
            'tanggal_masuk' => '2018-05-20',
            'status' => '1'
            ],

            [
                'nip' => 'KU003',
                'nama_pegawai' => 'Agnes',
                'tanggal_lahir' => '2001-03-16',
                'jabatan' => 'Staff',
                'tanggal_masuk' => '2020-02-10',
                'status' => '0'
                ],

                [
                    'nip' => 'KU004',
                    'nama_pegawai' => 'Alena',
                    'tanggal_lahir' => '2001-04-19',
                    'jabatan' => 'Staff',
                    'tanggal_masuk' => '2020-02-20',
                    'status' => '3'
                    ],


                    [
                        'nip' => 'KU005',
                        'nama_pegawai' => 'Nita',
                        'tanggal_lahir' => '2001-12-22',
                        'jabatan' => 'Asisten Manajer',
                        'tanggal_masuk' => '2019-06-29',
                        'status' => '1'
                        ],


                        [
                            'nip' => 'MK001',
                            'nama_pegawai' => 'Raymond',
                            'tanggal_lahir' => '1988-03-09',
                            'jabatan' => 'Kepala',
                            'tanggal_masuk' => '2015-03-03',
                            'status' => '1'
                            ],

                            [
                                'nip' => 'MK002',
                                'nama_pegawai' => 'Timothy',
                                'tanggal_lahir' => '1985-11-29',
                                'jabatan' => 'Manajer',
                                'tanggal_masuk' => '2015-08-07',
                                'status' => '0'
                                ],


                                [
                                    'nip' => 'MK003',
                                    'nama_pegawai' => 'Felicia',
                                    'tanggal_lahir' => '1994-07-05',
                                    'jabatan' => 'Asisten Manajer',
                                    'tanggal_masuk' => '2017-06-23',
                                    'status' => '1'
                                    ],

                                    [
                                        'nip' => 'MK004',
                                        'nama_pegawai' => 'Chintya',
                                        'tanggal_lahir' => '1999-10-22',
                                        'jabatan' => 'Staf',
                                        'tanggal_masuk' => '2018-11-03',
                                        'status' => '3'
                                        ],

            [
                'nip' => 'MK006',
                'nama_pegawai' => 'Jhon',
                'tanggal_lahir' => '1997-01-09',
                'jabatan' => 'Staf',
                'tanggal_masuk' => '2019-04-03',
                'status' => '2'
                ],

                [
                    'nip' => 'PR005',
                    'nama_pegawai' => 'Raka',
                    'tanggal_lahir' => '1995-05-17',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2020-06-25',
                    'status' => '0'
                    ],

                    [
                        'nip' => 'PR002',
                        'nama_pegawai' => 'Ujang',
                        'tanggal_lahir' => '1974-02-17',
                        'jabatan' => 'Staf',
                        'tanggal_masuk' => '2020-06-25',
                        'status' => '1'
                        ],

                        [
                            'nip' => 'PR003',
                            'nama_pegawai' => 'Asep',
                            'tanggal_lahir' => '1983-05-11',
                            'jabatan' => 'Staf',
                            'tanggal_masuk' => '2016-03-06',
                            'status' => '3'
                            ],

                            [
                                'nip' => 'PR004',
                                'nama_pegawai' => 'Odang',
                                'tanggal_lahir' => '1970-10-09',
                                'jabatan' => 'Staf',
                                'tanggal_masuk' => '2014-11-04',
                                'status' => '2'
                                ],

                                [
                                    'nip' => 'PR006',
                                    'nama_pegawai' => 'Karya',
                                    'tanggal_lahir' => '1981-01-19',
                                    'jabatan' => 'Staf',
                                    'tanggal_masuk' => '2017-08-27',
                                    'status' => '1'
                                    ],

                                    [
                                        'nip' => 'PR007',
                                        'nama_pegawai' => 'Lukman',
                                        'tanggal_lahir' => '1986-05-14',
                                        'jabatan' => 'Staf',
                                        'tanggal_masuk' => '2013-07-27',
                                        'status' => '1'
                                        ],

                                        [
                                            'nip' => 'PR008',
                                            'nama_pegawai' => 'Hifdzi',
                                            'tanggal_lahir' => '1990-12-01',
                                            'jabatan' => 'Staf',
                                            'tanggal_masuk' => '2018-03-26',
                                            'status' => '1'
                                            ],

                                            [
                                                'nip' => 'PR009',
                                                'nama_pegawai' => 'Yulianti',
                                                'tanggal_lahir' => '1987-06-12',
                                                'jabatan' => 'Staf',
                                                'tanggal_masuk' => '2018-03-07',
                                                'status' => '0'
                                                ],

                                                [
                                                    'nip' => 'PR001',
                                                    'nama_pegawai' => 'Putra',
                                                    'tanggal_lahir' => '1990-08-16',
                                                    'jabatan' => 'Staf',
                                                    'tanggal_masuk' => '2018-05-03',
                                                    'status' => '0'
                                                    ],

                    [
                        'nip' => 'DV001',
                        'nama_pegawai' => 'Ahmad',
                        'tanggal_lahir' => '1980-02-26',
                        'jabatan' => 'Staf',
                        'tanggal_masuk' => '2015-11-10',
                        'status' => '3'
                        ],

                        [
                            'nip' => 'DV002',
                            'nama_pegawai' => 'Anto',
                            'tanggal_lahir' => '1977-09-23',
                            'jabatan' => 'Manajer',
                            'tanggal_masuk' => '2015-07-04',
                            'status' => '1'
                            ],

                            [
                                'nip' => 'DV003',
                                'nama_pegawai' => 'Andi',
                                'tanggal_lahir' => '1979-05-24',
                                'jabatan' => 'Asisten Manajer',
                                'tanggal_masuk' => '2015-11-10',
                                'status' => '0'
                                ],

                                [
                                    'nip' => 'DV004',
                                    'nama_pegawai' => 'Siti',
                                    'tanggal_lahir' => '1992-10-07',
                                    'jabatan' => 'Staf',
                                    'tanggal_masuk' => '2019-04-16',
                                    'status' => '3'
                                    ],

                                    [
                                        'nip' => 'DV005',
                                        'nama_pegawai' => 'Rani',
                                        'tanggal_lahir' => '1980-12-26',
                                        'jabatan' => 'Staf',
                                        'tanggal_masuk' => '2017-01-14',
                                        'status' => '1'
                                        ],

                                        [
                                            'nip' => 'DV006',
                                            'nama_pegawai' => 'Soleh',
                                            'tanggal_lahir' => '1972-08-22',
                                            'jabatan' => 'Staf',
                                            'tanggal_masuk' => '2013-09-10',
                                            'status' => '1'
                                            ],

                                            [
                                                'nip' => 'DV007',
                                                'nama_pegawai' => 'Yana',
                                                'tanggal_lahir' => '1981-03-09',
                                                'jabatan' => 'Manajer',
                                                'tanggal_masuk' => '2012-04-19',
                                                'status' => '1'
                                                ],
 ]);
}

public function select()
{

 $result = DB::table('employees')->get();   //Query semua data yang ada secara lengkap


 //$result = DB::table('employees')->where('tanggal_masuk', '<', '2018')->get();   //Query hanya pegawai yang tanggal masuknya sebelum tahun 2018


 //$result = DB::table('employees')->where('jabatan', 'Manajer')->get();   //Query pegawai yang jabatannya sebagai "Manajer"


 //$result = DB::table('employees')->where('status', '1')->get();   //Query pegawai yang statusnya "Aktif"


 //$result = DB::table('employees')->where('jabatan', 'Staf') ->where('status', '0')->get();   //Query pegawai yang jabatannya "Staf" dan statusnya "Cuti"


 //$result = DB::table('employees')->where('nip', 'like', 'GU%') ->where('tanggal_masuk', '>', '2019') ->where('tanggal_masuk', '<', '2021')->get();   //Query pegawai yang berasal dari divisi "Gudang" dan tanggal masuknya di dalam tahun 2019-2020


 //$result = DB::table('employees')->count(); echo "Jumlah data di tabel employees :".$result;   //Query jumlah data pegawai yang tersimpan di tabel

 //$dn = date('Y-m-d');
 //$result = DB::table('employees')->select('nama_pegawai')->whereRaw('DATEDIFF(tanggal_masuk), $dn')->get();    //Query nama pegawai dan masa kerjanya terhitung sejak tanggal masuk hingga hari ini dalam satuan hari


 //$result_it = DB::table('employees')->where('nip', 'like', 'IT%')->count();    //Query jumlah pegawai menurut divisi
 //echo "Jumlah pegawai di divisi IT :".$result_it; echo "<br>";
 //$result_gu = DB::table('employees')->where('nip', 'like', 'GU%')->count();
 //echo "Jumlah pegawai di divisi GU :".$result_gu; echo "<br>";
 //$result_ku = DB::table('employees')->where('nip', 'like', 'KU%')->count();
 //echo "Jumlah pegawai di divisi KU :".$result_ku; echo "<br>";
 //$result_mk = DB::table('employees')->where('nip', 'like', 'MK%')->count();
 //echo "Jumlah pegawai di divisi MK :".$result_mk; echo "<br>";
 //$result_pr = DB::table('employees')->where('nip', 'like', 'PR%')->count();
 //echo "Jumlah pegawai di divisi PR :".$result_pr; echo "<br>";
 //$result_dv = DB::table('employees')->where('nip', 'like', 'DV%')->count();
 //echo "Jumlah pegawai di divisi DV :".$result_dv; echo "<br>";


 //$result_staff = DB::table('employees')->where('jabatan', 'Staff')->count();    //Query jumlah pegawai menurut jabatannya
 //echo "Jumlah pegawai yg jabatannya Staff :".$result_staff; echo "<br>";
 //$result_asisten = DB::table('employees')->where('jabatan', 'Asisten Manajer')->count();
 //echo "Jumlah pegawai yg jabatannya Asisten Manajer :".$result_asisten; echo "<br>";
 //$result_manajer = DB::table('employees')->where('jabatan', 'Manajer')->count();
 //echo "Jumlah pegawai yg jabatannya Manajer :".$result_manajer; echo "<br>";
 //$result_supervisor = DB::table('employees')->where('jabatan', 'Supervisor')->count();
 //echo "Jumlah pegawai yg jabatannya Supervisor :".$result_supervisor; echo "<br>";
 //$result_kepala = DB::table('employees')->where('jabatan', 'Kepala')->count();
 //echo "Jumlah pegawai yg jabatannya Kepala :".$result_kepala; echo "<br>";


 //$result_cuti = DB::table('employees')->where('status', '0')->count();    //Query jumlah pegawai menurut status
 //echo "Jumlah pegawai yg statusnya cuti :".$result_cuti; echo "<br>";
 //$result_aktif = DB::table('employees')->where('status', '1')->count();
 //echo "Jumlah pegawai yg statusnya aktif :".$result_aktif; echo "<br>";
 //$result_phk = DB::table('employees')->where('status', '2')->count();
 //echo "Jumlah pegawai yg statusnya PHK :".$result_phk; echo "<br>";
 //$result_mundur = DB::table('employees')->where('status', '3')->count();
 //echo "Jumlah pegawai yg statusnya mengundurkan diri :".$result_mundur; echo "<br>";


 //$result = DB::table('employees')->orderby('tanggal_masuk', 'asc')->limit(1)->get();   //Query pegawai yang paling lama masa kerjanya


 //$result = DB::table('employees')->orderby('tanggal_masuk', 'desc')->limit(1)->get();   //Query pegawai yang paling baru masuk kerja


 //$result = DB::table('employees')->orderby('tanggal_lahir', 'asc')->orderby('tanggal_masuk', 'asc')->limit(1)->get();    //Query pegawai yang paling tua dan paling lama masa kerjanya


 //$result = DB::table('employees')->orderby('tanggal_lahir', 'desc')->orderby('tanggal_masuk', 'asc')->limit(1)->get();     //Query pegawai yang paling muda dan paling lama masa kerjanya


 //$result_it = DB::table('employees')->where('nip', 'like', 'IT%')->count();     //Query divisi yg paling banyak pegawainya
 //echo "Jumlah pegawai di divisi IT :".$result_it; echo "<br>";
 //$result_gu = DB::table('employees')->where('nip', 'like', 'GU%')->count();
 //echo "Jumlah pegawai di divisi GU :".$result_gu; echo "<br>";
 //$result_ku = DB::table('employees')->where('nip', 'like', 'KU%')->count();
 //echo "Jumlah pegawai di divisi KU :".$result_ku; echo "<br>";
 //$result_mk = DB::table('employees')->where('nip', 'like', 'MK%')->count();
 //echo "Jumlah pegawai di divisi MK :".$result_mk; echo "<br>";
 //$result_pr = DB::table('employees')->where('nip', 'like', 'PR%')->count();
 //echo "Jumlah pegawai di divisi PR :".$result_pr; echo "<br>";
 //$result_dv = DB::table('employees')->where('nip', 'like', 'DV%')->count();
 //echo "Jumlah pegawai di divisi DV :".$result_dv; echo "<br><br>";
 //echo "Jumlah pegawai terbanyak di divisi : PR (Produksi)  "; echo "<br><br>";


 //$result_it = DB::table('employees')->where('nip', 'like', 'IT%')->count();     //Query divisi yg paling sedikit pegawainya
 //echo "Jumlah pegawai di divisi IT :".$result_it; echo "<br>";
 //$result_gu = DB::table('employees')->where('nip', 'like', 'GU%')->count();
 //echo "Jumlah pegawai di divisi GU :".$result_gu; echo "<br>";
 //$result_ku = DB::table('employees')->where('nip', 'like', 'KU%')->count();
 //echo "Jumlah pegawai di divisi KU :".$result_ku; echo "<br>";
 //$result_mk = DB::table('employees')->where('nip', 'like', 'MK%')->count();
 //echo "Jumlah pegawai di divisi MK :".$result_mk; echo "<br>";
 //$result_pr = DB::table('employees')->where('nip', 'like', 'PR%')->count();
 //echo "Jumlah pegawai di divisi PR :".$result_pr; echo "<br>";
 //$result_dv = DB::table('employees')->where('nip', 'like', 'DV%')->count();
 //echo "Jumlah pegawai di divisi DV :".$result_dv; echo "<br><br>";
 //echo "Jumlah pegawai terbanyak di divisi : IT(Informasi Teknologi), GU(Gudang), KU(Keuangan), MK(Marketing) "; echo "<br><br>";




 //$result = DB::table('employees')->select('nip','status')->get();    //Query jumlah pegawai menurut divisi dan statusnya


 //$result = DB::table('employees')->select('nip','jabatan')->get();     //Query jumlah pegawai menurut divisi dan jabatannya



 //$result_25 = DB::table('employees')->where('tanggal_lahir', '>', '1997')->count();                                              //Query jumlah pegawai menurut kelompok usia
 //echo "Jumlah pegawai yg usianya < 25 tahun :".$result_25; echo "<br>";
 //$result_2535 = DB::table('employees')->where('tanggal_lahir', '<=', '1997')->where('tanggal_lahir', '>=', '1987') ->count();
 //echo "Jumlah pegawai yg usianya 25-35 tahun :".$result_2535; echo "<br>";
 //$result_3645 = DB::table('employees')->where('tanggal_lahir', '<=', '1986')->where('tanggal_lahir', '>=', '1977')->count();
 //echo "Jumlah pegawai yg usianya 36-45 :".$result_3645; echo "<br>";
 //$result_4655 = DB::table('employees')->where('tanggal_lahir', '<=', '1976')->where('tanggal_lahir', '>=', '1967')->count();
 //echo "Jumlah pegawai yg usianya 46-55 :".$result_4655; echo "<br>";
 //$result_55 = DB::table('employees')->where('tanggal_lahir', '<', '1967')->count();
 //echo "Jumlah pegawai yg usianya > 55 tahun :".$result_55; echo "<br>";




 return view('index', ['employees' => $result]);

 //return view('index', ['employees' => $result_it, $result_gu, $result_ku, $result_mk, $result_pr, $result_dv]);
 //return view('index', ['employees' => $result_staff, $result_asisten, $result_manajer, $result_supervisor, $result_kepala]);
 //return view('index', ['employees' => $result_cuti, $result_aktif, $result_phk, $result_mundur]);
 //return view('index', ['employees' => $result_25, $result_2535, $result_3645, $result_4655, $result_55]);


}

}
