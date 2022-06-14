<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'id' => 1,
            'name' => "FMD",
            'vm'=>"  ",
            'title' =>"Freshman Division",
            'description'=>" "
        ]);


        DB::table('schools')->insert([
            'id' => 2,
            'name' => "SOEEC",
            
            'vm'=>"<br>
            <strong>Vision</strong>
            <br>
            To produce a world-class competent electrical engineers and computing professionals who are equipped with necessary skills and knowledge to solve individuals and organizational problems of the country and bring about growth to the whole world.
            To excel in teaching, research, and industry linkage/consultancy at a national level as well as regionally in the field of Electrical Engineering and Computing.
            <br>
            <strong>Mission</strong>
            <br>
            To its students, the SoEEC provides world-class curricula that facilitate student-centered and research-oriented learning in Electrical Engineering and Computing field that are relevant to their lives and careers, valuable in terms of content and competencies, and connected to the needs of industry. \n\nTo industry, the SoEEC produces practitioner-oriented electrical engineers with the field of specialization in Electrical power, control, communication, Electronics, software, computer science and information system who can provide plausible scientific solutions to real world problems. The SoEEC actively partners with industries to provide students the opportunity to acquire practical skills from industry expertise.
            ",
            'title' =>"School of Electrical Engineering and Computing",
            'description'=>"School of Electrical Engineering and computing (SoEEC) is one of the largest and oldest schools in Adama Science and Technology University (ASTU).
            It was established following to the decomposition of previous School of Engineering and Information Technologies (SoE&IT) in to three schools.
           <br>
           The current School of Electrical Engineering & Computing is formed from the former Electrical Electronic Technology and Information Technology Departments of the former Nazareth Technical College NTC) since 1993.
           Since then the two departments have gone through different curriculums and naming. Within the past more than 25years the two departments consistently supplied skilled professionals in the field of Electrical,
            Electronics and Computing fields of studies (professions).  These days those graduates are playing a major role in various business, industries, institutions and research sectors of the nation in particular and
            globally in general.
           <br>
           The current School of Electrical Engineering and Computing is established following, the renaming of the Adama Science and Technology University by the Council of Ministers in May 2011. Currently, the School
            has three departments under it:  . Computer Science and Engineering (CSE) Department . Electronics and Communication Engineering (ECE) Department.
            Electrical Power and Control Engineering (EPCE) Department .
           The core strategy of the school is to pursue with the universities vision and mission in enhancing its research, university-industry link, academic and scholarly activities and become a center of excellence for its programs,
           thereby improving its eminence in national and international rankings. The SoEEC aspires to excel in research, teaching, and industry linkage/consultancy at a national level. Moreover, the school is attempting its best in
            producing competent engineers & computer scientists within the aforementioned programs that can solve pressing problems of industries, business organizations & societies. Accordingly, the school has established Special interest groups (SIG) in which academic staffs do consistent research activities with their students


           "
        ]);
        DB::table('schools')->insert([
            'id' => 3,
            'name' => "SoMCM",
            'vm'=>"  ",
            'title' =>"School of Mechanical, Chemical and Material Engineering",
            'description'=>" "
        ]);

        DB::table('schools')->insert([
            'id' => 4,
            'name' => "SoCEA",
            'vm'=>"  ",
            'title' =>"School of Civil Engineering and Architechture",
            'description'=>" "
        ]);


    }
}
