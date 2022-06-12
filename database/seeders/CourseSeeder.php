<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'id' =>1,
            'courseName'=>"Applied Mathematics I",
            'courseCode' => "MATH1101",
            'creditHour' =>4,
            'description'=>'Numbers; functions; Vectors; Matrices and Determinants; Limits and Continuity; Derivatives; Applications of the Derivative;
             The integral; Inverse Functions; In determinants Forms, Improper Integrals and Taylor Formula.',
            'type_id'=>"General Course",
            'school_id'=>1,
            'department_id'=>null,
            'year_id'=>"First Year",
            'semester_id'=>"First Semester",




        ]);


        DB::table('courses')->insert([
            'id' =>2,
            'courseName'=>"General Physics I",
            'courseCode' => "PHY1101",
            'creditHour' =>3,
            'description'=>'Mechanics: Motion in a Straight Line, Motion in Two and Three Dimensions, Force and Motion, Work, Energy, and Power, Conservation of Energy, Systems of Particles, Rotational Motion, Rotational Vectors and Angular, Momentum. Oscillations, Waves, and Fluids: Oscillatory Motion, Wave Motion, Fluid Motion. Thermodynamics: Temperature and Heat, the Thermal Behavior of Matter, Heat, Work, and the First Law of Thermodynamics, the Second Law of Thermodynamics ",
            ',
            'type_id'=>"General Course",
            'school_id'=>1,
            'department_id'=>null,
            'year_id'=>"First Year",
            'semester_id'=>"First Semester",




        ]);

        DB::table('courses')->insert([
            'id' =>3,
            'courseName'=>"General Chemistry",
            'courseCode' => "CHEM1101",
            'creditHour' =>3,
            'description'=>'Introduction to the study of modern chemistry, atom in modern chemistry, Chemical formulas, chemical equations, and reaction yields.
             Chemical Bonding and Molecular Structure, Chemical bonding: The classical Description, Introduction to Quantum Mechanics, Quantum Mechanics and Atomic
              Structure, Quantum Mechanics and Molecular Structure, Bonding in Organic Molecules, Bonding in Transition Metal Compounds and Coordinate Complexes. Kinetic
              Molecular Description of the State of Matter, The Gaseous State, Solids, Liquids, and Phase Transitions Solutions. Equilibrium in Chemical Reactions, Thermodynamic
              Processes, Spontaneous Processes and Thermodynamic Equilibrium, Chemical Equilibrium, Acid-Base Equilibrium, Solubility and Precipitation Equilibrium, Electrochemistry,
               Rates of Physical and Chemical Processes, Materials, Structure and Bonding in Solids, Inorganic Materials, Polymeric Materials and soft condensed Matter

            ',
            'type_id'=>"General Course",
            'school_id'=>1,
            'department_id'=>null,
            'year_id'=>"First Year",
            'semester_id'=>"First Semester",

        ]);


        DB::table('courses')->insert([
            'id' =>4,
            'courseName'=>"Introduction to Civics and Ethics",
            'courseCode' => "LAR1101",
            'creditHour' =>3,
            'description'=>'This course introduces students the basic concepts of Civics and Ethics at higher education level.
             It deals with concepts like citizenship, morality, profession and professional ethics. The course also acquaints students
              with fundamental concepts of professional ethics, society and state, development issues, environmental, democracy, good governance and globalization.


            ',
            'type_id'=>"General Course",
            'school_id'=>1,
            'department_id'=>null,
            'year_id'=>"First Year",
            'semester_id'=>"First Semester",

        ]);


        DB::table('courses')->insert([
            'id' =>5,
            'courseName'=>"Communicative English skill",
            'courseCode' => "ENG1101",
            'creditHour' =>3,
            'description'=>"This course is intended to develop and improve students' language competence.  This course is aimed at developing trainees’ communicative abilities in English which will help students to develop their communicative skills and overall language competence in English. Generally, this course will cover the specific language aspects described below. Developing basic functions of English language skills: reading (scanning, skimming, reading callistening for details, recognizing discourse markers, noticing the structure of a lecture, understanding speaker intentions, recognizing signposting, attending and following skills); writing (summarizing a text, synthesizing choppy sentences, writing argumentative texts, writing research report, writing a project report); speaking (introducing oneself and others, interviewing, discussions, stating and supporting propositions, stating one’s opinions, organizing and taking part in a debate, making a persuasive speech, questioning); vocabulary (working out meanings from context, synonyms, antonyms, collocations, definitions); grammar (relative clauses, modals, voice, conditionals, tense, reported speech).

            ",
            'type_id'=>"General Course",
            'school_id'=>1,
            'department_id'=>null,
            'year_id'=>"First Year",
            'semester_id'=>"First Semester",

        ]);

        DB::table('courses')->insert([
            'id' =>6,
            'courseName'=>"Introduction to Computing,",
            'courseCode' => "CSE1101",
            'creditHour' =>3,
            'description'=>"The course teaches the basic technique of computer programming and the basic knowledge in the computer structure, and use of the elective programming language to resolve given problems in structural programming. Based on the elective programming language, it teaches the data structure, input and output, flow control and incidental program, and by using the systematic division of problem solution and concept of module to solve the problems in numerical value field and nonnumerical value field with the program experiment.


            ",
            'type_id'=>"General Course",
            'school_id'=>1,
            'department_id'=>null,
            'year_id'=>"First Year",
            'semester_id'=>"First Semester",

        ]);

        DB::table('courses')->insert([
            'id' =>7,
            'courseName'=>"Health and Physical Education I",
            'courseCode' => "HPED1101",
            'creditHour' =>3,
            'description'=>"


            ",
            'type_id'=>"General Course",
            'school_id'=>1,
            'department_id'=>null,
            'year_id'=>"First Year",
            'semester_id'=>"First Semester",

        ]);


        DB::table('courses')->insert([
            'id' =>8,
            'courseName'=>"Electronic Circuits-I",
            'courseCode' => "ECE2101",
            'creditHour' =>3,
            'description'=>"
          Basic Semiconductor Theory; Semiconductor properties and pn junctions; Diodes and modeling; BJT device structure, physical operation and current-voltage characteristics ; BJT DC circuits ;BJT small-signal operation and models; Basic BJT amplifiers ;Biasing in BJT amplifier circuits ;Discrete-circuit BJT amplifiers; Introduction to differential and multistage amplifiers; MOSFET device structure, physical operation and current-voltage characteristics ;MOSFET DC circuits ;MOSFET small-signal operation and models ;Basic MOSFET amplifiers ;Biasing in MOSFET amplifier circuits ;Discrete-circuit MOSFET amplifiers; Power Amplifiers; Tuned Amplifiers


            ",
            'type_id'=>"General Course",
            'school_id'=>2,
            'department_id'=>null,
            'year_id'=>"Second Year",
            'semester_id'=>"First Semester",

        ]);

        DB::table('courses')->insert([
            'id' =>9,
            'courseName'=>"Data Structures and Algorithms",
            'courseCode' => "CSE2201",
            'creditHour' =>3,
            'description'=>"Builds on the foundation of CSE 1102 to introduce the fundamental concepts of data structures and the algorithms that proceed from them.


            ",
            'type_id'=>"General Course",
            'school_id'=>2,
            'department_id'=>null,
            'year_id'=>"Second Year",
            'semester_id'=>"First Semester",

        ]);

        DB::table('courses')->insert([
            'id' =>10,
            'courseName'=>"Object Oriented Programming",
            'courseCode' => "CSE2201",
            'creditHour' =>3,
            'description'=>"Builds on the foundation of CSE 1102 to introduce the fundamental concepts of data structures and the algorithms that proceed from them.


            ",
            'type_id'=>"General Course",
            'school_id'=>2,
            'department_id'=>null,
            'year_id'=>"Second Year",
            'semester_id'=>"First Semester",
          
        ]);



    }
}
