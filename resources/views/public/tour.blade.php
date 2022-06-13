@extends('public.app')
@section('contents')

{{-- imgs/pano/pano5.jpg --}}
<div style="">
    <div class="row pt-4">
        <div class="col-12 col-lg-7 ">

                <div  class="card p-3 border-0">

                    <div class="card-header text-primary ">
                         <h5 class="text-center"> Panorama Tour</h5>
                    </div>

                    <div class="card-body m-0 p-0" >

                        <div id="panorama" style="max-width: 100%; height:65vh ;   "
                            class="m-auto">
                        </div>



                        <script>
                            pannellum.viewer('panorama', {
                                "default": {
                                    "firstScene": "main",
                                    "author": "ASTU MENTOR",
                                    "sceneFadeDuration": 1000,
                                    "autoRotate": -8,
                                    "autoLoad": true


                                },


                                "scenes": {


                                    "main": {
                                        "title": "Main Gate",
                                        "hfov": 110,
                                        "pitch": 4,
                                        "yaw": 117,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5310.jpg",
                                        "hotSpots": [{
                                                "pitch": 11,
                                                "yaw": 0,
                                                "type": "info",
                                                "text": "ASTU Main Gate",

                                            },
                                            {
                                                "pitch": 6,
                                                "yaw": 3,
                                                "type": "scene",
                                                "text": "Hawas Street",
                                                "sceneId": "hawas"
                                            },
                                            {
                                                "pitch": 7,
                                                "yaw": 100,
                                                "type": "scene",
                                                "text": "Geda Gate",
                                                "sceneId": "gedagate"
                                            }
                                        ]
                                    },


                                    "hawas": {
                                        "title": "Hawas Street",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5311.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 3,
                                                "yaw": 180,
                                                "type": "scene",
                                                "text": "Main Gate",
                                                "sceneId": "main"
                                            },

                                            {
                                                "pitch": 3,
                                                "yaw": 93,
                                                "type": "scene",
                                                "text": "Water Treatment plant",
                                                "sceneId": "water"
                                            }

                                        ]



                                    },

                                    "water": {
                                        "title": "Water treatment plant",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5312.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 3,
                                                "yaw": 250,
                                                "type": "scene",
                                                "text": "Research Park",
                                                "sceneId": "research"
                                            },

                                            {
                                                "pitch": 4,
                                                "yaw": 79,
                                                "type": "scene",
                                                "text": "Hawas Street",
                                                "sceneId": "hawas"
                                            },

                                            {
                                                "pitch": 2,
                                                "yaw": 4,
                                                "type": "info",
                                                "text": "Water Treatment plant",


                                            },
                                            {
                                                "pitch": 5,
                                                "yaw": 169,
                                                "type": "scene",
                                                "text": "Kerayu RoundAbout",
                                                "sceneId": "kroundabout"
                                            },

                                        ]
                                    },

                                    "kroundabout": {
                                        "title": "Kerayu RoundAbout",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5313.jpg",
                                        "hotSpots": [{
                                                "pitch": 6,
                                                "yaw": 307,
                                                "type": "scene",
                                                "text": "Water treatment Plant",
                                                "sceneId": "water"
                                            },

                                            {
                                                "pitch": 8,
                                                "yaw": 250,
                                                "type": "info",
                                                "text": "Applied Science Dept Building",
                                                "sceneId": "research"
                                            },

                                            {
                                                "pitch": 8,
                                                "yaw": 240,
                                                "type": "info",
                                                "text": "Civil Engineering Dept",
                                                "sceneId": ""
                                            },
                                            {
                                                "pitch": 10,
                                                "yaw": 189,
                                                "type": "scene",
                                                "text": "Applied Library",
                                                "sceneId": "applied"
                                            },

                                            {
                                                "pitch": 5,
                                                "yaw": 29,
                                                "type": "info",
                                                "text": "FreshMan Division",


                                            },
                                            {
                                                "pitch": 5,
                                                "yaw": 39,
                                                "type": "info",
                                                "text": "Sawa Gate",


                                            },


                                            {
                                                "pitch": 7,
                                                "yaw": 120,
                                                "type": "info",
                                                "text": "Senior  Male Students Dorms",


                                            }

                                        ]
                                    },

                                    "applied": {
                                        "title": "Applied Library",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5314.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 8,
                                                "yaw": 250,
                                                "type": "info",
                                                "text": "Senior  Male Students Dorm",
                                                "sceneId": ""
                                            },

                                            {
                                                "pitch": 8,
                                                "yaw": 120,
                                                "type": "info",
                                                "text": "Applied library",
                                                "sceneId": ""
                                            },


                                            {
                                                "pitch": 7,
                                                "yaw": 189,
                                                "type": "scene",
                                                "text": "Kereyu RoundAbout",
                                                "sceneId": "kroundabout"
                                            },



                                            {
                                                "pitch": 8,
                                                "yaw": -1,
                                                "type": "scene",
                                                "text": " ASTU STEM center",
                                                "sceneId": "stem"


                                            },

                                            {
                                                "pitch": 8,
                                                "yaw": 10,
                                                "type": "scene",
                                                "text": " Block 507",
                                                "sceneId": "cseclass"


                                            },
                                        ]
                                    },

                                    "stem": {
                                        "title": "ASTU STEM center",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5315.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 8,
                                                "yaw": 270,
                                                "type": "info",
                                                "text": "Senior  Male Students Dorm",
                                                "sceneId": ""
                                            },


                                            {
                                                "pitch": 7,
                                                "yaw": 215,
                                                "type": "scene",
                                                "text": "Applied Library",
                                                "sceneId": "applied"
                                            },



                                            {
                                                "pitch": 8,
                                                "yaw": -1,
                                                "type": "info",
                                                "text": " ASTU STEM center",



                                            },


                                            {
                                                "pitch": 8,
                                                "yaw": 65,
                                                "type": "scene",
                                                "text": " Block 510,509,508",
                                                "sceneId": "cseblock"


                                            },
                                        ]
                                    },

                                    "cseblock": {
                                        "title": "Block 510,509,508",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5319.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 10,
                                                "yaw": -35,
                                                "type": "info",
                                                "text": " CSE Senior Labs 509 ",
                                                "sceneId": "stem"


                                            },
                                            {
                                                "pitch": 10,
                                                "yaw": 178,
                                                "type": "info",
                                                "text": " Block 510 ",
                                                "sceneId": ""


                                            },



                                            {
                                                "pitch": 8,
                                                "yaw": -1,
                                                "type": "info",
                                                "text": " CSE Dept Building 508 ",
                                                "sceneId": ""


                                            },

                                            {
                                                "pitch": 8,
                                                "yaw": -12,
                                                "type": "scene",
                                                "text": " Mestawet Cafe ",
                                                "sceneId": "mestawet"


                                            },


                                            {
                                                "pitch": 3,
                                                "yaw": 97,
                                                "type": "scene",
                                                "text": " Block 507 ",
                                                "sceneId": "cseclass"


                                            },
                                            {
                                                "pitch": 7,
                                                "yaw": 152,
                                                "type": "scene",
                                                "text": " ASTU STEM Center ",
                                                "sceneId": "stem"


                                            },




                                        ]
                                    },

                                    "cseclass": {
                                        "title": "Block 507",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5316.jpg",
                                        "hotSpots": [{
                                                "pitch": 10,
                                                "yaw": -45,
                                                "type": "scene",
                                                "text": " Block 510,509,508 ",
                                                "sceneId": "cseblock"


                                            },
                                            {
                                                "pitch": 10,
                                                "yaw": -35,
                                                "type": "info",
                                                "text": " CSE Dept Building 508 ",
                                                "sceneId": ""


                                            },
                                            {
                                                "pitch": 10,
                                                "yaw": 178,
                                                "type": "info",
                                                "text": " Block 507 ",
                                                "sceneId": ""


                                            },
                                            {
                                                "pitch": 10,
                                                "yaw": 135,
                                                "type": "scene",
                                                "text": "ICT center",
                                                "sceneId": "ict"


                                            },
                                            {
                                                "pitch": 5,
                                                "yaw": 149,
                                                "type": "scene",
                                                "text": "Applied Library",
                                                "sceneId": "applied"


                                            },




                                            {
                                                "pitch": 8,
                                                "yaw": 15,
                                                "type": "scene",
                                                "text": " School of Humanities and Social Science ",
                                                "sceneId": "shss"


                                            },

                                            {
                                                "pitch": 8,
                                                "yaw": -27,
                                                "type": "scene",
                                                "text": " Mestawet Cafe ",
                                                "sceneId": "mestawet"
                                            },


                                        ]
                                    },

                                    "mestawet": {
                                        "title": "Block 507",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5320.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 7,
                                                "yaw": -85,
                                                "type": "scene",
                                                "text": " Temarinet ",
                                                "sceneId": "temari"
                                            },
                                            {
                                                "pitch": 7,
                                                "yaw": 110,
                                                "type": "scene",
                                                "text": " Block 510,509,508 ",
                                                "sceneId": "cseblock"
                                            },



                                            {
                                                "pitch": 8,
                                                "yaw": 15,
                                                "type": "scene",
                                                "text": " School of Electrical Engineering and Computing ",
                                                "sceneId": "soeec"


                                            },




                                        ]
                                    },

                                    "shss": {
                                        "title": "School of Humanities and Social Science",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5317.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 7,
                                                "yaw": -85,
                                                "type": "scene",
                                                "text": " Block 507 ",
                                                "sceneId": "cseclass"
                                            },



                                            {
                                                "pitch": 8,
                                                "yaw": 15,
                                                "type": "info",
                                                "text": "School of Humanities and Social Science ",
                                                "sceneId": ""


                                            },

                                            {
                                                "pitch": 7,
                                                "yaw": 75,
                                                "type": "scene",
                                                "text": "School of Electrical Engineering and Computing ",
                                                "sceneId": "soeec"
                                            },
                                            {
                                                "pitch": 7,
                                                "yaw": 100,
                                                "type": "info",
                                                "text": "School of Mechanical ,Chemical and Material Engineering ",
                                                "sceneId": ""
                                            },




                                        ]
                                    },

                                    "soeec": {
                                        "title": "School of Electrical Engineering and Computing ",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5318.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 7,
                                                "yaw": -125,
                                                "type": "scene",
                                                "text": " School of Humanities and Social Science",
                                                "sceneId": "shss"
                                            },
                                            {
                                                "pitch": 7,
                                                "yaw": -145,
                                                "type": "info",
                                                "text": " School of Mechanical ,Chemical and Material Engineering ",
                                                "sceneId": ""
                                            },


                                            {
                                                "pitch": 8,
                                                "yaw": 15,
                                                "type": "info",
                                                "text": " School of Electrical Engineering and Computing ",
                                                "sceneId": ""


                                            },


                                            {
                                                "pitch": 8,
                                                "yaw": 74,
                                                "type": "scene",
                                                "text": " TemariNet ",
                                                "sceneId": "temari"


                                            },

                                            {
                                                "pitch": 11,
                                                "yaw": 2,
                                                "type": "scene",
                                                "text": " Mestawet Cafe ",
                                                "sceneId": "mestawet"
                                            },


                                        ]
                                    },

                                    "research": {
                                        "title": "Research park",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5309.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 3,
                                                "yaw": 258,
                                                "type": "scene",
                                                "text": "Water treatment plant",
                                                "sceneId": "water"
                                            },

                                            {
                                                "pitch": 7,
                                                "yaw": 59,
                                                "type": "scene",
                                                "text": "Admin Building",
                                                "sceneId": "admin"


                                            },

                                            {
                                                "pitch": 23,
                                                "yaw": -23,
                                                "type": "info",
                                                "text": "Research park Building",

                                            },

                                            {
                                                "pitch": 10,
                                                "yaw": -76,
                                                "type": "scene",
                                                "text": "Water resource Dept",
                                                "sceneId": "resource"

                                            }






                                        ]
                                    },


                                    "resource": {
                                        "title": "Water Resource Dept",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5307.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 3,
                                                "yaw": 258,
                                                "type": "info",
                                                "text": "Water treatment plant",
                                                "sceneId": ""
                                            },

                                            {
                                                "pitch": 7,
                                                "yaw": 59,
                                                "type": "info",
                                                "text": "Research Park Building",
                                                "sceneId": ""


                                            },

                                            {
                                                "pitch": 10,
                                                "yaw": -15,
                                                "type": "scene",
                                                "text": "ICT Center",
                                                "sceneId": "ict"
                                            },

                                            {
                                                "pitch": 10,
                                                "yaw": -76,
                                                "type": "scene",
                                                "text": "Water resource Dept",
                                                "sceneId": "resource"

                                            }






                                        ]
                                    },

                                    "ict": {
                                        "title": "ICT Center Building",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5308.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 3,
                                                "yaw": 258,
                                                "type": "info",
                                                "text": "Water treatment plant",
                                                "sceneId": ""
                                            },

                                            {
                                                "pitch": 7,
                                                "yaw": 59,
                                                "type": "info",
                                                "text": "Material Engineering Dept Building",
                                                "sceneId": ""


                                            },


                                            {
                                                "pitch": 10,
                                                "yaw": 0,
                                                "type": "scene",
                                                "text": "Block 507",
                                                "sceneId": "cseclass"

                                            }






                                        ]
                                    },

                                    "admin": {
                                        "title": "Admin Buidling",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5302.jpg",
                                        "hotSpots": [{
                                                "pitch": 23,
                                                "yaw": -23,
                                                "type": "info",
                                                "text": "ASTU Admin Building",

                                            },
                                            {
                                                "pitch": 3,
                                                "yaw": 280,
                                                "type": "scene",
                                                "text": "Research Park",
                                                "sceneId": "research"
                                            },
                                            {
                                                "pitch": 3,
                                                "yaw": 113,
                                                "type": "scene",
                                                "text": "RoundAbout",
                                                "sceneId": "roundabout"
                                            },

                                        ]
                                    },

                                    "roundabout": {
                                        "title": "Admin Buidling",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5303.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 7,
                                                "yaw": 278,
                                                "type": "scene",
                                                "text": "Admin Buidling",
                                                "sceneId": "admin"
                                            },

                                            {
                                                "pitch": 7,
                                                "yaw": 320,
                                                "type": "scene",
                                                "text": "Central Library",
                                                "sceneId": "central"
                                            },



                                            {
                                                "pitch": 3,
                                                "yaw": 107,
                                                "type": "scene",
                                                "text": "New Hall Building",
                                                "sceneId": "newhall"
                                            },
                                            {
                                                "pitch": 5,
                                                "yaw": 131,
                                                "type": "scene",
                                                "text": " Geda Gate ",
                                                "sceneId": "gedagate"
                                            },

                                        ]
                                    },

                                    "newhall": {
                                        "title": " new Hall building",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5304.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 7,
                                                "yaw": 150,
                                                "type": "scene",
                                                "text": "Admin Buidling",
                                                "sceneId": "admin"
                                            },



                                            {
                                                "pitch": 4,
                                                "yaw": 160,
                                                "type": "scene",
                                                "text": "RoundAbout",
                                                "sceneId": "roundabout"
                                            },
                                            {
                                                "pitch": 7,
                                                "yaw": 45,
                                                "type": "info",
                                                "text": "New Hall Building",

                                            },

                                        ]
                                    },

                                    "gedagate": {
                                        "title": " Geda Gate",
                                        "hfov": 110,
                                        "yaw": 88,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5306.jpg",
                                        "hotSpots": [{
                                                "pitch": 7,
                                                "yaw": 367,
                                                "type": "scene",
                                                "text": "ASTU Main Gate",
                                                "sceneId": "main"
                                            },
                                            {
                                                "pitch": 7,
                                                "yaw": 88,
                                                "type": "scene",
                                                "text": "RoundAbout",
                                                "sceneId": "roundabout"
                                            },
                                            {
                                                "pitch": 7,
                                                "yaw": 110,
                                                "type": "info",
                                                "text": "Geda Gate",

                                            },

                                        ]
                                    },

                                    "central": {
                                        "title": "Central Library",
                                        "hfov": 110,
                                        "yaw": 88,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5301.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 7,
                                                "yaw": 50,
                                                "type": "scene",
                                                "text": "Admin Building",
                                                "sceneId": "admin"
                                            },

                                            {
                                                "pitch": 7,
                                                "yaw": 220,
                                                "type": "scene",
                                                "text": "Kebeki Lounge",
                                                "sceneId": "kebeki"
                                            },



                                            {
                                                "pitch": 7,
                                                "yaw": 3,
                                                "type": "info",
                                                "text": "Central Libray",

                                            },

                                        ]
                                    },

                                    "kebeki": {
                                        "title": "Kebeki Lounge",
                                        "hfov": 110,
                                        "yaw": 200,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5299.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 7,
                                                "yaw": 125,
                                                "type": "scene",
                                                "text": "Central Library",
                                                "sceneId": "central"
                                            },

                                            {
                                                "pitch": 7,
                                                "yaw": 220,
                                                "type": "info",
                                                "text": "Kebeki Lounge",
                                                "sceneId": ""
                                            },





                                            {
                                                "pitch": 7,
                                                "yaw": 270,
                                                "type": "scene",
                                                "text": "Female Libray",
                                                "sceneId": "female"

                                            },

                                        ]
                                    },

                                    "female": {
                                        "title": "Female library",
                                        "hfov": 110,
                                        "yaw": 0,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5300.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 7,
                                                "yaw": 125,
                                                "type": "scene",
                                                "text": "Central Library",
                                                "sceneId": "central"
                                            },

                                            {
                                                "pitch": 7,
                                                "yaw": -45,
                                                "type": "info",
                                                "text": "female library Building",
                                                "sceneId": ""
                                            },





                                            {
                                                "pitch": 7,
                                                "yaw": 270,
                                                "type": "scene",
                                                "text": "Amphitheater",
                                                "sceneId": "amphi"

                                            },

                                        ]
                                    },

                                    "amphi": {
                                        "title": "Amphitheater",
                                        "hfov": 110,
                                        "yaw": 0,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5322.jpg",
                                        "hotSpots": [{
                                                "pitch": 7,
                                                "yaw": 107,
                                                "type": "info",
                                                "text": "Oda Nebe Hall",
                                                "sceneId": ""
                                            },

                                            {
                                                "pitch": 7,
                                                "yaw": 95,
                                                "type": "scene",
                                                "text": "TemariNet",
                                                "sceneId": "temari"
                                            },





                                            {
                                                "pitch": 7,
                                                "yaw": 150,
                                                "type": "info",
                                                "text": "Student Main Lounge",
                                                "sceneId": ""
                                            },

                                            {
                                                "pitch": 7,
                                                "yaw": -45,
                                                "type": "scene",
                                                "text": "female library ",
                                                "sceneId": "female"
                                            },





                                            {
                                                "pitch": 7,
                                                "yaw": 215,
                                                "type": "scene",
                                                "text": "Penta  Buildings",
                                                "sceneId": "penta"

                                            },

                                        ]
                                    },


                                    "temari": {
                                        "title": "TemariNet",
                                        "hfov": 110,
                                        "yaw": 0,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5321.jpg",
                                        "hotSpots": [




                                            {
                                                "pitch": 10,
                                                "yaw": -26,
                                                "type": "info",
                                                "text": " Students cafe",
                                                "sceneId": ""
                                            },

                                            {
                                                "pitch": 8,
                                                "yaw": 110,
                                                "type": "scene",
                                                "text": "amphitheater",
                                                "sceneId": "amphi"
                                            },

                                            {
                                                "pitch": 5,
                                                "yaw": 178,
                                                "type": "scene",
                                                "text": "RoundAbout",
                                                "sceneId": "roundabout"
                                            },

                                            {
                                                "pitch": 5,
                                                "yaw": 206,
                                                "type": "info",
                                                "text": "temarinet",
                                                "sceneId": ""
                                            },

                                            {
                                                "pitch": 7,
                                                "yaw": 245,
                                                "type": "scene",
                                                "text": "mestawet Cafe",
                                                "sceneId": "mestawet"
                                            }








                                        ]
                                    },

                                    "penta": {
                                        "title": "Penta Buildings",
                                        "hfov": 110,
                                        "yaw": 0,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5323.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 7,
                                                "yaw": 125,
                                                "type": "scene",
                                                "text": "Central Library",
                                                "sceneId": "central"
                                            },

                                            {
                                                "pitch": 7,
                                                "yaw": 35,
                                                "type": "scene",
                                                "text": "basketball field ",
                                                "sceneId": "basket"
                                            },





                                            {
                                                "pitch": 7,
                                                "yaw": 270,
                                                "type": "info",
                                                "text": "female Dormitary",
                                                "sceneId": ""

                                            },

                                            {
                                                "pitch": 5,
                                                "yaw": 180,
                                                "type": "scene",
                                                "text": "Amphitheater",
                                                "sceneId": "amphi"

                                            },

                                        ]
                                    },

                                    "basket": {
                                        "title": "Basketball field",
                                        "hfov": 110,
                                        "yaw": 0,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5324.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 7,
                                                "yaw": 180,
                                                "type": "scene",
                                                "text": "Penta Buildings",
                                                "sceneId": "penta"
                                            },

                                            {
                                                "pitch": 12,
                                                "yaw": -10,
                                                "type": "scene",
                                                "text": "FootBall Stadium ",
                                                "sceneId": "stadium"
                                            },







                                        ]
                                    },

                                    "stadium": {
                                        "title": " ASTU FootBall Stadium ",
                                        "hfov": 110,
                                        "yaw": 0,
                                        "type": "equirectangular",
                                        "panorama": "imgs/pano/IMG_5325.jpg",
                                        "hotSpots": [

                                            {
                                                "pitch": 10,
                                                "yaw": 100,
                                                "type": "scene",
                                                "text": "BasketBall Field",
                                                "sceneId": "basket"
                                            },


                                            {
                                                "pitch": 7,
                                                "yaw": 175,
                                                "type": "info",
                                                "text": "Freshman Male Dorms",
                                                "sceneId": ""
                                            }

                                        ]
                                    },


























                                }



                            });

                        </script>

                    </div>

                    <div class="card-footer bg-white">

                   </div>
                </div>
        </div>



        <div class="col-12  col-lg-5">
                <div class="card text-center p-3  border-0">

                    <div class="card-header text-primary ">
                         <h4  class="text-center">Google Map</h4>
                    </div>

                    <div class="card-body p-0 m-0">

                        <div id="googleMap" style="max-width: 100%; height:65vh">
                        </div>

                        <script>
                            function myMap() {




                                var mapProp = {
                                    center: new google.maps.LatLng(8.557018955696472, 39.29101573928365),
                                    zoom: 100,
                                    mapTypeId: 'satellite'
                                };
                                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                                var gedaGate = new google.maps.LatLng(8.557047557395144, 39.290960004621724);
                                var mainGate = new google.maps.LatLng(8.557047557395144, 39.290960004621724);

                                
                                var admin = new google.maps.LatLng(8.561243511220374, 39.29023112189616);
                                var marker1 = new google.maps.Marker({
                                    position: gedaGate,
                                    title: "Geda Gate"
                                });

                                var marker2 = new google.maps.Marker({
                                    position: admin,
                                    title: "ASTU Admin Building"
                                });
                                marker1.setMap(map)
                                marker2.setMap(map)





                            }

                        </script>

                        <script
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlShxf-4jYSQtOalBn8460_CXVsWs8NVQ&callback=myMap">
                        </script>


                    </div>
                    <div class="card-header ">

                   </div>
                </div>





        </div>


    </div>
</div>
@endsection
